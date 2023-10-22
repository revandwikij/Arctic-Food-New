<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    use HasFactory;
    protected $table = "notifications";

    protected $fillable = [
        'Id_Notif', // tambahkan kolom lainnya sesuai kebutuhan
        'Id_Pelanggan', // tambahkan kolom lainnya sesuai kebutuhan
        'message',
    ];
}
