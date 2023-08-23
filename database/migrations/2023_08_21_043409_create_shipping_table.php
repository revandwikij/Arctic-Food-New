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
        Schema::create('shipping', function (Blueprint $table) {
            $table->id('Id_Shipping');
            $table->unsignedBigInteger('Id_Pesanan');
            $table->unsignedBigInteger('Id_Biaya')->nullable();
            $table->integer('Total_Shipping');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping');
    }
};
