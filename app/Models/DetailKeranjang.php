<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKeranjang extends Model
{
    use HasFactory;
    protected $table = 'detail_keranjang';

    protected $fillable = [
        'Id_Detail_Keranjang',
        'Id_Keranjang',
        'Id_Barang',
        'Kuantitas',
        'Sub_Barang',
        'Sub_Total',
    ];

     
}
