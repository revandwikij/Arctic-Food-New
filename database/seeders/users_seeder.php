<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DB;
use app\Models\users;
use Illuminate\Support\Facades\DB as FacadesDB;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacadesDB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'level' => 'admin',
        ]);

        FacadesDB::table('users')->insert([
            'name' => 'user',
            'email' => 'user2',
            'password' => 'user2p',
            'level' => 'user',
        ]);
    }
}
