<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pelanggan;

class pelangganController extends Controller
{
    public function index()
    {
        $data_pelanggan=pelanggan::all();
        return view('pelanggan/TampilPelanggan',compact('data_pelanggan'));
    }
}
