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
        Schema::create('penjual', function (Blueprint $table) {
            $table->integer('NIB')->primary();//length nya jadi 13
            $table->string('Nama_Toko');
            $table->string('Email');
            $table->string('No_Telp');
            $table->string('Kategori_Usaha');
            $table->string('Alamat_Toko');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjual');
    }
};