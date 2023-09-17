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
        Schema::create('barang', function (Blueprint $table) {
            $table->id( );
            $table->string('Id_Barang')->unique();
            $table->string('Id_Kategori');
            $table->string('Nama_Barang');
            $table->string('Foto_Barang');
            $table->integer('Berat');
            $table->string('Brand');
            $table->integer('Harga');
            $table->integer('Stok');
            $table->string('Keterangan_Barang');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');

  }
};
