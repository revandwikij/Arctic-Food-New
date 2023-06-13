<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\kategori;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index ($Id_Barang)
    {
        $kategoris = kategori::all();
        $Barang = Barang::where('Id_Barang', $Id_Barang)->get();
        return view ('detail', compact('Barang'), compact('kategoris'));
    }

    public function pesan (Request $request, $Id_Barang)
    {
        $Barang = Barang::where('Id_Barang', $Id_Barang)->get();
        return redirect('/');
    }

    public function keranjang (Request $request, $Id_Barang)
    {
        if(Auth::id())
        {
            $user=auth()->user();
            // $akun= users::join('pelanggan', 'users.username', '=', 'pelanggan.username')
            // ->get(['users.*', 'pelanggan.*']);
            $Barang = Barang::find($Id_Barang);

            $keranjang  = new Keranjang;
            $keranjang->Id_Pelanggan = $user->id;
            $keranjang->Id_Barang = $Barang->Id_Barang;
            $keranjang->Kuantitas = $request->jumlah_pesan;
            $keranjang->Sub_Total = $request->jumlah_pesan * $Barang->Harga;
            $keranjang->save();

            return redirect('/cart');

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
    public function delete($Id_Barang)
    {
        // $products = session('cart');
        // foreach ($products as $key => $value)
        // {
        //     if ($value['id'] == $id)
        //     {
        //         unset($products [$key]);
        //     }
        // }
        // //put back in session array without deleted item
        // $request->session()->push('cart',$products);
        // //then you can redirect or whatever you need
        // return redirect()->back();

        DB::table('keranjang')->where('Id_Barang', $Id_Barang)->delete();

	    return redirect('/cart');
    }
}