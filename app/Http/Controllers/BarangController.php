<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('Penjual.tampil')->with(['barang' => Barang::all(), ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Penjual.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Id_Kategori' => 'required',
            'Nama_Barang' => 'required',
            'Stok' => 'required',
            'Harga' => 'required',
            'Keterangan_Barang' => 'required',
        ]);

        $Barang = new Barang;
        $Barang->Id_Kategori = $request->Id_Kategori;
        $Barang->Nama_Barang = $request->Nama_Barang;
        $Barang->Stok = $request->Stok;
        $Barang->Harga = $request->Harga;
        $Barang->Keterangan_Barang = $request->Keterangan_Barang;
        $Barang->save();

        return redirect('/Barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ('Penjual.edit')->with(['barang' => Barang::find($id), ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Id_Kategori' => 'required',
            'Nama_Barang' => 'required',
            'Stok' => 'required',
            'Harga' => 'required',
            'Keterangan_Barang' => 'required',
        ]);

        $Barang = Barang::find($id);
        $Barang->Id_Kategori = $request->Id_Kategori;
        $Barang->Nama_Barang = $request->Nama_Barang;
        $Barang->Stok = $request->Stok;
        $Barang->Harga = $request->Harga;
        $Barang->Keterangan_Barang = $request->Keterangan_Barang;
        $Barang->save();

        return redirect('/Barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
