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
        Schema::table('detail_pesanan', function (Blueprint $table){
            $table->foreign('Id_Barang')->references('Id_Barang')->on('barang')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('detail_pesanan', function (Blueprint $table){
            $table->foreign('Id_Pesanan')->references('Id_Pesanan')->on('pesanan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};