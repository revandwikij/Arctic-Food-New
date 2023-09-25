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
        DB::unprepared('
            CREATE VIEW v_laporan_penjualan AS
            SELECT
                b.Id_Barang,
                
                p.Tanggal_Pesanan,
                b.Nama_Produk,
                d.Jumlah,
                d.Harga
            FROM pesanan p
            JOIN detail_pesanan d ON p.Id_Pesanan = d.Id_Pesanan;
    ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
