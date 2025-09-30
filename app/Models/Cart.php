<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable =[
        "user_id" , "status"
    ];
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function CartItems(){
        return $this->hasMany(CartItems::class);
    }
}
