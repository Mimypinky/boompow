<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public function account()
    {
        return $this->belongsTo('App\Account', 'user_id');
    }
    public function comments(){
       return $this->hasMany('App\Comment','post_id');
    }
}