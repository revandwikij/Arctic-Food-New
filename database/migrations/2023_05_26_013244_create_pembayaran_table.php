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
            $table->unsignedBigInteger('Id_Pesanan');
            $table->unsignedBigInteger('Id_Pelanggan');
            $table->enum('Metode_Pembayaran', ['COD', 'GoPay']);
            $table->integer('Total_Harga');
            $table->date('Tgl_Pembayaran');
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
