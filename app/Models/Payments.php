<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_vi',
        'name_en',
        'description_vi',
        'description_en',
        'content_vi',
        'content_en',
        'type',
        'user_id'
    ];
}
