<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Barang extends Model
{

    // use Sortable;

    use HasFactory;
    protected $table = 'barang';

    protected $fillable = [
        'Id_Barang', // tambahkan kolom lainnya sesuai kebutuhan
        'Nama_Barang',
        'Foto_Barang',
        'Berat',
        'Brand',
        'Stok',
        'Harga',
        'Keterangan_Barang',
    ];


}
