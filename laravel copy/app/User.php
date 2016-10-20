<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function getRememberToken()
    {
      return $this->remember_token;
    }

    public function setRememberToken($value)
    {
      $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
      return 'remember_token';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "accounts";

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
