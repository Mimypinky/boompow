<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPostComm extends Model
{
    protected $table = 'event_board_comment';
    public $timestamps = true;

    public function event_post()
    {
      return $this->belongsTo('App\EventPost', 'event_id');
    }
    public function user()
    {
      return $this->belongsTo('App\Account', 'user_id');
    }
}
