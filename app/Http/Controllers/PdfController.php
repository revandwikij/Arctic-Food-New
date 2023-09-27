<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $penjualan = DB::table('v_laporan_barang')->get();

        $data = [
            'penjualan' => $penjualan, 
        ];
    
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('penjual.laporan', $data); 
    
        return $pdf->download('penjual.laporan.pdf');
    }
    public function streamPDF()
    {
        $penjualan = DB::table('v_laporan_barang')->get();

        $data = [
            'penjualan' => $penjualan, 
        ];
    
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('penjual.laporan', $data); 
    
        return $pdf->stream('penjual.laporan');
    }

}
