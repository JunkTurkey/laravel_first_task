<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['email', 'password', 'role'];

    public function __construct(array $attributes = ['email', 'password', 'role'])
    {
        parent::__construct($attributes);
    }
}
