<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Order extends Model
{
    protected $fillable =[
        "total_price" , "payment_method" , "status" , "shipping_address" , "user_id",
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function OrderItems(){
        return $this->hasMany(Order::class);
    }

}
