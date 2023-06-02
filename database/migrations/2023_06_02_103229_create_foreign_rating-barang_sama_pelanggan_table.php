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
        Schema::table('rating', function (Blueprint $table){
            $table->foreign('Id_Barang')->references('Id_Barang')->on('barang')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('rating', function (Blueprint $table){
            $table->foreign('Id_Pelanggan')->references('Id_Pelanggan')->on('pelanggan')->onDelete('cascade')->onUpdate('cascade');
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
