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
        DB::unprepared('
        CREATE TRIGGER update_stok_barang AFTER INSERT ON `keranjang` FOR EACH ROW
            BEGIN
                UPDATE barang
                SET Stok = Stok - NEW.Jumlah
                WHERE Id_Barang = NEW.Id_Barang;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trigger_barang');
    }
};
