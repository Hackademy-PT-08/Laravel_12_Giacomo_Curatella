<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'last_name',
        'email',
        'billing_address',
        'shipping_address',
        'zip_code',
        'city',
        'province',
        'phone'
    ];
}
