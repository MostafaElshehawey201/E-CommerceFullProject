<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    protected $fillable =[
        "quantity" , 'price' , "cart_id" , "product_id"
    ];

    public function Cart(){
        return $this->belongsTo(Cart::class);
    }

    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
