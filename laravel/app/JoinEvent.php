<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinEvent extends Model
{
    protected $table = 'join_event';
    public $timestamps = true;
    public function event()
    {
        return $this->belongsTo('App\Event', 'eve_id');
    }
    public function account()
    {
        return $this->belongsTo('App\Account', 'user_id');
    }
}
