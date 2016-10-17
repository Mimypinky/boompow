<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPhotos extends Model
{
    protected $table ='event_photos';
    public $timestamps=true;

    public function event()
    {
        return $this->hasMany('App\Event','id','eve_id');
    }
    public function user()
    {
        return $this->hasMany('App\Users','id','user_id');
    }
}
