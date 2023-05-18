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
        DB::unprepared('
        CREATE TRIGGER Regis_To_Login AFTER INSERT ON `pelanggan` FOR EACH ROW
            BEGIN
                INSERT INTO users
                set username = new.username,
                email = new.email,
                password = new.password;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER `Regis_To_Login`');
    }
};