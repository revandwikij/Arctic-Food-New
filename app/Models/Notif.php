<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    use HasFactory;
    protected $primary = 'id';
    protected $table = "notifications";

    protected $fillable = [
        'type', // tambahkan kolom lainnya sesuai kebutuhan
        'notifiable_type', // tambahkan kolom lainnya sesuai kebutuhan
        'notifiable_id',
        'data',
        'read_at',
    ];
}
