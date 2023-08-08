<?php

namespace App\Models;

use App\Models\User;
use App\Models\Order;
use App\Models\Picture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
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

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function user () {

        return $this->belongsTo(User::class);

    }
}
