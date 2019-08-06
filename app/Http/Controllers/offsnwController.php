<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\offsnw;
use Response;

use Yajra\Datatables\Datatables;



class offsnwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $offsnw = offsnw::all();
//        dd($offsnw);
       return view('offsnw.index');
//        return $dataTable->render('offsnw.index');

    }
    public function data(Datatables $datatables)
    {
////        $builder = offsnw::query();
//
//        return $datatables->eloquent($builder)
//            ->addColumn('id', function ($user) {
//                return '<a >' . $user->id . '</a>';
//            })
////
////            ->addColumn('link', function($user){
////                return '<a class="btn btn-primary" href="offsnw/' . $user->id . '/edit">แก้ไขข้อมูล</a>';
////            })
////            ->rawColumns([1, 5])
//            ->make(true);
        return $datatables->eloquent(offsnw::query())
            ->editColumn('id', function ($user) {
                return $user->id ;
            })->
//            ->addColumn('action', 'offsnw.ajax')
                addColumn('action', function ($user) {
                    return '<button class="btn btn-primary open-modal" value="'.$user->id.'">แก้ไข้ข้อมูลนี้
</button>';
                })
            ->rawColumns(['name', 'action'])
            ->make(true);
    }

    public function dataonly(Datatables $datatables)
    {

        return $datatables->eloquent(offsnw::query())
            ->editColumn('id', function ($user) {
                return $user->id ;
            })->
//            ->addColumn('action', 'offsnw.ajax')
            addColumn('action', function ($user) {
                return '<button class="btn btn-primary open-modal" value="'.$user->id.'">ส่งคำขอแก้ไขข้อมูล
</button>';
            })
            ->rawColumns(['name', 'action'])
            ->make(true);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offsnw.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offsnw = offsnw::findOrFail($id);
        return response()->json($offsnw);
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
        $link = offsnw::findOrFail($id);
        $input = $request->all();
        $link->update($input);
        return response()->json($link);
//        dd($request->all);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $link = offsnw::destroy($id);
        return Response::json($link);
    }
}
