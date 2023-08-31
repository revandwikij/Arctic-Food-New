<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
     
    protected $fillable = [
        'Id_Keranjang',
        'Id_Pelanggan',
        'Id_Alamat',
        'Total',
        'Tgl_Pesanan',
        'Status_Pesanan',
    ];
}

