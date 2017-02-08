<?php

namespace codetech;

use Illuminate\Database\Eloquent\Model;
//use codetech\User;
// use codetech\Auth;
use Illuminate\Support\Facades\Auth;

class Status extends Model
{
    //
    // public function setTable($table)
    // {
    //     $this->table = $table;
    //     return $this;
    // }
    protected $table = 'status';

    public function user()
    {
        return $this->belongsTo('codetech\User');
    }

    public function likes()
    {
        return $this->hasMany('codetech\Like');
    }

    public function isLiked()
    {
        if($this->likes()->whereUserId(Auth::user())->first())
        {
            return true;
        }
        else{
            return false;
        }
    }
}
