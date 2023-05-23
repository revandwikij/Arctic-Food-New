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
            // $table->integer('Id_Alamat');  x
            $table->string('username');
            $table->string('email');
            $table->enum('jenkel', ['L','P']);
            $table->string('no_Telp');
            $table->string('password');
            $table->timestamps();

            // $table->foreign('Id_Alamat')->references('alamat')->on('Id_Alamat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};