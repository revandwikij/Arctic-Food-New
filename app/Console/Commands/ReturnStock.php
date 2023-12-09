<?php

namespace App\Console\Commands;

use App\Models\Barang;
use App\Models\DetailKeranjang;
use App\Models\Pembayaran;
use App\Models\Pesan;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class ReturnStock extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:return-stock';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
         
         
        Pembayaran::join('shipping', 'shipping.Id_Shipping', '=', 'pembayaran.Id_Shipping')
        ->join('pesanan', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
        ->where('pembayaran.Status_Pembayaran', '=', 'Kadaluarsa')
        ->update(['pesanan.Status_Pesanan' => 'Dibatalkan']);
        
        $data = Pesan::where('Status_Pesanan', '=', 'Dibatalkan')->get();
             
        foreach ($data as $detail) 
        {
            $ambil = DetailKeranjang::join('keranjang', 'detail_keranjang.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
            ->join('pesanan', 'pesanan.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
            ->join('pelanggan', 'keranjang.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
            ->where('pesanan.Id_Pesanan', '=', $detail->Id_Pesanan)
            ->get();


             foreach($ambil as $dat)
             {
                $barang = Barang::where('Id_Barang', $dat->Id_Barang)->first();
                $barang->Stok += $dat->Kuantitas;
                $barang->save();
             }
        }   
    }
}
