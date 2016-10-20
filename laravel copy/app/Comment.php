<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    public $timestamps = true;

    public function users()
    {
      return $this->hasMany('App\Account','user_id');
    }
    public function posts()
    {
      return $this->hasMany('App\Post','post_id');
    }
}
