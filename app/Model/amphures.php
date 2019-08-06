<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class amphures extends Model
{
  protected $table = 'amphures';

public function geography() {
  return $this->belongsTo('App\Model\geography', 'GEO_ID','GEO_ID');
}

public function provinces() {
  return $this->belongsTo('App\Model\provinces', 'PROVINCE_ID','PROVINCE_ID');
}

public function districts() {
  return $this->hasMany('App\Model\districts', 'AMPHUR_ID','AMPHUR_ID');
}
}
