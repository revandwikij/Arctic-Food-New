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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('Id_Pesanan');
            $table->integer('Id_Pelanggan');
            $table->integer('Total_Harga');
            $table->date('Tgl_Pembayaran');
            $table->enum('Metode_Pembayaran', ['Transfer Bank','COD']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
