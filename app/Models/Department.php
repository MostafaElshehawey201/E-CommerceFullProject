<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable=[
        "name" , "image" , "description" , "created_by",
    ];

    public function Created_by(){
        return $this->belongsTo(User::class);
    }

    public function Categories(){
        return $this->hasMany(Category::class);
    }

    public function Products(){
        return $this->hasMany(Product::class);
    }
}
