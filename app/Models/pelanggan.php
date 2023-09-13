<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
     

    protected $fillable = [
        'Id_Pelanggan',
        'username',
        'email',
        'password',
        'jenkel',
        'no_Telp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
