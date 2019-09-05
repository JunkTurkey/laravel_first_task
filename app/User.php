<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['email', 'password', 'role'];

/*    public function __construct(array $attributes = ['email', 'password', 'role'])
    {
        parent::__construct($attributes);
    }*/

    public function picture(){
        return $this->hasOne('App\Picture', 'id', 'picture_id');
    }

    public function getRoleAttribute($value){
        return $value == 1 ? 'user' : 'admin';
    }
}
