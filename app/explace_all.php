<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class explace_all extends Model
{
    // protected $table = 'ex_alls';

    public function paks() {
        return $this->belongsTo('App\pak','pak_id');
}

public function hons() {
    return $this->belongsTo('App\hon','hon_id');
}
}
