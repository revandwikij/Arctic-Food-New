<?php

namespace App\Http\Controllers;

use App\Models\ModelUser;
use App\Models\User;
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
        // $data['title'] = 'Register';
        // return view('user/register', $data);

        // $this->validate($request,[
        //     'email' => 'required',
        //     'username' => 'required',
        //     'jenkel'=>'required',
        //     'No_telp'=>'required',
        //     'password' => 'required',
        //     'password_confirm' => 'required|same:password',
        // ]);

        // $user = new User([
        //     'email' => $request->email,
        //     'username' => $request->username,
        //     'jenkel' => $request->jenkel,
        //     'No_telp' => $request->No_telp,
        //     'password' => Hash::make($request->password),
        // ]);
        // $user->save();

        // return redirect()->route('/')->with('success', 'Registration success. Please login!');

        $user = new ModelUser();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->jenkel = $request->jenkel;
        $user->no_telp = $request->No_telp;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/')->with('alert-success','Kamu berhasil Register');
    }
}
