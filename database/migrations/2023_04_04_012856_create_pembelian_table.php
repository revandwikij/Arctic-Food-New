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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->string('Id_Pembelian');
            $table->integer('Id_Barang');
            $table->integer('Id_Pelanggan');
            $table->integer('Jumlah_Barang');
            $table->integer('Kuantitas');
            $table->integer('Total_Harga');
            $table->date('Tgl_Pembelian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};