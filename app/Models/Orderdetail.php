<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $fillable=['product_id', 'product_price', 'product_name', 'order_id', 'product_quantity'];

}
