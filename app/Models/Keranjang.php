<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';
    protected $primaryKey = "Id_Keranjang";

    protected $fillable = [
        'Id_Keranjang',
        'Id_Pelanggan',
        'Id_Barang',
        'Harga_Satuan',
        'Sub_Total',
        'Jumlah',
    ];
}
