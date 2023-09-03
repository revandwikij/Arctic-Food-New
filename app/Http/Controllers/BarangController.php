<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\kategori;
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
            'Foto_Barang' => 'required|image|mimes:jpeg,png,jpg.',
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



        // return $request;
        $Barang = new Barang;
        $Barang->Id_Barang = $newUid;
        $Barang->Id_Kategori = $request->Id_Kategori;
        $Barang->Nama_Barang = $request->Nama_Barang;
        $Barang->Foto_Barang = $filename;
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
            'Harga' => 'required',
            'Keterangan_Barang' => 'required',
        ]);

        $Foto_Barang = $request->file('Foto_Barang');
        $Foto_Ekstensi = $Foto_Barang->extension();
        $Foto_Nama = date('ymdhis').'.'. $Foto_Ekstensi;

        $Foto = Image::make($Foto_Barang);
        $Foto->crop(400,420);
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

    return redirect('/barang')->with('error', 'Gagal pastikan cek apakah sudah benar');
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
	return redirect('/barang');;
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



}
