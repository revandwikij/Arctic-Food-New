<?php

namespace App\Http\Controllers;

use App\Models\ModelUser;
use App\Models\pelanggan;
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

            return redirect()->intended('/');
        }
        return "Email atau password anda salah";
    }

    //logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    //register
    public function register(Request $request)
    {


        pelanggan::create([
            'id' => $request->id,
            'username' => $request->username,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
            'email' => $request->email,
            'jenkel' => $request->jenkel,
            'no_telp' => $request->no_telp
        ]);

        $request->validate([
            'password' =>'required|confirmed|min:8'
        ]);

        return redirect('/');
    }
}
