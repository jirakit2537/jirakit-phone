<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class geography extends Model
{
  protected $fillable = array('GEO_ID', 'GEO_NAME');
    protected $table = 'geography';

      public function provinces() {
        return $this->hasMany('App\Model\provinces');
      }

      public function amphures() {
        return $this->hasMany('App\Model\amphures');
      }

      public function districts() {
        return $this->hasMany('App\Model\districts');
      }
}
