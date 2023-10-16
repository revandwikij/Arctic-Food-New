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
        //
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

            $lastUid = UlasanModel::orderBy('id', 'desc')->first()->Id_Ulasan?? 'U000';
            $nextNumber = (int) substr($lastUid, 1) + 1;
            $newUid = 'U' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

            $ulasan = new UlasanModel;
            $ulasan->Id_Ulasan = $newUid;
            $ulasan->Id_Pelanggan = $kran;
            $ulasan->Id_Barang = $Barang->Id_Barang;
            $ulasan->Ulasan = $request->Ulasan;
            $ulasan->save();

            // return $ulasan;

            return redirect('/single/{Id_Barang}');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}