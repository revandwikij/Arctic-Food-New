<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Models\Barang;
use App\Models\DetailKeranjang;
use App\Models\pelanggan;
use App\Models\Pesan;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $penjualan = DB::table('v_laporan_barang')->get();

        $data = [
            'penjualan' => $penjualan,
        ];

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('Penjual.laporan', $data);

        return $pdf->download('Penjual.laporan.pdf');
    }

    public function streamPDF()
    {
        $penjualan = DB::table('v_laporan_barang')->get();
        $barang = DB::table('v_laporan_barang')
            ->select('produk', 'total_terjual', DB::raw('SUM(total_terjual) as total_kuantitas'))
            ->groupBy('produk', 'total_terjual')
            ->get();

        $data = [
            'penjualan' => $penjualan,
            'barang' => $barang,
        ];

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('Penjual.laporan', $data, );

        return $pdf->stream('Penjual.laporan');
    }

    public function generatePDF2()
    {
        $penjualan = DB::table('v_laporan_omset')->get();

        $data = [
            'penjualan' => $penjualan,
        ];

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('Penjual.lapset', $data);

        return $pdf->download('Penjual.lapset.pdf');
    }

    public function streamPDF2()
    {
        $penjualan = DB::table('v_laporan_omset')->get();

        $data = [
            'penjualan' => $penjualan,
        ];
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('Penjual.lapset', $data);

        return $pdf->stream('Penjual.lapset.pdf');
    }

    public function invoice($Id_Pesanan)
    {
        $pesanan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
        ->join('alamat', 'pesanan.Id_Alamat', '=', 'alamat.Id_Alamat')
        ->join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
        ->join('pembayaran', 'shipping.Id_Shipping', '=', 'pembayaran.Id_Shipping')
        ->where('pesanan.Id_Pesanan', '=', $Id_Pesanan)->get();

        $databar = Barang::join('detail_keranjang', 'barang.Id_Barang', '=', 'detail_keranjang.Id_Barang')
        ->join('keranjang', 'keranjang.Id_Keranjang', '=', 'detail_keranjang.Id_Keranjang')
        ->join('pesanan', 'keranjang.Id_Keranjang', '=', 'pesanan.Id_Keranjang')
        ->where('pesanan.Id_Pesanan', '=', $Id_Pesanan)->get();




       $data = [
            'pesanan' => $pesanan,
            'databar' => $databar,
        ];

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('Penjual.invoice', $data);

        return $pdf->stream('Penjual.invoice');
    }

    public function kirim($Id_Pesanan)
    {

        try{
        $pesanan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
        ->join('alamat', 'pesanan.Id_Alamat', '=', 'alamat.Id_Alamat')
        ->join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
        ->join('pembayaran', 'shipping.Id_Shipping', '=', 'pembayaran.Id_Shipping')
        ->where('pesanan.Id_Pesanan', '=', $Id_Pesanan)->get();

        $databar = Barang::join('detail_keranjang', 'barang.Id_Barang', '=', 'detail_keranjang.Id_Barang')
        ->join('keranjang', 'keranjang.Id_Keranjang', '=', 'detail_keranjang.Id_keranjang')
        ->join('pesanan', 'keranjang.Id_Keranjang', '=', 'pesanan.Id_Keranjang')
        ->where('pesanan.Id_Pesanan', '=', $Id_Pesanan)->get();

        $email = pelanggan::join('users', 'users.email', '=', 'pelanggan.email')
        ->join('pesanan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_pelanggan')
        ->where('pesanan.Id_Pesanan', '=', $Id_Pesanan)->select('users.email')->get();

        Mail::to($email)->send(new InvoiceMail($pesanan, $databar));
        return redirect('/perludikirim')->with('message', 'Berhasil');
        }
        catch(\Exception $e )
        {
        return "Gagal";
        }

    }

}
