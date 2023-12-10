<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use App\Models\Barang;
use App\Models\kategori;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

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
            'Brand' => 'required',
            'Berat' => 'required',
            'Foto_Barang' => 'required|image|mimes:jpeg,png,jpg',
            'Keterangan_Barang' => 'required',
        ]);

        $lastUid = Barang::orderBy('id', 'desc')->first()->Id_Barang ?? 'B000';
        $nextNumber = (int) substr($lastUid, 1) + 1;
        $newUid = 'B' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        if ($request->hasFile('Foto_Barang')) {
            $gambar = $request->file('Foto_Barang');
            $image = Image::make($gambar);
            $image->fit(389, 473);
            $path = public_path('uploads');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            $image->save($path . '/' . $filename);

        $Barang = new Barang;
        $Barang->Id_Barang = $newUid;
        $Barang->Id_Kategori = $request->Id_Kategori;
        $Barang->Nama_Barang = $request->Nama_Barang;
        $Barang->Foto_Barang = $filename;
        $Barang->Berat = $request->Berat;
        $Barang->Brand = $request->Brand;
        $Barang->Stok = $request->Stok;
        $Barang->Harga = $request->Harga;
        $Barang->Keterangan_Barang = $request->Keterangan_Barang;
        $Barang->save();

        activity_log::create([
            'Id_Log' => 'L' . date('Ymd') . mt_rand(1000, 9999),
            'email' => auth()->user()->email,
            'kegiatan' => "Admin " . auth()->user()->username . " telah menambah barang baru" ,
            'created_at' => now()
        ]);



        return redirect('/barang')->with('error', 'Gagal pastikan cek apakah sudah benar');
        }
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
	    return view('penjual.edit',['barang' => $barang],['kategoris' => $kategoris]);
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
            'Foto_Barang' => 'required|image|mimes:jpeg,png,jpg.svg',
            'Stok' => 'required',
            'Berat' => 'required',
            'Brand' => 'required',
            'Harga' => 'required',
            'Keterangan_Barang' => 'required',
        ]);

        if ($request->hasFile('Foto_Barang')) {
            $gambar = $request->file('Foto_Barang');
            $image = Image::make($gambar);
            $path = public_path('uploads');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            $image->save($path . '/' . $filename);



	DB::table('barang')->where('Id_Barang',$request->Id_Barang)->update([
		'Id_Barang' => $request->Id_Barang,
        'Id_Kategori' => $request->Id_Kategori,
        'Nama_Barang' => $request->Nama_Barang,
        'Foto_Barang' => $filename,
        'Stok' => $request->Stok,
        'Berat' => $request->Berat,
        'Brand' => $request->Brand,
        'Harga' => $request->Harga,
        'Keterangan_Barang' => $request->Keterangan_Barang
	]);

    activity_log::create([
        'Id_Log' => 'L' . date('Ymd') . mt_rand(1000, 9999),
        'email' => auth()->user()->email,
        'kegiatan' => "Admin " . auth()->user()->username . " telah mengubah data barang dengan Id Barang " . $request->Id_Barang,
        'created_at' => now()
    ]);

    return redirect('/barang')->with('error', 'Gagal pastikan cek apakah sudah benar');
}}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Barang)
    {

    if(Pesan::join('keranjang', 'keranjang.Id_Keranjang', '=', 'pesanan.Id_Keranjang')
    ->join('detail_keranjang', 'detail_keranjang.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
    ->where('detail_keranjang.Id_Barang', '=', $Id_Barang)
    ->where('pesanan.Status_Pesanan', '=', ['Menunggu Konfirmasi', 'Diproses', 'Dikirim'])
    ->exists())
    {
        return back()->with('error', 'Barang sedang dalam pesanan');
    }


    activity_log::create([
        'Id_Log' => 'L' . date('Ymd') . mt_rand(1000, 9999),
        'email' => auth()->user()->email,
        'kegiatan' => "Admin " . auth()->user()->username . " telah menghapus barang dengan Id Barang" . $Id_Barang,
        'created_at' => now()
    ]);

	Barang::where('Id_Barang',$Id_Barang)->delete();

    


	return redirect('/barang');
    }

    public function kategori()
    {
        $kategori = kategori::all();
        return view('penjual.kategori', compact('kategori'));
    }

    public function addkategori(Request $request)
    {
        $lastUid = kategori::orderBy('id', 'desc')->first()->Id_Kategori ?? 'C000';
        $nextNumber = (int) substr($lastUid, 1) + 1;
        $newUid = 'C' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        $kategori = new kategori();
        $kategori->Id_Kategori = $newUid;
        $kategori->kategori = $request->kategori;
        $kategori->save();

        activity_log::create([
            'Id_Log' => 'L' . date('Ymd') . mt_rand(1000, 9999),
            'email' => auth()->user()->email,
            'kegiatan' => "Admin " . auth()->user()->username . " telah menambah kategori baru" ,
            'created_at' => now()
        ]);

        return redirect('/kategori');
    }

    public function sorting(Request $request)
{

    $request = Barang::sortable(['Stok' => 'asc']);

    return view('penjual.barang');
}

}
