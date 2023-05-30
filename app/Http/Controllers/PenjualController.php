<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use App\Models\users;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Seller.index')->with(['penjual' => Penjual::all(), ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Seller.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required',

        ]);

        $Penjual = new users;
        $Penjual->username = $request->username;
        $Penjual->email = $request->email;
        $Penjual->password = password_hash($request->password,  PASSWORD_DEFAULT);
        $Penjual->level = $request->level;
        
        $Penjual->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
