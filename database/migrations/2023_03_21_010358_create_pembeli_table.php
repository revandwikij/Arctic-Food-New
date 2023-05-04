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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id('Id_Pelanggan');
            $table->integer('Id_Alamat');
            $table->string('Username');
            $table->enum('Jenis_kelamin', ['L','P']);
            $table->string('Email');
            $table->string('Password');
            $table->string('No_Telp');
            $table->timestamps();

            $table->foreign('Id_Alamat')->references('alamat')->on('Id_Alamat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembeli');
    }
};