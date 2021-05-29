<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function order_products()
    {
        return $this->hasMany('App\Models\OrderProduct','order_id','id');
    }
}
