<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinEvent extends Model
{
    protected $table = 'join_event';
    public $timestamps = false;
    public function event()
    {
        return $this->belongsTo('App\Event', 'eve_id');
    }
    public function accounts()
    {
        return $this->hasMany('App\JoinEvent', 'user_id');
    }

}
