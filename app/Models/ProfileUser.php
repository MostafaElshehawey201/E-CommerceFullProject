<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    protected $fillable = [
        "name",
        "email",
        "phone",
        "image",
        "address",
        "password",
        "Auth_id"
    ];

    public function User()
    {
        return $this->belongsTo(User::class , 'Auth_id');
    }

}
