<?php

namespace App\Http\Controllers;

use App\Models\ModelUser;
use App\Models\pelanggan;
use App\Models\Penjual;
use App\Models\User;
use App\Models\users;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //validasi login
    public function validasi(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->level == 'pelanggan')
            {
                return redirect()->intended('/');
            }
            else if (Auth::user()->level == 'penjual')
            {
                return redirect()->intended('/admin');
            }
            else
            {
                return "Email atau password anda salah";
            }


        }

    }

    //logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    //register pembeli
    public function register(Request $request)
    {

        $lastUid = pelanggan::orderBy('id', 'desc')->first()->Id_Pelanggan ?? 'P000';
        $nextNumber = (int) substr($lastUid, 1) + 1;
        $newUid = 'P' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        pelanggan::create([
            'Id_Pelanggan' => $newUid,
            'username' => $request->username,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
            'email' => $request->email,
            'jenkel' => $request->jenkel,
            'no_telp' => $request->no_telp,
        ]);


        return redirect('/login');
    }
}
