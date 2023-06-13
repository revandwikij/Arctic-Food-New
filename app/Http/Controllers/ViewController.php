<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\kategori;
use App\Models\Keranjang;
use App\Models\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function home()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::paginate(20);
        $kategoris = kategori::all();
        return view('Home', compact('kategoris'), compact('barang'), compact('pelanggan'));
    }

    public function admin()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::paginate(20);
        $kategoris = kategori::all();
        return view('Penjual.home', compact('kategoris'), compact('barang'), compact('pelanggan'));
    }

    public function login()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('sign-in', compact('kategoris'), compact('barang'), compact('pelanggan'));
    }
    public function regis()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('register', compact('kategoris'), compact('barang'), compact('pelanggan'));
    }
    public function cart()
    {
        $user = auth()->user();
        // $test = Keranjang::join('pelanggan', 'pelanggan.Id_Pelanggan', '=', 'keranjang.Id_Pelanggan')->get(['keranjang.*', 'pelanggan.*']);
        $test = Keranjang::join('barang', 'barang.Id_Barang', '=', 'keranjang.Id_Barang')
                ->join('pelanggan', 'pelanggan.Id_Pelanggan', '=' ,'keranjang.Id_Pelanggan')
                ->where('keranjang.Id_Pelanggan', '=', $user->id)
                ->get(['barang.*', 'keranjang.*','pelanggan.*']);
        $pelanggan = pelanggan::all();

        $kategoris = kategori::all();
        return view('users.shopping_cart', compact('kategoris'), compact('test'), compact('pelanggan'));
    }
    public function profil()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('users.profile', compact('kategoris'), compact('barang'), compact('pelanggan'));
    }

    public function tambahadmin()
    {
        return view('Penjual.tambahadmin');
    }

    public function detail()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('users.detail', compact('kategoris'), compact('barang'), compact('pelanggan'));
    }

    public function barang()
    {
        $test = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')
                ->get(['barang.*', 'kategori.Kategori']);
        $pelanggan = pelanggan::all();
        return view('Penjual.tampil', compact('pelanggan'), ['test' => $test]);
    }

    public function tambahbarang()
    {
        $test = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')
                ->get(['barang.*', 'kategori.Kategori']);
        $pelanggan = pelanggan::all();
        // $barang = Barang::all();
        // $kategoris = kategori::all();
        return view('Penjual.tambah', compact('pelanggan'), ['test' => $test]);
    }
}