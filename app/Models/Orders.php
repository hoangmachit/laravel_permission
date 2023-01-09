<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'payment_id',
        'device_type_id',
        'browser',
        'ip_address',
        'code',
        'full_name',
        'phone',
        'address',
        'temp_price',
        'ship_price',
        'use_point',
        'sub_price',
        'total_price',
        'city',
        'district',
        'ward',
        'notes',
        'requirements',
        'sort',
        'order_status_id',
    ];
}
