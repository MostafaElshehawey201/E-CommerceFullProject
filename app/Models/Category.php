<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        "name" , 'image' , 'description' , "department_id" , "created_by",
    ];

    public function Department(){
        return $this->belongsTo(Department::class);
    }

    public function Created_by(){
        return $this->belongsTo(User::class);
    }

    public function Products(){
        return $this->hasMany(Product::class);
    }
}
