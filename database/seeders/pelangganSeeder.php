<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pelanggan;

class pelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pelanggan::create([
            'Id_Alamat' => '248',
            'Username' => 'admin183',
            'Jenis_kelamin' => 'P',
            'Email' => 'admin999@gmail.com',
            'Password' => 'adminpassword2',
            'No_Telp' => '0899980769',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
    }
}
