<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
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
            ]);

            $user=auth()->user();
            // $akun= users::join('pelanggan', 'users.username', '=', 'pelanggan.username')
            // ->get(['users.*', 'pelanggan.*']);
            $alamat  = new Alamat;
            $alamat->Id_Pelanggan = $user->id;
            $alamat->Alamat = $request->Alamat;
            $alamat->save();

            return redirect('/profil');

        }
    }
}