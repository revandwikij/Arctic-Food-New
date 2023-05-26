<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function cart()
    {
        return view('users.shopping_cart');
    }
}
