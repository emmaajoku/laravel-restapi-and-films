<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Comment extends Model
{

    // fields can be filled
    protected $fillable = ['body', 'user_id', 'movie_id'];

    public function movies()
    {
        return $this->belongsTo('App\Movies');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}