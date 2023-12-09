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
            $table->id();
            $table->string('Id_Pesanan')->unique();
            $table->string('Id_Pelanggan');
            $table->string('Id_Keranjang');
            $table->string('Id_Alamat');
            $table->integer('Total');
            $table->double('Total_Beban');
            $table->date('Tgl_Pesanan');
            $table->enum('Status_Pesanan', ['Menunggu Konfirmasi', 'Diproses', 'Dikirim', 'Diterima', 'Selesai', 'Dibatalkan']);
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
