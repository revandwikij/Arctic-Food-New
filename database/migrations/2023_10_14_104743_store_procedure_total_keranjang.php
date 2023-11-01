<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        $procedure = "DROP PROCEDURE IF EXISTS `Total_Keranjang`;
        CREATE PROCEDURE `Total_Keranjang` (IN userId INT)
        BEGIN
            SELECT
                barang.*,
                detail_keranjang.*,
                pelanggan.*
            FROM
                DetailKeranjang
            INNER JOIN barang ON barang.Id_Barang = detail_keranjang.Id_Barang
            INNER JOIN keranjang ON keranjang.Id_Keranjang = detail_keranjang.Id_Keranjang
            INNER JOIN pelanggan ON pelanggan.Id_Pelanggan = keranjang.Id_Pelanggan
            INNER JOIN users ON pelanggan.email = users.email
            WHERE
                users.id = userId
                AND keranjang.Status = 'Aktif'
            ORDER BY
                keranjang.created_at DESC;
        END;";

        DB::unprepared($procedure);

        // DB::unprepared('
        //     CREATE PROCEDURE Total_Keranjang(IN Id_Keranjang INT)
        //     BEGIN
        //         SELECT SUM(Total) as total_price
        //         FROM detail_keranjang
        //         WHERE Id_Keranjang = Id_Keranjang;
        //     END
        // ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
