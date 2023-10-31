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
        Schema::table('alamat', function (Blueprint $table){
            $table->foreign('Id_Pelanggan')->references('Id_Pelanggan')->on('pelanggan')->onDelete('cascade')->onUpdate('cascade');
        });
        // Schema::table('notif', function (Blueprint $table){
        //     $table->foreign('Id_Pelanggan')->references('Id_Pelanggan')->on('pelanggan')->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
