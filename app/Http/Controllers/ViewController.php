<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\kategori;
use App\Models\pelanggan;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('Home', compact('kategoris'), compact('barang'), compact('pelanggan'));
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
        $pelanggan = pelanggan::all();
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('users.shopping_cart', compact('kategoris'), compact('barang'), compact('pelanggan'));
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
}