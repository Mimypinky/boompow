<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $table = 'favourite';
    public $timestamp = true;
    public function content(){
       return $this->hasMany('App\Favourite','conten_id');
    }
}
