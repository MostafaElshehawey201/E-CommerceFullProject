<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        "name" , 
        "description" ,
        "image" ,
        "stock",
        "sku",
        "weight",
        "dimensions",
        "created_by",
        "department_id",
        "category_id",
        "expire_date",
        "price",
        "discount_price",
        "featured",
        "views_count",
        "sold_count",
        "status",
        "images",
    ];
    protected $casts=[
        "images"=>'array',
    ];

    public function Created_by(){
        return $this->belongsTo(User::class);
    }

    public function Department(){
        return $this->belongsTo(Department::class);
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function CartItems(){
        return $this->hasMany(CartItems::class);
    }

    public function OrderItems(){
        return $this->hasMany(Order::class);
    }
}
