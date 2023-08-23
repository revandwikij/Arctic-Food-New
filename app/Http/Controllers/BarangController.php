<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama_Barang' => 'required',
            'Stok' => 'required',
            'Harga' => 'required',
            'Foto_Barang' => 'required',
            'Keterangan_Barang' => 'required',
        ]);

        // $kategori = kategori::find('');

        $Foto_Barang = $request->file('Foto_Barang');
        $Foto_Ekstensi = $Foto_Barang->extension();
        $Foto_Nama = date('ymdhis').'.'. $Foto_Ekstensi;
        $Foto_Barang->move(public_path('Foto_Barang'), $Foto_Nama);

        return $request;
        $Barang = new Barang;
        $Barang->Id_Kategori = $request->Id_Kategori;
        $Barang->Nama_Barang = $request->Nama_Barang;
        $Barang->Foto_Barang = $Foto_Nama;
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
    public function edit($Id_Barang)
    {
        $kategoris = kategori::all();
	    $barang = DB::table('barang')->where('Id_Barang',$Id_Barang)->get();
	    return view('Penjual.edit',['barang' => $barang],['kategoris' => $kategoris]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'Id_Barang' => 'required',
            'Id_Kategori' => 'required',
            'Nama_Barang' => 'required',
            'Stok' => 'required',
            'Harga' => 'required',
            'Keterangan_Barang' => 'required',
        ]);

        $Foto_Barang = $request->file('Foto_Barang');
        $Foto_Ekstensi = $Foto_Barang->extension();
        $Foto_Nama = date('ymdhis').'.'. $Foto_Ekstensi;
        $Foto_Barang->move(public_path('Foto_Barang'), $Foto_Nama);
        $Foto['Foto_Barang'] = $Foto_Nama;



	DB::table('barang')->where('Id_Barang',$request->Id_Barang)->update([
		'Id_Barang' => $request->Id_Barang,
        'Id_Kategori' => $request->Id_Kategori,
        'Nama_Barang' => $request->Nama_Barang,
        'Foto_Barang' => $Foto_Nama,
        'Stok' => $request->Stok,
        'Harga' => $request->Harga,
        'Keterangan_Barang' => $request->Keterangan_Barang
	]);

	    return redirect('/Barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Barang)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
	DB::table('barang')->where('Id_Barang',$Id_Barang)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/Barang');;
    }

    public function search(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $barang = DB::table('barang')
        ->where('nama_barang','like',"%".$cari."%")
        ->paginate();

        // mengirim data barang ke view index
        return view('Home',['barang' => $barang]);
    }
}
