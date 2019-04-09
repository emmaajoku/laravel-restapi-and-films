<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}