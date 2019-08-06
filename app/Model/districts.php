<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class districts extends Model
{

    protected $table = 'districts';
  public function geography() {
    return $this->belongsTo('App\Model\geography', 'GEO_ID','GEO_ID');
  }

  public function provinces() {
    return $this->belongsTo('App\Model\provinces', 'PROVINCE_ID','PROVINCE_ID');
  }

  public function amphures() {
    return $this->belongsTo('App\Model\amphures', 'AMPHUR_ID','AMPHUR_ID');
  }
  public function zipcodes() {
    return $this->hasMany('App\Model\zipcodes', 'district_code','DISTRICT_CODE');
  }

}
