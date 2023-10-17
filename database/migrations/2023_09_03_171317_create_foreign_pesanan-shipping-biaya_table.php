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
        Schema::table('shipping', function (Blueprint $table){
            $table->foreign('Id_Pesanan')->references('Id_Pesanan')->on('pesanan')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('shipping', function (Blueprint $table){
            $table->foreign('Id_Biaya')->references('Id_Biaya')->on('biaya_shipping')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('pesanan', function (Blueprint $table){
            $table->foreign('Id_Keranjang')->references('Id_Keranjang')->on('keranjang')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('pesanan', function (Blueprint $table){
            $table->foreign('Id_Alamat')->references('Id_Alamat')->on('alamat')->onDelete('cascade')->onUpdate('cascade');
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
