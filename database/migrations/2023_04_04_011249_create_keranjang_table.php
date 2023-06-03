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
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id('Id_Keranjang');
            $table->unsignedBigInteger('Id_Pelanggan');
            $table->unsignedBigInteger('Id_Barang');
            $table->integer('Kuantitas');  //value nya jadi 5
            $table->integer('Sub_Total');
            $table->integer('Total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    }
};
