<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['total_price','amount','name','address','phone', 'user_id', 'status'];

//    public function items() //этот метод нам понадобится чуть позже
//    {
//        return $this->belongsTo('App\Items', 'item_id', 'id');   //связь один к одному
//    }
}
