<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\pelanggan;
use App\Models\UlasanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $Id_Barang)
    {
        if(Auth::id())
        {
            $request->validate([
                // 'Username' => 'required',
                'Ulasan' => 'required',
            ]);

            $user=auth()->user();
            $Barang = Barang::where('Id_Barang', $Id_Barang)->first();

            $cek = pelanggan::join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->select('pelanggan.Id_Pelanggan')->first();
            $pecah = json_decode($cek, true);
            $kran = $pecah['Id_Pelanggan'];

            $ulasan = new UlasanModel;
            $ulasan->Id_Ulasan =  'U' . date('Ymd') . mt_rand(1000, 9999);
            $ulasan->Id_Pelanggan = $kran;
            $ulasan->Id_Barang = $Barang->Id_Barang;
            $ulasan->Ulasan = $request->Ulasan;
            $ulasan->save();

             

            return back();
        }
    }

     
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

  
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
