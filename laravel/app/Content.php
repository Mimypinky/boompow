<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo('App\Category', 'cate_id');
    }
}
