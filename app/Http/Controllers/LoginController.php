<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //validasi login
    public function validasi(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return "Email atau Password anda salah";
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
        $data['title'] = 'Register';
        // return view('user/register', $data);

        $request->validate([
            'email' => 'required',
            'username' => 'required|unique:tb_user',
            'jenkel'=>'required',
            'no_telp'=>'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'email' => $request->email,
            'username' => $request->username,
            'jenkel' => $request->jenkel,
            'no_telp' => $request->no_telp,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('/')->with('success', 'Registration success. Please login!');
    }
}