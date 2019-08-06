<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hon extends Model
{
    public function explace_al() {
        return $this->hasMany('App\explace_all','id');
}
}
