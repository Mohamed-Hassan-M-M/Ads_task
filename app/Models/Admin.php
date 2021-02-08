<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

    /* set password => hash password */
    public function setPasswordAttribute($pass){
        if(!empty($pass))
            $this->attributes['password'] = Hash::make($pass);

    }
}
