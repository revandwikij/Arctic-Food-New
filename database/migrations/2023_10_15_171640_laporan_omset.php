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
    $laporan = "DROP VIEW IF EXISTS `v_laporan_omset`;

        CREATE VIEW v_laporan_omset AS
        SELECT
            DATE_FORMAT(created_at, '%Y-%m') AS bulan,
            SUM(Total_Harga) AS Total_Harga
        FROM pembayaran
        WHERE Status_Pembayaran = 'Lunas'
        GROUP BY bulan;";

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
