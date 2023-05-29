<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index ($Id_Barang)
    {
        $Barang = Barang::where('Id_Barang', $Id_Barang)->first();
        return view ('detail', compact('Barang'));
    }
}
