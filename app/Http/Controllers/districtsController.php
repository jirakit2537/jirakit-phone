<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\provinces;
use App\Model\geography;
use App\Model\amphures;
use App\Model\districts;

class districtsController extends Controller
{
  public function index(){

    $geo = districts::where('DISTRICT_NAME','หนองบัว')->orderBy('DISTRICT_ID', 'ASC')->paginate(20);


    $d =  districts::count();
      $a =  amphures::count();
  $p =  provinces::count();
  $g =  geography::count();

    return view ('test.index', compact('geo','d','a','p','g'));
    // dd($geo);
  }

}
