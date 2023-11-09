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

        $filter = "DROP PROCEDURE IF EXISTS `FilterKategori`;

        CREATE PROCEDURE FilterKategori(IN kategori VARCHAR(255))
        BEGIN
            SELECT * FROM barang
            JOIN kategori ON barang.Id_Kategori = kategori.Id_Kategori
            WHERE kategori.Kategori = kategori;
        END;";

        DB::unprepared($filter);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
