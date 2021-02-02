<?php

namespace App\Http\Controllers;

use App\Trancribe;
use wapmorgan\Mp3Info\Mp3Info;
use Illuminate\Http\Request;
use Auth;

class TrancribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Front.transcribe');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Front.uploads');


        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'file'=>'required',
           
        ]);
        $uploads = new Trancribe;
 /*
        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('uploads'), $fileName);

        $uploads->file = $fileName;
        */
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $filename = time(). '.' .$filename;
        $path = $file->storeAs('public',$filename);
        
        $getID3 = new \getID3;
        $files = $getID3->analyze($file);
        $playtime_seconds = $files['playtime_seconds'];
        $duration = date('i', $files['playtime_seconds']);
        

        

        
        $uploads->user_id = Auth::id();
        $uploads->User = Auth::user()->name;
        $uploads->file = $filename;
        $uploads->format = $request->format;
        $uploads->duration= $duration;
        $uploads->cost = $duration*1.2;
        

      

        $uploads->save();

        return redirect('/uploads/check_status')->with('success','File created successfully!');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trancribe  $trancribe
     * @return \Illuminate\Http\Response
     */
    public function show(Trancribe $trancribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trancribe  $trancribe
     * @return \Illuminate\Http\Response
     */
    public function edit(Trancribe $trancribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trancribe  $trancribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trancribe $trancribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trancribe  $trancribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trancribe $trancribe)
    {
        //
    }
}
