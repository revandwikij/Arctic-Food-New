<?php

namespace App\Console\Commands;

use App\Models\Barang;
use App\Models\DetailKeranjang;
use App\Models\Pembayaran;
use Illuminate\Console\Command;

class ReturnStock extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:return-stock {buatkoman}';

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

        $buatkoman = $this->argument('buatkoman');
        // $ambil = DetailKeranjang::join('keranjang', 'detail_keranjang.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
        // ->join('pesanan', 'pesanan.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
        // ->where('pesanan.Id_Pesanan', '=', $pesan->Id_Pesanan)
        // ->get();

        $this->info("Pesan yang diterima: $buatkoman");     
    }
}
