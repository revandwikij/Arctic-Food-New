<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\kategori;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        $kategoris = kategori::all();
        $barang = Barang::all();
        return view('Home', compact('kategoris'), compact('barang'));
    }
    public function login()
    {
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('sign-in', compact('kategoris'), compact('barang'));
    }
    public function regis()
    {
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('register', compact('kategoris'), compact('barang'));
    }
    public function profile()
    {
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('profile', compact('kategoris'), compact('barang'));
    }
}
