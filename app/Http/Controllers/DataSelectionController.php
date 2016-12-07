<?php

namespace App\Http\Controllers;

use App\Activity;
use App\DataSample;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Session;
use Khill\Lavacharts\Lavacharts;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;

class DataSelectionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId=Auth::user()->id;
        $data=DataSample::select('id','date','footsteps','duration','distance','calories')->where('user_id',$userId)->pluck('date', 'id');
        $typeActivity=Activity::select('name');
        return view('dataSelection',['data'=>$data,'type'=>$typeActivity]);
    }

    public function postForm(Requests\dataSelectRequest $request)
    {
        //return view('dataView',['data'=>$request]);1
        $data= DataSample::find($request->items);
        return view('dataView',compact('lava'), ['data' => $data]);
    }

}
