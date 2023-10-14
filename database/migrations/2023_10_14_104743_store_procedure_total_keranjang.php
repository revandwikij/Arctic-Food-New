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
        CREATE PROCEDURE `Total_Keranjang` (IN Id_Keranjang INT)
        BEGIN
        SELECT pelanggan.username, alamat.Alamat, pelanggan.email, pelanggan.jenkel, pelanggan.no_Telp
        FROM pelanggan
        JOIN alamat
        ON pelanggan.Id_Pelanggan = alamat.Id_Pelanggan;
        END;";

        \DB::unprepared($procedure);

        DB::unprepared('
            CREATE PROCEDURE Total_Keranjang(IN Id_Keranjang INT)
            BEGIN
                SELECT SUM(Total) as total_price
                FROM detail_keranjang
                WHERE Id_Keranjang = Id_Keranjang;
            END
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
