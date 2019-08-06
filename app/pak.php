<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pak extends Model
{
    
    public function explace_al() {
        return $this->hasMany('App\explace_all','id');
}
}
