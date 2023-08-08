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
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2a$12$aDrFBVu3l/0qNpFqoyTXp.cOLtU.ft/P7UJNx18aB8Qnf60BESfYi', //admin
            'level' => 'admin',
        ]);

        FacadesDB::table('users')->insert([
            'username' => 'user',
            'email' => 'user2@gmail.com',
            'password' => '$2a$12$w.7gzX6EZ4R5zwVPZgFGv.sIRXPVYpd8tm.4f.bNuzJF7faeHL7JK', //user2p
            'level' => 'user',
        ]);
    }
}
