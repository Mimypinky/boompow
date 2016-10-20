<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostPhoto extends Model
{
    protected $table = 'post_photos';
    public $timestamp = true;
    public function post()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }

}
