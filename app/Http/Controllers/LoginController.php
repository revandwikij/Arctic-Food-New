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
                return back();
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
        
        if(User::where('email', $request->email)->exists())
        {
            return back()->with('alert', 'Email sudah digunakan');
        }
        pelanggan::create([
            'Id_Pelanggan' => $newUid,
            'username' => $request->username,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
            'email' => $request->email,
            'jenkel' => $request->jenkel,
            'no_Telp' => $request->no_Telp,
        ]);


        return redirect('/login');
    }

    public function updatepassword(Request $request)
    {

    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required',
        'confirm_password' => 'required|same:new_password',
    ]);

    $user = User::find(Auth::user()->id);

    // Memeriksa apakah password lama sesuai
    if (Hash::check($request->old_password, $user->password)) {
        // Password lama cocok, lanjutkan dengan pembaruan
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect('/profile')->with('success', 'Password berhasil diperbarui.');
    } else {
        // Password lama tidak cocok
        return redirect('/profile')->with('error', 'Password lama tidak cocok. Silakan coba lagi.');
    }
}
}
