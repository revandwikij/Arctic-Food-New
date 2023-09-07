<?php

namespace App\Http\Controllers;

use App\Models\Biaya_Ship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // dd($request);
        $request->validate([
            'Kota' => 'required',
            'Biaya_Shipping_per_Kg' => 'required',
           ]);

           $lastUid = Biaya_Ship::orderBy('id', 'desc')->first()->Id_Biaya ?? 'H000';
           $nextNumber = (int) substr($lastUid, 1) + 1;
           $newUid = 'H' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

           $Shipping = new Biaya_Ship();
           $Shipping->Id_Biaya = $newUid;
           $Shipping->Kota = $request->Kota;
           $Shipping->Biaya_Shipping_per_Kg = $request->Biaya_Shipping_per_Kg;
           $Shipping->save();

           return redirect( '/dataship');
          
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
    public function edit($Id_Bayar)
    {
	    $Biaya_Shipping_per_Kg = DB::table('biaya_shipping')->where('Id_Biaya',$Id_Bayar)->get();
	    return view('penjual.editship',['biaya_shipping' => $Biaya_Shipping_per_Kg]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'Id_Biaya' => 'required',
            'Kota' => 'required',
            'Biaya_Shipping_per_Kg' => 'required',
        ]);

            DB::table('biaya_shipping')->where('Id_Biaya',$request->Id_Biaya)->update([
                'Id_Biaya' => $request->Id_Biaya,
                'Kota' => $request->Kota,
                'Biaya_Shipping_per_Kg' => $request->Biaya_Shipping_per_Kg
           ]);

           return redirect('/dataship')->with('error', 'Gagal pastikan cek apakah sudah benar');
           
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Id_Biaya)
    {
        DB::table('biaya_shipping')->where('Id_Biaya',$Id_Biaya)->delete();

        return redirect('/dataship');
    }
}
