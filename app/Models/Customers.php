<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'confirm_code',
        'avatar',
        'fullname',
        'phone',
        'email',
        'birth_day',
        'address',
        'gender',
        'login_session',
        'last_login',
        'status',
        'sort'
    ];
}
