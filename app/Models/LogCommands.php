<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogCommands extends Model
{
    use HasFactory;
    protected $fillable  = [
        'command',
        'status',
    ];
}
