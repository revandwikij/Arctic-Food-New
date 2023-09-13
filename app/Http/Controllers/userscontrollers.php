<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userscontrollers extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = users::all();

        return view('users.index', ['users' => $users]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'level' => 'required',
        ]);



        $users = new users();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->level = $request->level;
        $users->save();
        return redirect('users')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = DB::table('users')->where('id',$id)->get();
        return view('users.edit',['users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatepel(Request $request)
    {
        // dd($request);   
        // $request->validate([
        //     'username' => 'required',
        //     'email' => 'required',
        //     'jenkel' => 'required',
        //     'no_Telp' => 'required',
        //     'Id_Pelanggan' => 'required',
        // ]);
        // dd();
        $a = pelanggan::where('Id_Pelanggan', $request -> Id_Pelanggan) -> first();
        $a->update([

        'username' => $request->username,
        'email' => $request->email,
        'jenkel' => $request->jenkel,
        'no_Telp' => $request->no_Telp,

        ]);
        $a = User::findorfail($request -> user);
        $a->update([

        'username' => $request->username,
        'email' => $request->email,
        // 'jenkel' => $request->jenkel,
        // 'no_Telp' => $request->no_Telp,

        ]);

        return redirect('/profile')->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $users)
    {
        $users->delete();
        return redirect('users')->with('success', 'Hapus Data Berhasil');
    }

//     public function updateaccount(Request $request)
//     {
//         $request->validate([
//         'username' => 'required|string|max:255',
//         'jenkel' => 'required|string',
//         'email' => 'required|string|email|max:255',
//         'no_Telp' => 'required|string|max:15',

//         ]);

//         $Id_Pelanggan = Auth::Id_Pelanggan$Id_Pelanggan();

//         $Id_Pelanggan->username = $request->input('username');
//         $Id_Pelanggan->jenkel = $request->input('jenkel');
//         $Id_Pelanggan->email = $request->input('email');
//         $Id_Pelanggan->no_Telp = $request->input('no_Telp');
//         $Id_Pelanggan->save(),

//         return redirect('/profile')->with('success', 'Informasi akun berhasil diperbarui.');
//     }
}

