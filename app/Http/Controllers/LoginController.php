<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use App\Models\ModelUser;
use App\Models\pelanggan;
use App\Models\Penjual;
use App\Models\User;
use App\Models\users;
use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

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
            'username' =>['required', 'regex:/^[A-Za-z\s]+$/'],
            'password' =>['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?!.*\s).{8,}$/'],
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
    public function showForgotPasswordForm()
    {
        return view('forgotpassword');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        # $user = User::where('email', $request->email, '&&', 'level', '=', '"pelanggan"')->first();
        $user = User::where('email', $request->email)->where('level', '=', 'pelanggan')->first();  // [[1](https://stackoverflow.com/questions/60872673/check-the-manual-that-corresponds-to-your-mariadb-server-version-for-the-right-s)]

        # $admin = DB::table('users')->where('email', $request->email, '&&', 'level', '=', '"penjual"')->first();
        $admin = DB::table('users')->where('email', $request->email)->where('level', '=', 'penjual')->first();  // [[1](https://stackoverflow.com/questions/60872673/check-the-manual-that-corresponds-to-your-mariadb-server-version-for-the-right-s)]


        if ($user || $admin) {
            $resetStatus = null;

            if ($user) {
                $resetStatus = Password::sendResetLink($request->only('email'));
            } elseif ($admin) {
                $resetStatus = Password::broker('admins')->sendResetLink($request->only('email'));
            }

            if ($resetStatus === Password::RESET_LINK_SENT) {
                return back()->with(['status' => __('Password reset link has been sent.')]);
            }
        }

        return back()->withErrors(['email' => __('Email address not found.')]);
    }

    public function showResetPasswordForm(string $token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $email = $request->input('email');
        $user = User::where('email', $email)->first();
        $admin = Admin::where('email', $email)->first();

        if ($user || $admin) {
            if ($user) {
                // Reset password for the 'users' table
                $status = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, $password) {
                    $user
                        ->forceFill([
                            'password' => Hash::make($password),
                        ])
                        ->setRememberToken(Str::random(60));

                    $user->save();
                    event(new PasswordReset($user));
                });
            } else {
                // Reset password for the 'admins' table
                $status = Password::broker('admins')->reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($admin, $password) {
                    $admin
                        ->forceFill([
                            'password' => Hash::make($password),
                        ])
                        ->setRememberToken(Str::random(60));

                    $admin->save();
                    // Trigger PasswordReset event for admins if needed.
                });
            }
        } else {
            return back()->withErrors(['email' => __('We can\'t find a user with that email address.')]);
        }

        return $status === Password::PASSWORD_RESET ? redirect('/loginawal')->with('status', __($status)) : back()->withErrors(['email' => [__($status)]]);
    }
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function registeradmin(Request $request)
    {
        // $request->validate([
        //     'username' => 'required',
        //     'password' => 'required',
        //     'email' => 'required|email',
        //     'no_Telp' => 'required|numeric',
        //     'alamat' => 'required',
        // ]);

         

        $lastUid = Penjual::orderBy('id', 'desc')->first()->Id_Pelanggan ?? 'A000';
        $nextNumber = (int) substr($lastUid, 1) + 1;
        $newUid = 'A' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        if (Penjual::where('Email', $request->email)->exists()) {
            return back()->with('alert', 'Email sudah digunakan');
        }

        $Penjual = new Penjual;
        $Penjual->Id_Penjual = $newUid;
        $Penjual->Username = $request->username;
        $Penjual->Email = $request->email;
        $Penjual->Password = password_hash($request->password,  PASSWORD_DEFAULT);
        $Penjual->No_Telp = $request->no_Telp;
        $Penjual->Alamat = $request->alamat;
        $Penjual->save();
        // dd($Penjual);

        return redirect('/login');
    }
}
