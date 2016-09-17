<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    protected $table='friends';
    public $timestamps = true;
    protected $fillable = array('from_user_id' , 'to_user_id' , 'status' , 'action_user_id');
}
