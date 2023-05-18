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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id('Id_Laporan');
            $table->integer('Id_Barang');
            $table->integer('Harga_Beli');
            $table->integer('Harga_Jual');
            $table->integer('Kuantitas');
            $table->integer('Laba_Kotor');
            $table->integer('Laba_Bersih');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
