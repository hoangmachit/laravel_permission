<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCats extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_vi',
        'name_en',
        'slug_vi',
        'slug_en',
        'description_vi',
        'description_en',
        'content_vi',
        'content_en',
        'type',
        'post_list_id',
        'user_id'
    ];
}
