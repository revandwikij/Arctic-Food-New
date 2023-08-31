<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';

    protected $fillable = [
        'Id_Keranjang',
        'Id_Pelanggan',
    ];
}
