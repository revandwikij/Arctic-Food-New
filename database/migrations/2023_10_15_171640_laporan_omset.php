<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
        CREATE VIEW v_laporan_omset AS
        SELECT
            DATE_FORMAT(created_at, '%Y-%m') AS bulan,
            SUM(Total_Harga) AS Total_Harga
        FROM pembayaran
        WHERE Status_Pembayaran = 'Lunas'
        GROUP BY bulan;

");
    // JOIN detail_keranjang  ON barang.Id_Barang = detail_keranjang.Id_Barang
    // JOIN keranjang  ON keranjang.Id_Keranjang = detail_keranjang.Id_Keranjang
    // JOIN pesanan ON keranjang.Id_Keranjang = pesanan.Id_Keranjang
    // JOIN shipping ON pesanan.Id_Pesanan = shipping.Id_Pesanan
    // JOIN pembayaran ON shipping.Id_Shipping = pembayaran.Id_Shipping
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
