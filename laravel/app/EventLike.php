<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventLike extends Model
{
    protected $table ='event_board_like';
    public $timestamps=true;

    public function post()
    {
      return $this->belongsTo('App\EventPost', 'event_post_id');
    }
    public function user()
    {
      return $this->belongsTo('App\Account', 'user_id');
    }

}
