<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['picture_path'];

    public function getPicturePathAttribute($value){
        return '/storage/'.$value;
    }
}
