<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\Barang;
use App\Models\Biaya_Ship;
use App\Models\DetailKeranjang;
use App\Models\kategori;
use App\Models\Keranjang;
use App\Models\pelanggan;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function home()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::paginate(3);
        $kategoris = kategori::all();
        // $join = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')
        //         ->get(['barang.*', 'kategori.*']);
        return view('index', compact('kategoris'),compact('barang'), compact('pelanggan'));
    }

    public function admin()
    {
        $pelanggan = pelanggan::count();
        // $alamat = Alamat::all();
        $test = pelanggan::join('Alamat', 'pelanggan.Id_Pelanggan', '=', 'Alamat.Id_Pelanggan')
                ->get(['pelanggan.*', 'Alamat.Alamat_Lengkap']);
        // $d = DB::select('CALL store_procedure_pelanggan()');
        $barang = Barang::count();
        $kategoris = kategori::all();
        return view('Penjual.home', compact('kategoris','test','pelanggan','barang'));
    }

    public function login()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('login', compact('kategoris'), compact('barang'), compact('pelanggan'));
    }
    public function regis()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('register', compact('kategoris'), compact('barang'), compact('pelanggan'));
    }
    public function cart()
    {
        $user = auth()->user();
        $test = DetailKeranjang::join('barang', 'barang.Id_Barang', '=', 'detail_keranjang.Id_Barang')
                ->join('keranjang', 'keranjang.Id_Keranjang', '=' ,'detail_keranjang.Id_Keranjang')
                ->join('pelanggan', 'pelanggan.Id_Pelanggan', '=' ,'keranjang.Id_Pelanggan')
                ->join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)
                ->get(['barang.*', 'detail_keranjang.*','pelanggan.*']);
        $pelanggan = pelanggan::all();
        $cekcart = Keranjang::join('pelanggan', 'keranjang.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')->join('users', 'pelanggan.email', '=', 'users.email')
                ->where('users.id', '=', $user->id)->select('keranjang.Id_Keranjang')->get();
        $alamat = Alamat::all();
        return view('users.shopping_cart',compact('test', 'cekcart','alamat'));
    }
    public function profil()
    {
        $user=auth()->user();
        $pelanggan = pelanggan::where('Id_Pelanggan', $user->id)->get();
        $barang = Barang::all();
        $kategoris = kategori::all();
        // $alamat = Alamat::join('biaya_shipping', 'alamat.Kota', '=', 'biaya_shipping.Kota')->get([]);
        $biaya_ship = Biaya_Ship::all();
        return view('users.profile', compact('kategoris','barang','pelanggan','biaya_ship'));
    }

    public function tambahadmin()
    {
        return view('Penjual.tambahadmin');
    }

    public function bayar()
    {
        $user=auth()->user();
        $pesan = Pesan::all();
        $alamat = Alamat::all()->find('Id_Pelanggan', '=', $user->id);
        return view('users.payment', compact('pesan'), compact('alamat'));

    }

    public function detail()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('users.detail', compact('kategoris'), compact('barang'), compact('pelanggan'));
    }

    public function barang()
    {
        $test = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')
                ->get(['barang.*', 'kategori.Kategori']);
        $pelanggan = pelanggan::all();
        return view('Penjual.tampil', compact('pelanggan', 'test'), ['test' => $test]);
    }

    public function tambahbarang()
    {
        // $test = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')
        //         ->get(['barang.*', 'kategori.Kategori']);
        $pelanggan = pelanggan::all();
        // $barang = Barang::all();
        $kategoris = kategori::all();
        return view('Penjual.tambah', compact('pelanggan','kategoris'));
    }

    public function datapelanggan()
    {
        $users = pelanggan::join('users', 'pelanggan.email', '=', 'users.email')->where('users.level', '=', 'pelanggan')->get('pelanggan.*');

        return view('users.index', compact('users'));
    }

    public function shop()
    {
        $barang = Barang::all();
        $kategori = kategori::all();
        return view('shop', compact('barang', 'kategori') ) ;
    }

    public function payment()
    {
        $user = auth()->user();
        $test = DetailKeranjang::join('barang', 'barang.Id_Barang', '=', 'detail_keranjang.Id_Barang')
                ->join('keranjang', 'keranjang.Id_Keranjang', '=' ,'detail_keranjang.Id_Keranjang')
                ->join('pelanggan', 'pelanggan.Id_Pelanggan', '=' ,'keranjang.Id_Pelanggan')
                ->join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)
                ->get(['barang.*', 'detail_keranjang.*','pelanggan.*']);
        $pelanggan = pelanggan::all();
        return view('payment',compact('test',));
    }

    public function pesanan()
    {
        return view ('Penjual.pesanan');
    }

    public function about()
    {
        return view ('about');
    }

    public function contact()
    {
        return view ('contact');
    }

    public function thanks()
    {
        return view ('thank');
    }

    public function dataship()
    {
        return view ('penjual.dataship');
    }

    public function tambahship()
    {
        return view ('penjual.tambahship');
    }


}
