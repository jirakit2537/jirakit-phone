<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notephone;
use auth;
use input;

class NotephoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Notephone::all();
            return view('notephone.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notephone.create');
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
            'namenote' => 'required',
            'phoneback' => 'required',
            'form' => 'required',
            'id_districts' => 'required',
            'id_state' => 'required',
            'id_country' => 'required',

            'story' => 'required',
            'note' => 'required',
            'notepad' => 'required',
        ]);

        $note = new Notephone();
        $note->user_id = Auth::user()->id;
        $note->namenote = $request->input('namenote');
        $note->phoneback = $request->input('phoneback');
        $note->fromnote = $request->input('form');
        $note->districts_id = $request->input('id_districts');
        $note->amphures_id = $request->input('id_state');
        $note->provinces_id = $request->input('id_country');
        $note->story = $request->input('story');
        $note->note = $request->input('note');
        $note->notepad = $request->input('notepad');
        $note->save();
        return redirect()->route('notephone.index')
            ->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Notephone::findorfail($id);
        return view('notephone.edit',compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Notephone::findorfail($id);
        return view('notephone.edit',compact('note'));
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
//        dd($request->all());
        $this->validate($request, [
            'namenote' => 'required',
            'phoneback' => 'required',
            'fromnote' => 'required',
            'districts_id' => 'required',
            'amphures_id' => 'required',
            'provinces_id' => 'required',
            'story' => 'required',
            'note' => 'required',
            'notepad' => 'required',

        ]);

        $note = Notephone::findOrFail($id);
//        $note->user_id = Auth::user()->id;
        $note->namenote = $request->input('namenote');
        $note->phoneback = $request->input('phoneback');
        $note->fromnote = $request->input('fromnote');
        $note->districts_id = $request->input('districts_id');
        $note->amphures_id = $request->input('amphures_id');
        $note->provinces_id = $request->input('provinces_id');
        $note->story = $request->input('story');
        $note->note = $request->input('note');
        $note->notepad = $request->input('notepad');
        $note->save();
        return redirect()->route('notephone.index')
            ->with('success','อัพเดทข้อมูลเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Notephone::destroy($id);
    }
}
