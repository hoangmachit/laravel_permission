<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_vi',
        'name_en',
        'options',
        'head_js',
        'body_js',
        'mastertool',
        'google_analytics',
        'maintenance'
    ];
}
