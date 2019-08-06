<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notephone extends Model
{

    protected $table = 'Notephone';
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
