<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    use HasFactory;
    protected $table = "activity_log";

    protected $fillable = [
        'Id_Log', // tambahkan kolom lainnya sesuai kebutuhan
        'email',
        'kegiatan',
    ];
}
