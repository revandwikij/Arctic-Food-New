<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\Barang;
use App\Models\DetailKeranjang;
use App\Models\kategori;
use App\Models\Keranjang;
use App\Models\Pesan;
use App\Models\User;
use App\Models\DetailPesanan;
use App\Models\pelanggan;
use App\Models\Pembayaran;
use App\Models\users;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class PesanController extends Controller
{
    public function index($Id_Barang)
    {
        $kategoris = kategori::all();
        $Barang = Barang::where('Id_Barang', $Id_Barang)->get();
        return view('detail', compact('Barang'), compact('kategoris'));
    }

    public function pesan(Request $request, $Id_Barang)
    {
        $Barang = Barang::where('Id_Barang', $Id_Barang)->get();
        return redirect('/');
    }

    public function keranjang(Request $request, $Id_Barang)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $Barang2 = Barang::where('Id_Barang' , $Id_Barang)->first();
            $cek = Pelanggan::join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->select('pelanggan.Id_Pelanggan')->first();
            $pecah = json_decode($cek, true);
            $kran = $pecah['Id_Pelanggan'];


            $lastUid1 = DetailKeranjang::orderBy('id', 'desc')->first()->Id_Detail_Keranjang ?? 'D000';
            $nextNumber1 = (int) substr($lastUid1, 1) + 1;
            $newUid1 = 'D' . str_pad($nextNumber1, 3, '0', STR_PAD_LEFT);

            $lastUid = Keranjang::orderBy('id', 'desc')->first()->Id_Keranjang ?? 'K000';
            $nextNumber = (int) substr($lastUid, 1) + 1;
            $newUid = 'K' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

            if (Keranjang::where('Id_Pelanggan', $kran)->exists()) {


                $cekcart = Keranjang::join('pelanggan', 'keranjang.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')->join('users', 'pelanggan.email', '=', 'users.email')
                    ->where('users.id', '=', $user->id)->select('keranjang.Id_Keranjang')->first();
                $pecah2 = json_decode($cekcart, true);
                $kran2 = $pecah2['Id_Keranjang'];

                $cekbarang = DetailKeranjang::join('keranjang', 'detail_keranjang.Id_Keranjang', '=', 'keranjang.Id_Keranjang')->join('pelanggan', 'keranjang.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')->join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->where('detail_keranjang.Id_Barang' , '=', $Barang2->Id_Barang)->first();


                if ($cekbarang) {

                    if (DetailKeranjang::where('Id_Barang', $cekbarang->Id_Barang)->exists()) {
                        DetailKeranjang::where('Id_Barang', $Barang2->Id_Barang)->update([
                            'Id_Keranjang' => $kran2, //masih dummy harusnya diisi pake id keranjang user
                            // 'Id_Detail_Keranjang' => $detkran,
                            'Id_Barang' => $Barang2->Id_Barang,
                            'Kuantitas' => $request->jumlah_pesan,
                            'Sub_Total' => $request->jumlah_pesan * $Barang2->Harga
                        ]);
                        return redirect('/cart');
                    }
                } else {


                    $coba = new DetailKeranjang();
                    $coba->Id_Detail_Keranjang = $newUid1;
                    $coba->Id_Keranjang = $kran2;
                    $coba->Id_Barang = $Barang2->Id_Barang;
                    $coba->Kuantitas = $request->jumlah_pesan;
                    $coba->Sub_Total = $Barang2->Harga * $request->jumlah_pesan;
                    $coba->save();

                    return redirect('/cart');
                }
            } else {
                $keranjang  = new Keranjang;
                $keranjang->Id_Keranjang = $newUid;
                $keranjang->Id_Pelanggan = $kran;
                $keranjang->save();

                $cek4 = $keranjang->Id_Keranjang;
                $coba = new DetailKeranjang();
                $coba->Id_Detail_Keranjang = $newUid1;
                $coba->Id_Keranjang = $cek4;
                $coba->Id_Barang = $Barang2->Id_Barang;
                $coba->Kuantitas = $request->jumlah_pesan;
                $coba->Sub_Total = $Barang2->Harga * $request->jumlah_pesan;
                $coba->save();


                return redirect('/cart');
            }
        }
    }

    public function hapus($Id_Detail_Keranjang)
    {
        DB::table('detail_keranjang')->where('Id_Detail_Keranjang', $Id_Detail_Keranjang)->delete();
        return redirect('/cart');;
    }

    public function checkout()
    {
        $pesan = Pesan::all();
        $user = auth()->user();
        $Belanja = Keranjang::where('Id_Pelanggan', $user->id)->get();

        $totalharga = 0;
        $orderdetails = [];

        foreach ($Belanja as $item) {
            $subtotal = $item->Jumlah * $item->Harga_Satuan;
            $totalharga += $subtotal;

            $orderdetails[] = [
                'Id_Barang' => $item->Id_Barang,
                'Kuantitas' => $item->Jumlah,
                'Sub_Total' => $subtotal,
            ];
        }

        $order = new Pesan();
        $order->Id_Pelanggan = $user->id;
        $order->Tgl_Pesanan = now();
        $order->Total = $totalharga;
        $order->save();

        $orderID = $order->Id_Pesanan;
        foreach ($orderdetails as $data) {

            $detail = new DetailKeranjang();
            $detail->Id_Pesanan = $orderID;
            $detail->Id_Barang =  $data['Id_Barang'];
            $detail->Kuantitas = $data['Kuantitas'];
            $detail->Sub_Total = $data['Sub_Total'];
            $detail->save();

            return view('users.payment', compact('pesan'));
        }
    }

    public function pembayaran(Request $request, $Id_Pesanan)
    {
        $order = Pesan::findorFail($Id_Pesanan);

        $bayar = new Pembayaran();
        $bayar->Id_Pesanan = $order->Id_Pesanan;
        $bayar->Metode_Pembayaran = $request->Metode_Pembayaran;
        $bayar->Total_Harga = $order->Total;
        $bayar->Status_Pembayaran = $order->Id_Pesanan;
        $bayar->Tgl_Pembayaran = now();
    }
}
