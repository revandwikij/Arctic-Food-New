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
        $laporan = "DROP VIEW IF EXISTS `v_laporan_per_akun`;
        CREATE VIEW v_laporan_per_akun AS
        SELECT
            pelanggan.username,
            pelanggan.email,
            SUM(pembayaran.Total_Harga) AS total_pembelian,
            COUNT(pesanan.Id_Pelanggan) AS jumlah_checkout
        FROM pelanggan
        JOIN users ON pelanggan.email = users.email
        JOIN pesanan ON pelanggan.Id_Pelanggan = pesanan.Id_Pelanggan
        JOIN shipping ON pesanan.Id_Pesanan = shipping.Id_Pesanan
        JOIN pembayaran ON shipping.Id_Shipping = pembayaran.Id_Shipping
        WHERE pesanan.Status_Pesanan = 'Selesai'
        AND pembayaran.Status_Pembayaran = 'Lunas'
        GROUP BY pelanggan.Id_Pelanggan, pelanggan.username, pelanggan.email;

        ";

    DB::unprepared($laporan);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
