<?php

namespace codetech;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = "likes";

    public function status()
    {
        return $this->belongsTo('codetech\Status');
    }

    public function user()
    {
        //$this->belongsTo('user');
        return $this->belongsTo('codetech\User');
    }
}
