<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';

    protected $fillable = [
        'Id_Pesanan',
        'Id_Keranjang',
        'Id_Pelanggan',
        'Id_Alamat',
        'Total',
        'Total_Beban',
        'Tgl_Pesanan',
        'Status_Pesanan',
    ];
}

