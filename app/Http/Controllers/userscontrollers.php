<?php

namespace App\Http\Controllers;


use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userscontrollers extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('users.index')->with([
            'users' => users::all(),
        ]);
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('users.edit')->with([
            'users' => users::find($id),
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, users $users)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'level' => 'required',
        ]);

        $users->name = $request->name;
        $users->email = $request->email;
        if ($request->password)
            $users->password = Hash::make($request->password);
        $users->level = $request->level;
        $users->save();
        return redirect('users')->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $users)
    {
        $users->delete();
        return redirect('users')->with('success', 'Hapus Data Berhasil');
    }
}
