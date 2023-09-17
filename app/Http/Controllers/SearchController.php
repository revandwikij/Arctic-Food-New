<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Biaya_Ship;
use App\Models\pelanggan;
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
        return view('Penjual.cari_barang',['test' => $test, 'cari' => $cari]);
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
        return view('Penjual.searchbarang',['test' => $test, 'cari' => $cari]);
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
        return view('Penjual.searchuser',['users' => $users, 'cari' => $cari]);
    }

    public function searchship(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->input('cari');

        // mengambil data dari table Barang sesuai pencarian data
        // $test = Barang::where('nama_barang','like',"%".$cari."%")->paginate();
        $ship = Biaya_Ship::where('Kota','like',"%".$cari."%")->get();

        // mengirim data barang ke view index
        return view('Penjual.searchship',['ship' => $ship, 'cari' => $cari]);
    }
}
