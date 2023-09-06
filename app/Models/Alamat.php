<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;
    protected $table = "alamat";

    protected $fillable = [
        'Id_Alamat', // tambahkan kolom lainnya sesuai kebutuhan
        'Id_Pelanggan',
        'Label',
        'Nama_Penerima',
        'No_Hp',
        'Alamat_Lengkap',
        'Kota',
        'Kode_Pos',
    ];
}
