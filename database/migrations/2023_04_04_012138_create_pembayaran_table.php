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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('Id_Pembayaran');
            $table->integer('Id_Pelanggan');
            $table->string('Id_Pembelian');
            $table->date('Tgl_Pembayaran');
            $table->integer('Total_Harga');
            $table->enum('Metode_Pembayaran', ['Transfer Bank','COD']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};