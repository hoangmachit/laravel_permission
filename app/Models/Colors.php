<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_vi',
        'name_en',
        'photo',
        'color',
        'type',
        'sort',
        'status'
    ];
}
