<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trancribe;
use DB;
use Auth;

class SubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upload_status = Trancribe::All();
        
        $active_uploads = Trancribe::where('user_id',Auth::id())->latest()->first();

        $totals =DB::table('trancribes')->where('user_id',Auth::id())->sum('cost');
        /*
        DB::table('trancibes')->select('file','cost','format')->where('user_id',Auth::id());
        */
        return view('Front.uploads',compact ('active_uploads','totals'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trancribe:: where('id',$id)->delete();
        return  redirect()->back();
        //
    }
}
