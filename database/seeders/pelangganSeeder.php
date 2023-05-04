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
            'Id_Alamat' => '2432',
            'Username' => 'admin123',
            'Jenis_Kelamin' => 'L',
            'Email' => 'admin22@gmail.com',
            'Password' => 'adminpassword1',
            'No_Telp' => '0899890769',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
    }
}
