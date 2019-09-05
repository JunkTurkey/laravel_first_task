<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mails extends Model
{
    protected $fillable = ['mail', 'user_id'];

    /*public function __construct(array $attributes = ['mail', 'user_id'])
    {
        parent::__construct($attributes);
    }*/
}
