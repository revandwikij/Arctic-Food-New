<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            [
                'Id_Kategori' => 'K01',
                'Kategori' => 'Olahan Daging',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'Id_Kategori' => 'K02',
                'Kategori' => 'Olahan Laut',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'Id_Kategori' => 'K03',
                'Kategori' => 'Bumbu',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ]);

        DB::table('biaya_shipping')->insert([
            [
                'Id_Biaya' => 'B01',
                'Kota' => 'Bandung',
                'Biaya_Shipping_per_Kg' => '10000',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'Id_Biaya' => 'B02',
                'Kota' => 'Jakarta',
                'Biaya_Shipping_per_Kg' => '12000',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'Id_Biaya' => 'B03',
                'Kota' => 'Medan',
                'Biaya_Shipping_per_Kg' => '15000',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],

        ]);

        DB::table('users')->insert([
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'level' => 'penjual',
            ]
        ]);
    }
}
