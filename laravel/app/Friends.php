<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    protected $table='friends';
    public $timestamps = true;
    protected $fillable = array('from_user_id' , 'to_user_id' , 'status' , 'action_user_id');
    public function account()
    {
        return $this->hasMany('App\Account');
    }

    public function post()
    {
      return $this->hasMany('App\Post','user_id');
    }
}
