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
        Schema::table('chat', function (Blueprint $table){
            $table->foreign('NIB')->references('NIB')->on('penjual')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('chat', function (Blueprint $table){
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
