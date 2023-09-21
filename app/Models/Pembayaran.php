<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';

    protected $fillable = [
        'Id_Pembayaran', // tambahkan kolom lainnya sesuai kebutuhan
        'Id_Shipping',
        'Total_Harga',
        'Status_Pembayaran',
        'Tgl_Pembayaran',
    ];
}
