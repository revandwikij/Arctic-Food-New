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
        barang.Id_Barang,
        barang.Nama_Barang AS produk,
        barang.Stok,
        barang.Harga,
        DATE_FORMAT(MIN(pesanan.created_at), '%Y-%m-%d') AS tanggal_awal,
        DATE_FORMAT(MAX(pesanan.created_at), '%Y-%m-%d') AS tanggal_akhir,
        SUM(detail_keranjang.Kuantitas) AS total_terjual
    FROM barang
    LEFT JOIN detail_keranjang ON barang.Id_Barang = detail_keranjang.Id_Barang
    LEFT JOIN keranjang ON detail_keranjang.Id_Keranjang = keranjang.Id_Keranjang
    LEFT JOIN pesanan ON keranjang.Id_Keranjang = pesanan.Id_Keranjang
    WHERE pesanan.Status_Pesanan = 'Selesai'
    GROUP BY barang.Id_Barang, barang.Nama_Barang, barang.Stok, barang.Harga;";

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
