<?php

namespace App\Http\Controllers;

use App\Models\ModelUser;
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
    public function register(Request $request, $id)
    {
        // $data['title'] = 'Register';
        // return view('user/register', $data);

        // $request->validate([
        //     'email' => 'required',
        //     'username' => 'required|unique:tb_user',
        //     'jenkel'=>'required',
        //     'no_telp'=>'required',
        //     'password' => 'required',
        //     'password_confirm' => 'required|same:password',
        // ]);

        // $user = new ModelUser();
        // $user->username = $request->username;
        // $user->email = $request->email;
        // $user->jenkel = $request->jenkel;
        // $user->no_telp = $request->No_telp;
        // $user->password = bcrypt($request->password);
        // $user->save();
        // return redirect('/')->with('alert-success','Kamu berhasil Register');

        users::create([
            'id' => $request->id,
            'username' => $request->username,
            'password' => $request->password,
            // 'username' => $request->username,
            // 'username' => $request->username,
        ]);
    }
}
