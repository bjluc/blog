<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public funtion posts(){

        return $this->belongsToMany('App\Post');

    }
}
