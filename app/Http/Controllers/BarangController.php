<?php

namespace App\Http\Controllers;

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


        // function generateUniqueCode($prefix) {
        //     $lastBarang = Barang::latest()->first(); // Ambil data barang terakhir
        //     if ($lastBarang)
        //     {
        //         $lastCode = $lastBarang->Id_Barang; // Ambil kode terakhir dari barang
        //         $lastNumber = (int) substr($lastCode, strlen($prefix)); // Ambil nomor urut terakhir
        //         $nextNumber = $lastNumber + 1; // Hitung nomor urut berikutnya
        //         $newCode = $prefix . str_pad($nextNumber, 3, '0', STR_PAD_LEFT); // Gabungkan kode unik dengan nomor urut
        //         return $newCode;
        //     }
        //     else
        //     {
        //         // Jika belum ada data barang, mulai dari B001
        //         return $prefix . '001';
        //     }
        // }

        $lastUid = Barang::orderBy('id', 'desc')->first()->Id_Barang ?? 'B000';
        $nextNumber = (int) substr($lastUid, 1) + 1;
        $newUid = 'B' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);



        // $Foto_Barang = $request->file('Foto_Barang');
        // $Foto_Ekstensi = $Foto_Barang->extension();
        // $Foto_Nama = date('ymdhis').'.'. $Foto_Ekstensi;

        // $Foto = Image::make($Foto_Barang);
        // $Foto->crop(400,420);
        // $Foto_Barang->move(public_path('Foto_Barang'), $Foto_Nama);

        if ($request->hasFile('Foto_Barang')) {
            $gambar = $request->file('Foto_Barang');

            // Buat objek gambar dari file yang diunggah
            $image = Image::make($gambar);

            // Auto crop gambar sesuai dengan ukuran yang diinginkan (misalnya 400x400)
            $image->fit(389, 473);

            // Simpan gambar yang sudah di-crop
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
            'Foto_Barang' => 'required|image|mimes:jpeg,png,jpg.svg',
            'Stok' => 'required',
            'Berat' => 'required',
            'Brand' => 'required',
            'Harga' => 'required',
            'Keterangan_Barang' => 'required',
        ]);

        if ($request->hasFile('Foto_Barang')) {
            $gambar = $request->file('Foto_Barang');

            // Buat objek gambar dari file yang diunggah
            $image = Image::make($gambar);

            // Auto crop gambar sesuai dengan ukuran yang diinginkan (misalnya 400x400)
            $image->fit(389, 473);

            // Simpan gambar yang sudah di-crop
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
    ->where('pesanan.Status_Pesanan', '=', ['Menunggu Konfirmasi', 'Diproses', 'Dikirim']))
    {
        return 'Barang sedang dalam pesanan';
    }


	DB::table('barang')->where('Id_Barang',$Id_Barang)->delete();

	// alihkan halaman ke halaman Barang
	return redirect('/barang');
    }

    public function kategori()
    {
        $kategori = kategori::all();
        return view('Penjual.kategori', compact('kategori'));
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

        return redirect('/kategori');
    }

    public function sorting(Request $request)
{

    $request = Barang::sortable(['Stok' => 'asc']);

    return view('penjual.barang');
}

}
