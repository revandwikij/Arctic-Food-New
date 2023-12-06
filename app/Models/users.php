<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as AuthUser
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class users extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'username',
        'email',
        'password',
        'level',
    ];
}
