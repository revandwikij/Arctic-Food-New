<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_log extends Model
{
    use HasFactory;
    protected $table = "activity_log";

    protected $fillable = [
        'Id_Log',
        'email',
        'kegiatan',
    ];
}
