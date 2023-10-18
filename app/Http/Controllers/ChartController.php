<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use App\Models\Pembayaran;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;

class ChartController extends Controller
{
    public function ChartPenjualan(){
       $totalharga = Pembayaran::select(DB::raw("CAST(SUM(Total_Harga)as int) as Total_Harga")) 
       ->GroupBy(DB::raw("Month(created_at"))
       ->pluck('Total_Harga');

       $bulan = Pembayaran::select(DB::raw("MONTHNAME(created_at) as bulan"))
       ->GroupBy(DB::raw("MONTHNAME(created_at"))
       ->pluck('bulan');

       return view('Penjual.home', compact('Total_Harga', 'bulan'));
    }
}
