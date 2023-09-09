<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya_Ship extends Model
{
    use HasFactory;
    protected $table = 'biaya_shipping';

    protected $fillable = [
        'Id_Biaya', // tambahkan kolom lainnya sesuai kebutuhan
        'Kota',
        'Biaya_Shipping_per_Kg',
    ];
}
