<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlamatController extends Controller
{
    public function addaddress(Request $request)
    {
        if(Auth::id())
        {
             
            $request->validate([
                'Alamat' => 'required',
                'Kota' => 'required',
                'Pos' => 'required',
                'Label' => 'required',
                'Nama_Penerima' => 'required',
                'No_Hp' => 'required',
            ]);

            $lastUid = Alamat::orderBy('id', 'desc')->first()->Id_Alamat ?? 'A000';
            $nextNumber = (int) substr($lastUid, 1) + 1;
            $newUid = 'A' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

            $user = auth()->user();
            $user1 = pelanggan::join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->first();

            $alamat = new Alamat;
            $alamat->Id_Alamat = $newUid;
            $alamat->Id_Pelanggan = $user1->Id_Pelanggan;
            $alamat->Label = $request->Label;
            $alamat->Alamat_Lengkap = $request->Alamat;
            $alamat->Nama_Penerima = $request->Nama_Penerima;
            $alamat->No_Hp = $request->No_Hp;
            $alamat->Kota = $request->Kota;
            $alamat->Kode_Pos = $request->Pos;
            $alamat->save();

            return redirect('/profil');

        }
    }
}
