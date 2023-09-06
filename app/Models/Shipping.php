<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $table = 'biaya_shipping';
     

    protected $fillable = [
        'Id_Biaya',
        'Kota_kg',
        'Biaya_Shipping',
         
    ];
}
