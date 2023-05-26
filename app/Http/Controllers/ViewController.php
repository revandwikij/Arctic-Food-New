<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        $kategoris = kategori::all();
        return view('Home', compact('kategoris'));
    }
    public function login()
    {
        $kategoris = kategori::all();
        return view('sign-in', compact('kategoris'));
    }
    public function regis()
    {
        $kategoris = kategori::all();
        return view('register', compact('kategoris'));
    }
    public function profile()
    {
        $kategoris = kategori::all();
        return view('profile', compact('kategoris'));
    }
}
