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
        CREATE TRIGGER kurangi_stok_barang AFTER INSERT ON detail_keranjang
        FOR EACH ROW
        BEGIN
        DECLARE Kuantitas INT;
        SET Kuantitas = NEW.Kuantitas; 

        UPDATE barang
        SET Stok = Stok - Kuantitas
        WHERE Id_Barang = NEW.Id_Barang; 
        END;
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
