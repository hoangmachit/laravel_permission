<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'name_vi',
        'name_en',
        'code',
        'photo',
        'regular_price',
        'sale_price',
        'quantity',
    ];
}
