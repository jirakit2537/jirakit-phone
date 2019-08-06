<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class zipcodes extends Model
{
  public function districts() {
    return $this->belongsTo('App\Model\districts');
  }
}
