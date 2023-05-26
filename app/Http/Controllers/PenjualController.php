<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Seller.index')->with(['penjual' => Penjual::all(), ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Seller.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama_Toko' => 'required',
            'Email' => 'required',
            'No_Telp' => 'required',
            'Alamat_Toko' => 'required',
            'Kategori_Usaha' => 'required',
        ]);

        $Penjual = new Penjual;
        $Penjual->NIB = $request->NIB;
        $Penjual->Nama_Toko = $request->Nama_Toko;
        $Penjual->No_Telp = $request->No_Telp;
        $Penjual->Alamat_Toko = $request->Alamat_Toko;
        $Penjual->Kategori_Usaha = $request->Kategori_Usaha;
        $Penjual->save();

        return redirect('/index');
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
