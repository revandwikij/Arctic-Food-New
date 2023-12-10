<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Models\Barang;
use App\Models\DetailKeranjang;
use App\Models\OmsetView;
use App\Models\pelanggan;
use App\Models\PenjualanView;
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
    public function generatePDF($tanggalAwal, $tanggalAkhir)
    {
        
        $penjualan = PenjualanView::whereBetween('tanggal_awal', [$tanggalAwal, $tanggalAkhir])->get();


        $nama = auth()->user()->username;
        // dd($nama);

        $data = [
            'nama' => $nama,
            'penjualan' => $penjualan,
            'tanggalAwal' => $tanggalAwal,
            'tanggalAkhir' => $tanggalAkhir,
        ];

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('Penjual.laporan', $data);

        return $pdf->download('Penjual.laporan.pdf');
    }

    public function streamPDF(Request $request)
    {
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');
        $penjualan = PenjualanView::whereBetween('tanggal_awal', [$tanggalAwal, $tanggalAkhir])->get();

        $nama = auth()->user()->username;

        $data = [
            'nama' => $nama,
            'penjualan' => $penjualan,
            'tanggalAwal' => $tanggalAwal,
            'tanggalAkhir' => $tanggalAkhir,
        ];

        if($request->action == 'lihat')
        {

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('Penjual.laporan', $data);

        return $pdf->stream('Penjual.laporan');
        }

        if($request->action == 'download')
        {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('Penjual.laporan', $data);

        return $pdf->download('Penjual.laporan.pdf');
        }
    }

    public function generatePDF2($bulanawal, $bulanakhir)
    {
        $penjualan = OmsetView::whereBetween('bulan', [$bulanawal, $bulanakhir])->get();

        $nama = auth()->user()->username;

        $data = [

            'nama' => $nama,
            'penjualan' => $penjualan,
            'bulanawal' => $bulanawal,
            'bulanakhir' => $bulanakhir,
        ];

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('Penjual.laporan2', $data);

        return $pdf->download('Penjual.laporan2.pdf');
    }

    public function streamPDF2(Request $request)
    {
        $bulanawal = $request->input('bulan_awal');
        $bulanakhir = $request->input('bulan_akhir');
         
        $penjualan = OmsetView::whereBetween('bulan', [$bulanawal, $bulanakhir])->get();

        $nama = auth()->user()->username;

        $data = [
            'nama'  => $nama,
            'penjualan' => $penjualan,
            'bulanawal' => $bulanawal,
            'bulanakhir' => $bulanakhir,
        ];

        if($request->action == 'lihat')
        {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('Penjual.laporan2', $data)->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream('Penjual.laporan2.pdf');
        }

        if($request->action == 'download')
        {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('Penjual.laporan2', $data)->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('Penjual.laporan2.pdf');
        }


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
