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
            users.username,
            users.email,
            barang.Id_Barang,
            barang.Nama_Barang AS produk,
            barang.Stok,
            SUM(detail_keranjang.kuantitas) AS TotalJumlah
        FROM users
        JOIN pelanggan ON users.email = pelanggan.email
        JOIN keranjang ON pelanggan.Id_Pelanggan = keranjang.Id_Pelanggan
        JOIN detail_keranjang ON keranjang.Id_Keranjang = detail_keranjang.Id_Keranjang
        JOIN barang ON detail_keranjang.Id_Barang = barang.Id_Barang
        GROUP BY users.username, users.email, barang.Id_Barang, barang.Nama_Barang, barang.Stok;
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
