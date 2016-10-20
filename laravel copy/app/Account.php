<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $table = 'accounts';

    public function profile()
    {
        return $this->belongsTo('App\Profile', 'profile_id');
    }

}
