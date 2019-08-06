<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use auth;
use App\modelgongtham\level;
use App\modelgongtham\stitexam;
use App\modelgongtham\country;
use App\modelgongtham\explace;
use Redirect;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;
use DB;

class ExplaceController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $explace = explace::all();
    return view('nation.explace.index2', compact('explace'));
  }
 
  public function viewpdf(){
    $explaces = explace::all();



    $level = level::pluck('th_level', 'id');

    $now = date('Y')+543;
    // $ts = $explaces->stitexamss->edu_year;

    $explaces = stitexam::orderBy('edu_year', 'desc')->where('edu_year', 2560)->get();
      // $explaces =  $tt->groupBy('id_explace');

      $ee = DB::table('country')->  join('explace', 'explace.id_country', '=', 'country.id')
       ->join('stitexam', 'stitexam.id_explace', '=', 'explace.id')
        ->join('level', 'level.id', '=', 'stitexam.id_level')
        ->select(
          'country.th_country', 
          'explace.th_explace',
          // DB::raw('stitexam.stit1'),
          // DB::raw('stitexam.stit2'),
          // DB::raw('stitexam.stit3'),
          // DB::raw('stitexam.stit4'),
          // DB::raw('stitexam.stit5'),
        
         'stitexam.*'
         
        
       )
      ->get()
      
      ->groupBy('id_explace','id_level')->toArray()
    //   ->select(
    //     'country.th_country', 
    //     'explace.th_explace',
    //     // DB::raw('stitexam.stit1'),
    //     // DB::raw('stitexam.stit2'),
    //     // DB::raw('stitexam.stit3'),
    //     // DB::raw('stitexam.stit4'),
    //     // DB::raw('stitexam.stit5'),
      
    //    'stitexam.*'
       
      
    //  )
    // //  ->join('explace', 'explace.id_country', '=', 'country.id')
    //  ->join('stitexam', 'stitexam.id_explace', '=', 'explace.id')
    //  ->join('level', 'level.id', '=', 'stitexam.id_level')
    //  ->where('edu_year', 2560) ->get()
    //  ->groupBy('id_explace')->toArray()
     
    //  ->orderBy('country.id','desc')
    ;

// dd($ee);
$ees = DB::table('stitexam') ->select(
  'country.th_country', 
  'explace.th_explace',
DB::raw('sum(CASE WHEN stitexam.id_level = 4 THEN stitexam.stit1 ELSE 0 END) AS stit1c4'),
DB::raw('sum(CASE WHEN stitexam.id_level = 4 THEN stitexam.stit2 ELSE 0 END) AS stit2c4'),
DB::raw('sum(CASE WHEN stitexam.id_level = 4 THEN stitexam.stit3 ELSE 0 END) AS stit3c4'),
DB::raw('sum(CASE WHEN stitexam.id_level = 4 THEN stitexam.stit4 ELSE 0 END) AS stit4c4'),
DB::raw('sum(CASE WHEN stitexam.id_level = 4 THEN stitexam.stit5 ELSE 0 END) AS stit5c4'),
DB::raw('sum(CASE WHEN stitexam.id_level = 5 THEN stitexam.stit1 ELSE 0 END) AS stit1c5'),
DB::raw('sum(CASE WHEN stitexam.id_level = 5 THEN stitexam.stit2 ELSE 0 END) AS stit2c5'),
DB::raw('sum(CASE WHEN stitexam.id_level = 5 THEN stitexam.stit4 ELSE 0 END) AS stit4c5'),
DB::raw('sum(CASE WHEN stitexam.id_level = 5 THEN stitexam.stit3 ELSE 0 END) AS stit3c5'),
DB::raw('sum(CASE WHEN stitexam.id_level = 5 THEN stitexam.stit5 ELSE 0 END) AS stit5c5'),
DB::raw('sum(CASE WHEN stitexam.id_level = 6 THEN stitexam.stit1 ELSE 0 END) AS stit1c6'),
DB::raw('sum(CASE WHEN stitexam.id_level = 6 THEN stitexam.stit2 ELSE 0 END) AS stit2c6'),
DB::raw('sum(CASE WHEN stitexam.id_level = 6 THEN stitexam.stit3 ELSE 0 END) AS stit3c6'),
DB::raw('sum(CASE WHEN stitexam.id_level = 6 THEN stitexam.stit4 ELSE 0 END) AS stit4c6'),
DB::raw('sum(CASE WHEN stitexam.id_level = 6 THEN stitexam.stit5 ELSE 0 END) AS stit5c6'),
DB::raw('sum(CASE WHEN stitexam.id_level = 7 THEN stitexam.stit1 ELSE 0 END) AS stit1c7'),
DB::raw('sum(CASE WHEN stitexam.id_level = 7 THEN stitexam.stit2 ELSE 0 END) AS stit2c7'),
DB::raw('sum(CASE WHEN stitexam.id_level = 7 THEN stitexam.stit3 ELSE 0 END) AS stit3c7'),
DB::raw('sum(CASE WHEN stitexam.id_level = 7 THEN stitexam.stit4 ELSE 0 END) AS stit4c7'),
DB::raw('sum(CASE WHEN stitexam.id_level = 7 THEN stitexam.stit5 ELSE 0 END) AS stit5c7'),
DB::raw('sum(CASE WHEN stitexam.id_level = 8 THEN stitexam.stit1 ELSE 0 END) AS stit1c8'),
DB::raw('sum(CASE WHEN stitexam.id_level = 8 THEN stitexam.stit2 ELSE 0 END) AS stit2c8'),
DB::raw('sum(CASE WHEN stitexam.id_level = 8 THEN stitexam.stit3 ELSE 0 END) AS stit3c8'),
DB::raw('sum(CASE WHEN stitexam.id_level = 8 THEN stitexam.stit4 ELSE 0 END) AS stit4c8'),
DB::raw('sum(CASE WHEN stitexam.id_level = 8 THEN stitexam.stit5 ELSE 0 END) AS stit5c8'),
DB::raw('sum(CASE WHEN stitexam.id_level = 9 THEN stitexam.stit1 ELSE 0 END) AS stit1c9'),
DB::raw('sum(CASE WHEN stitexam.id_level = 9 THEN stitexam.stit2 ELSE 0 END) AS stit2c9'),
DB::raw('sum(CASE WHEN stitexam.id_level = 9 THEN stitexam.stit3 ELSE 0 END) AS stit3c9'),
DB::raw('sum(CASE WHEN stitexam.id_level = 9 THEN stitexam.stit4 ELSE 0 END) AS stit4c9'),
DB::raw('sum(CASE WHEN stitexam.id_level = 9 THEN stitexam.stit5 ELSE 0 END) AS stit5c9'),
           DB::raw('sum(stitexam.stit1) as total1'),
        DB::raw('sum(stitexam.stit2) as total2'),
        DB::raw('sum(stitexam.stit3) as total3'),
        DB::raw('sum(stitexam.stit4) as total4'),
        DB::raw('sum(stitexam.stit5) as total5')
)->join('explace', 'explace.id', '=', 'stitexam.id_explace')
->join('country', 'explace.id_country', '=', 'country.id')
->where('edu_year', 2560) 
//  ->groupBy('stitexam.id_explace')

->orderBy('country.id','desc')
->first();
// dd($ees);
$stits = DB::table('stitexam') ->select(
  'country.*', 
  'explace.*',
  'level.*',
  'stitexam.*'
// DB::raw('sum(CASE WHEN stitexam.id_level = 4 THEN stitexam.stit1 ELSE 0 END) AS stit1c4'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 4 THEN stitexam.stit2 ELSE 0 END) AS stit2c4'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 4 THEN stitexam.stit3 ELSE 0 END) AS stit3c4'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 4 THEN stitexam.stit4 ELSE 0 END) AS stit4c4'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 4 THEN stitexam.stit5 ELSE 0 END) AS stit5c4'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 5 THEN stitexam.stit1 ELSE 0 END) AS stit1c5'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 5 THEN stitexam.stit2 ELSE 0 END) AS stit2c5'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 5 THEN stitexam.stit4 ELSE 0 END) AS stit4c5'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 5 THEN stitexam.stit3 ELSE 0 END) AS stit3c5'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 5 THEN stitexam.stit5 ELSE 0 END) AS stit5c5'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 6 THEN stitexam.stit1 ELSE 0 END) AS stit1c6'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 6 THEN stitexam.stit2 ELSE 0 END) AS stit2c6'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 6 THEN stitexam.stit3 ELSE 0 END) AS stit3c6'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 6 THEN stitexam.stit4 ELSE 0 END) AS stit4c6'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 6 THEN stitexam.stit5 ELSE 0 END) AS stit5c6'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 7 THEN stitexam.stit1 ELSE 0 END) AS stit1c7'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 7 THEN stitexam.stit2 ELSE 0 END) AS stit2c7'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 7 THEN stitexam.stit3 ELSE 0 END) AS stit3c7'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 7 THEN stitexam.stit4 ELSE 0 END) AS stit4c7'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 7 THEN stitexam.stit5 ELSE 0 END) AS stit5c7'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 8 THEN stitexam.stit1 ELSE 0 END) AS stit1c8'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 8 THEN stitexam.stit2 ELSE 0 END) AS stit2c8'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 8 THEN stitexam.stit3 ELSE 0 END) AS stit3c8'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 8 THEN stitexam.stit4 ELSE 0 END) AS stit4c8'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 8 THEN stitexam.stit5 ELSE 0 END) AS stit5c8'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 9 THEN stitexam.stit1 ELSE 0 END) AS stit1c9'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 9 THEN stitexam.stit2 ELSE 0 END) AS stit2c9'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 9 THEN stitexam.stit3 ELSE 0 END) AS stit3c9'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 9 THEN stitexam.stit4 ELSE 0 END) AS stit4c9'),
// DB::raw('sum(CASE WHEN stitexam.id_level = 9 THEN stitexam.stit5 ELSE 0 END) AS stit5c9'),
//            DB::raw('sum(stitexam.stit1) as total1'),
//         DB::raw('sum(stitexam.stit2) as total2'),
//         DB::raw('sum(stitexam.stit3) as total3'),
//         DB::raw('sum(stitexam.stit4) as total4'),
//         DB::raw('sum(stitexam.stit5) as total5')
)
->join('explace', 'explace.id', '=', 'stitexam.id_explace')
->join('country', 'explace.id_country', '=', 'country.id')
->join('level', 'level.id', '=', 'stitexam.id_level')
->where('edu_year', 2560)

->orderBy('stitexam.id_explace','desc') 


->groupBy('id_explace')->get()
// 



->toArray();

// $ggwp = $stits;
$ggwp = stitexam::join('explace', 'explace.id', '=', 'stitexam.id_explace')
->join('country', 'explace.id_country', '=', 'country.id')
->join('level', 'level.id', '=', 'stitexam.id_level')
->where('edu_year', 2560)
->orderBy('country.note','asc')
->get()
->groupBy('th_country');
// $ggwp = explace::
// with(['countrys','stitexam' ])
// ->whereHas('stitexam', function ($query) {
//   $query->where('edu_year', '=', 2559);
// })
// ->orderBy('id_country','asc')
// ->get()
// ->groupBy('id_country');
// dd($ggwp);
// $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
    $pdf = new PDF();
      $pdf = PDF::loadView('pdf.statistics',compact('explaces', 'level','ee','ees','ggwp'));
            
      // $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
      // $pdf->setOptions(['isPhpEnabled' => true]);
      
      // return $pdf->download('statistics.pdf');
      return $pdf->stream();

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $country = Country::pluck('th_country', 'id');
      return view('nation.explace.create', compact('country'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [

        'th_explace' => 'required' ,
        'en_explace' => 'required',
        'id_country' => 'required',

             ]);


    $exp = new explace();
    $exp->th_explace = $request->get('th_explace');
      $exp->en_explace = $request->get('en_explace');
        $exp->id_country = $request->get('id_country');
        $exp->save();

        $request->session()->flash('success', 'บันทึกข้อมูลข้อมูลเรียบร้อยแล้ว');
      return redirect()->route('explace.index');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $explaces = explace::findOrFail($id);

        $level = level::pluck('th_level', 'id');

      $now = date('Y')+543;
      // $ts = $explaces->stitexamss->edu_year;

      $tt = stitexam::where('id_explace', $explaces->id)->orderBy('edu_year', 'desc')->get();
        $ee =  $tt->groupBy('edu_year');
         
      
          
      // $indy = stitexam::with('explace')->where('id_explace', $explaces->id )->groupBy('edu_year');

    // dd($ee);
      return view('nation.explace.show2' , compact('explaces','level','ee'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $explaces = explace::findOrFail($id);
      $country = Country::pluck('th_country', 'id');
        return view('nation.explace.create' , compact('explaces','country'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $this->validate($request, [

        'th_explace' => 'required' ,
        'en_explace' => 'required',
        'id_country' => 'required',

             ]);

    $exp = explace::findOrFail($id);
    $exp->th_explace = $request->get('th_explace');
      $exp->en_explace = $request->get('en_explace');
        $exp->id_country = $request->get('id_country');
        $exp->update();

        $request->session()->flash('success', 'อัพเดทข้อมูลข้อมูลเรียบร้อยแล้ว');
      return redirect()->route('explace.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $expd = explace::findOrFail($id);
    $expd->delete();
     return redirect::back()->with('msg', 'ลบข้อมูลสนามสอบ '. $expd->th_explace .' ประเทศ '. $expd->countrys->th_country.' สำเร็จ!!');
  }
}
