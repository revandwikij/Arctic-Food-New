<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\Barang;
use App\Models\kategori;
use App\Models\Keranjang;
use App\Models\Pesan;
use App\Models\User;

use App\Models\pelanggan;
use App\Models\users;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
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

    public function hpus($Id_Keranjang)
    {
	DB::table('keranjang')->where('Id_Keranjang',$Id_Keranjang)->delete();
	return redirect('/cart');;
    }

    public function mesen()
    {

        $user=auth()->user();
        $test = Keranjang::join('pelanggan', 'pelanggan.Id_Pelanggan', '=', 'keranjang.Id_Pelanggan')
        ->where('keranjang.Id_Pelanggan', '=', $user->id)
        ->get(['keranjang.*','pelanggan.*']);

        $total = Keranjang::sum('sub_total');

        $Pesan = new Pesan;
        $Pesan->Id_Pelanggan = $user->id;
        $Pesan->Id_Keranjang =  $user->id;
        $Pesan->Total = $total ;
        $Pesan->Tgl_Pesanan =  date('Y-m-d H:i:s', time());
        $Pesan->save();

        $alamat = Alamat::all();
        $pesan = Pesan::all();

        return view('users.payment', compact('alamat','pesan'));

    }

}