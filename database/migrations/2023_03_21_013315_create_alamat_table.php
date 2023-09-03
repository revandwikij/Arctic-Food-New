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
        Schema::create('alamat', function (Blueprint $table) {
            $table->id();
            $table->string('Id_Alamat')->unique();
            $table->string('Id_Pelanggan');
            $table->string('Label');
            $table->string('Nama_Penerima');
            $table->string('No_Hp');
            $table->string('Alamat_Lengkap');
            $table->string('Kota');
            $table->string('Kode_Pos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat');
    }
};