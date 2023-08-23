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
            $table->unsignedBigInteger('Id_Pelanggan');
            $table->unsignedBigInteger('Id_Keranjang');
            $table->unsignedBigInteger('Id_Alamat')->nullable();
            $table->integer('Total');
            $table->date('Tgl_Pesanan');
            $table->enum('Status_Pesanan', ['Menunggu Konfirmasi', 'Diproses', 'Dikirim', 'Selesai', 'Dibatalkan']);
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
