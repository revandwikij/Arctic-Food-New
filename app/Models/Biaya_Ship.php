<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Biaya_Ship extends Model
{
    use HasFactory, Sortable;
    protected $table = 'biaya_shipping';

    protected $fillable = [
        'Id_Biaya', // tambahkan kolom lainnya sesuai kebutuhan
        'Kota',
        'Biaya_Shipping_per_Kg',
    ];
}
