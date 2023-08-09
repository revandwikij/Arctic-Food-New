<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\Barang;
use App\Models\kategori;
use App\Models\Keranjang;
use App\Models\Pesan;
use App\Models\User;
use App\Models\DetailPesanan;
use App\Models\pelanggan;
use App\Models\users;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            // $akun= users::join('pelanggan', 'users.username', '=', 'pelanggan.username')
            // ->get(['users.*', 'pelanggan.*']);
            $Barang = Barang::find($Id_Barang);

            $keranjang  = new Keranjang;
            $keranjang->Id_Pelanggan = $user->id;
            $keranjang->Id_Barang = $Barang->Id_Barang;
            $keranjang->Jumlah = $request->jumlah_pesan;
            $keranjang->Harga_Satuan = $Barang->Harga;
            $keranjang->Sub_Total = $request->jumlah_pesan * $Barang->Harga;
            $keranjang->save();

            return redirect('/cart');

        }
    }

    public function hapus($Id_Keranjang)
    {
	DB::table('keranjang')->where('Id_Keranjang',$Id_Keranjang)->delete();
	return redirect('/cart');;
    }

    public function checkout()
    {
        $user=auth()->user();
        $Belanja = Keranjang::where('Id_Pelanggan', $user->id)->get();

        $totalharga = 0;
        $orderdetails = [];

        foreach($Belanja as $item)
        {
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

            $detail = new DetailPesanan();
            $detail->Id_Pesanan = $orderID;
            $detail->Id_Barang =  $data['Id_Barang'];
            $detail->Kuantitas = $data['Kuantitas'];
            $detail->Sub_Total = $data['Sub_Total'];
            $detail->save();

        }
    }

}
