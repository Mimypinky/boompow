<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPosts extends Model
{
  protected $table = 'event_board_post';
  public $timestamps = true;

  public function event()
  {
      return $this->belongsTo('App\Event', 'event_id');
  }
  public function user()
  {
      return $this->belongsTo('App\Account', 'user_id');
  }
}
