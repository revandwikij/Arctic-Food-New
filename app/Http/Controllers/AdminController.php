<?php

namespace App\Http\Controllers;


use App\Models\Barang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view ('Penjual.home');
    }
}
