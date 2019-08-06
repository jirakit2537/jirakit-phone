<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class provinces extends Model
{

    protected $table = 'provinces';

  public function geography() {
    return $this->belongsTo('App\Model\geography', 'GEO_ID','GEO_ID');
  }

  public function amphures() {
    return $this->hasMany('App\Model\amphures');
  }
  public function districts() {
    return $this->hasMany('App\Model\districts');
  }
}
