<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seos extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_vi',
        'title_en',
        'description_vi',
        'description_en',
        'keyword_vi',
        'keyword_en',
        'robots',
        'type',
        'type_id',
        'schema_vi',
        'schema_en'
    ];
}
