<?php

namespace codetech;

use Illuminate\Foundation\Auth\User as Authenticatable;
use codetech\Status;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    public function statii()
    {
        return $this->hasMany('codetech\Status');
    }

    public function articles()
    {
        return $this->hasMany('codetech\Article');
    }
}
