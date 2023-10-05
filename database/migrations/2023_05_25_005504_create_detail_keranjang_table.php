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
        Schema::create('detail_keranjang', function (Blueprint $table) {
            $table->id();
            $table->string('Id_Detail_Keranjang')->unique();
            $table->string('Id_Keranjang');
            $table->string('Id_Barang');
            $table->integer('Kuantitas');
            $table->integer('Sub_Beban');
            $table->integer('Sub_Total');
            $table->enum('Status', ['Aktif', 'Dicheckout', 'Dihapus']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_detail');
    }
};
