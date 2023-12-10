<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Biaya_Ship;
use App\Models\pelanggan;
use App\Models\Pesan;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->input('cari');

        // mengambil data dari table Barang sesuai pencarian data
        // $test = Barang::where('nama_barang','like',"%".$cari."%")->paginate();
        $test = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')
                ->where('nama_barang','like',"%".$cari."%")->paginate();

        // mengirim data barang ke view index
        return view('penjual.cari_barang',['test' => $test, 'cari' => $cari]);
    }

    public function searchbarang(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->input('cari');

        // mengambil data dari table Barang sesuai pencarian data
        // $test = Barang::where('nama_barang','like',"%".$cari."%")->paginate();
        $test = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')
                ->where('nama_barang','like',"%".$cari."%")->paginate();

        // mengirim data barang ke view index
        return view('penjual.searchbarang',['test' => $test, 'cari' => $cari]);
    }

    public function searchuser(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->input('cari');

        // mengambil data dari table Barang sesuai pencarian data
        // $test = Barang::where('nama_barang','like',"%".$cari."%")->paginate();
        $users = pelanggan::join('users', 'pelanggan.email', '=', 'users.email')
                ->where('pelanggan.username','like',"%".$cari."%")->paginate();

        // mengirim data barang ke view index
        return view('penjual.searchuser',['users' => $users, 'cari' => $cari]);
    }

    public function searchship(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->input('cari');

        // mengambil data dari table Barang sesuai pencarian data
        // $test = Barang::where('nama_barang','like',"%".$cari."%")->paginate();
        $ship = Biaya_Ship::where('Kota','like',"%".$cari."%")->get();

        // mengirim data barang ke view index
        return view('penjual.searchship',['ship' => $ship, 'cari' => $cari]);
    }

    public function searchpesanan(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->input('cari');

        // mengambil data dari table Barang sesuai pencarian data
        // $test = Barang::where('nama_barang','like',"%".$cari."%")->paginate();
        $pesan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
        ->join('alamat', 'pesanan.Id_Alamat', '=', 'alamat.Id_Alamat')
        ->join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
        ->join('pembayaran', 'shipping.Id_Shipping', '=', 'pembayaran.Id_Shipping')
        // ->where('pesanan.Status_Pesanan', '=', 'Selesai')
        // ->orwhere('pesanan.Status_Pesanan', '=', 'Diterima')
        ->where('pesanan.Id_Pesanan','like',"%".$cari."%")
        ->get();
        // dd($pesan);

        // mengirim data barang ke view index
        return view('penjual.searchpesanan',['pesan' => $pesan, 'cari' => $cari]);
    }
}
