<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';
    public $timestamps = true;
    public function post()
    {
       return $this->hasMany('App\Post','post_id');
    }

    public function account()
    {
       return $this->hasMany('App\Account','liked_by');
    }
}
