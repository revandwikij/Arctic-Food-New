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
            $table->id();
            $table->string('Id_Pembayaran')->unique();
            $table->string('Id_Shipping');
            $table->string('Metode_Pembayaran')->nullable();
            $table->integer('Total_Harga');
            $table->enum('Status_Pembayaran', ['Lunas', 'Belum Lunas', 'Kadaluarsa', ''])->nullable();
            $table->date('Tgl_Pembayaran');
            $table->dateTime('Waktu_Kadaluarsa');
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
