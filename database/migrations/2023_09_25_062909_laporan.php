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

    $laporan = "DROP VIEW IF EXISTS `v_laporan_barang`;
        CREATE VIEW v_laporan_barang AS
    SELECT
        barang.Nama_Barang AS produk,
        barang.Id_Barang,
        barang.Stok,
        barang.Harga,
        MIN(DATE_FORMAT(pesanan.created_at, '%Y-%m-%d')) AS tanggal_awal,
        MAX(DATE_FORMAT(pesanan.created_at, '%Y-%m-%d')) AS tanggal_akhir,
        SUM(detail_keranjang.Kuantitas) AS total_terjual
    FROM barang
    JOIN detail_keranjang  ON barang.Id_Barang = detail_keranjang.Id_Barang
    JOIN keranjang  ON keranjang.Id_Keranjang = detail_keranjang.Id_Keranjang
    JOIN pesanan ON keranjang.Id_Keranjang = pesanan.Id_Keranjang
    WHERE pesanan.Status_Pesanan = 'Selesai' AND keranjang.Status = 'Dicheckout'
    GROUP BY produk, barang.Id_Barang, barang.Nama_Barang, barang.Stok, barang.Harga;";

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
