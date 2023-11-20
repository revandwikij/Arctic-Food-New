<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
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

    public function validasi(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->level == 'pelanggan') {
                // activity()->causedBy(Auth::user())->log('user'. auth()->user()->username. 'telah login');
                activity_log::create([
                    'Id_Log' => 'L' . date('Ymd') . mt_rand(1000, 9999),
                    'email' => auth()->user()->email,
                    'kegiatan' => "user " . auth()->user()->username . " telah melakukan login",
                    'created_at' => now()
                ]);
                return redirect()->intended('/');
            } elseif (Auth::user()->level == 'penjual') {
                // activity()->causedBy(Auth::user())->log('user'. auth()->user()->username. 'telah login');
                return redirect()->intended('/admin');
            } else {
                return view('layouting.error');
            }
        }

        return back()->with('loginError', 'Email or password is incorrect.');
    }




    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }


    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|alpha',
            'password' => 'required',
            'email' => 'required|email',
            'jenkel' => 'required',
            'no_Telp' => 'required|numeric',

        ]);

        $lastUid = pelanggan::orderBy('id', 'desc')->first()->Id_Pelanggan ?? 'P000';
        $nextNumber = (int) substr($lastUid, 1) + 1;
        $newUid = 'P' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        if (User::where('email', $request->email)->exists()) {
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


        if (Hash::check($request->old_password, $user->password)) {

            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect('/profile')->with('success', 'Password berhasil diperbarui.');
        } else {

            return redirect('/profile')->with('error', 'Password lama tidak cocok. Silakan coba lagi.');
        }
    }

    public function forgorpassword(){

    }
}
