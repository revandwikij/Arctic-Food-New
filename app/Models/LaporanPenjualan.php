<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPenjualan extends Model
{
    use HasFactory;
    protected $table = 'laporanpenjualan';
     

    protected $fillable = [
        'Id_LapPenjualan',
        'Id_Pesanan',
        'Id_Pembayaran',
    ];

    public $timestamps = true;
}
