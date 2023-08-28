<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\Barang;
use App\Models\kategori;
use App\Models\Keranjang;
use App\Models\Pesan;
use App\Models\User;
use App\Models\DetailKeranjang;
use App\Models\pelanggan;
use App\Models\Pembayaran;
use App\Models\users;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class PesanController extends Controller
{
    public function index ($Id_Barang)
    {
        $kategoris = kategori::all();
        $Barang = Barang::where('Id_Barang', $Id_Barang)->get();
        return view ('detail', compact('Barang'), compact('kategoris'));
    }

    public function pesan (Request $request, $Id_Barang)
    {
        $Barang = Barang::where('Id_Barang', $Id_Barang)->get();
        return redirect('/');
    }

    public function keranjang (Request $request, $Id_Barang)
    {
        if(Auth::id())
        {
            $user=auth()->user();
            $Barang = Barang::find($Id_Barang);
            // $cek = Keranjang::join('detail_keranjang', 'keranjang.Id_Keranjang', '=', 'detail_keranjang.Id_Keranjang')->where('Id_Pelanggan', $user->id)->where('Id_Barang', $Id_Barang)->value('Id_Keranjang');
            // $cek2 = Keranjang::where('Id_Pelanggan', $user->id)->where('Id_Barang', $Id_Barang)->value('Jumlah');
            $Belanja = DetailKeranjang::join('keranjang', 'detail_keranjang.Id_Keranjang', '=', 'keranjang.Id_Keranjang')->join('barang', 'barang.Id_Barang', '=', 'detail_keranjang.Id_Barang')->where('Id_Pelanggan', $user->id)->get();
            $detail =[];


            //  if(DetailKeranjang::where('Id_Barang', $Id_Barang)->exists())
            //  {
            //     DetailKeranjang::where('Id_Barang', $Id_Barang)->update([
            //         'Id_Keranjang' => $cek, //masih dummy harusnya diisi pake id keranjang user
            //         'Id_Pelanggan' => $user->id,
            //         'Id_Barang' => $Barang->Id_Barang,
            //         'Kuantitas' =>$request->jumlah_pesan,
            //         'Harga_Satuan' => $Barang->Harga,
            //         'Sub_Total' => $request->jumlah_pesan * $Barang->Harga
            //     ]);
            //     return redirect('/cart');
            //  }
            // else{

            foreach($Belanja as $item)
        {
            $subtotal = $item->Kuantitas * $item->Harga;
            $detail[] = [
                'Id_Barang' => $item->Id_Barang,
                'Kuantitas' => $item->Kuantitas,
                'Sub_Total' => $subtotal,
            ];
        }

            $keranjang  = new Keranjang;
            $keranjang->Id_Pelanggan = $user->id;
            $keranjang->save();

            $kerid = $keranjang->Id_Keranjang;
           
            foreach($detail as $isi)
            {
            $detkeranjang= new DetailKeranjang();
            $detkeranjang->Id_Keranjang = $kerid;
            $detkeranjang->Id_Barang = $isi['Id_Barang'];
            $detkeranjang->Kuantitas = $isi['Kuantitas'];
            $detkeranjang->Sub_Total = $isi['Sub_Total'];
            $detkeranjang->save();

            return redirect('/cart');
            }
            }
        
    }

    public function hapus($Id_Keranjang)
    {
	DB::table('keranjang')->where('Id_Keranjang',$Id_Keranjang)->delete();
	return redirect('/cart');;
    }

    public function checkout()
    {
        $pesan = Pesan::all();
        $user=auth()->user();
        $Belanja = DetailKeranjang::where('Id_Pelanggan', $user->id)->get();

        $totalharga = 0;
        $orderdetails = [];

        foreach($Belanja as $item)
        {
            $subtotal = $item->Jumlah * $item->Harga_Satuan;
            $totalharga += $subtotal;

           
        }

        $order = new Pesan();
        $order->Id_Pelanggan = $user->id;
        $order->Tgl_Pesanan = now();
        $order->Total = $totalharga;
        $order->save();

        $orderID = $order->Id_Pesanan;
        foreach ($orderdetails as $data) {

            // $detail = new DetailPesanan();
            // $detail->Id_Pesanan = $orderID;
            // $detail->Id_Barang =  $data['Id_Barang'];
            // $detail->Kuantitas = $data['Kuantitas'];
            // $detail->Sub_Total = $data['Sub_Total'];
            // $detail->save();

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
