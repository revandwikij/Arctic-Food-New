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
        $procedure = "DROP PROCEDURE IF EXISTS `store_procedure_pelanggan`;
        CREATE PROCEDURE `store_procedure_pelanggan` ()
        BEGIN
        SELECT pelanggan.username, alamat.Alamat_Lengkap, pelanggan.email, pelanggan.jenkel, pelanggan.no_Telp
        FROM pelanggan
        JOIN users
        ON user.email = pelanggan.email
        JOIN alamat
        ON pelanggan.Id_Alamat = alamat>Id_Alamat
        WHERE users.level = 'pelanggan';
        END;";

        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_procedure');
    }
};
