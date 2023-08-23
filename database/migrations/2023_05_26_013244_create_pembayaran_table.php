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
            $table->unsignedBigInteger('Id_Shipping');
            $table->enum('Metode_Pembayaran', ['COD', 'GoPay']);
            $table->integer('Total_Harga');
            $table->enum('Status_Pembayaran', ['Lunas', 'Belum Lunas'])->nullable();
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
