<?php

namespace App\Http\Controllers;

use App\Models\Biaya_Ship;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Kota' => 'required',
            'Biaya_Shipping_per_G' => 'required',
           ]);

           $lastUid = Biaya_Ship::orderBy('id', 'desc')->first()->Id_Biaya ?? 'BS000';
           $nextNumber = (int) substr($lastUid, 1) + 1;
           $newUid = 'BS' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

           $Shipping = new Biaya_Ship();
           $Shipping->Id_Biaya = $newUid;
           $Shipping->Kota = $request->Kota;
           $Shipping->Biaya_Shipping_per_G = $request->Biaya_Shipping_per_G;
           $Shipping->save();

           return view( 'dataship');
          
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
