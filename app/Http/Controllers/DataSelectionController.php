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
        //TODO: define what it's really needed to be send
        $user=Auth::user();
        $data=DataSample::select('date','footsteps','duration','distance','calories','activity_id','id')->where('user_id',$user->id)->get();

        $typeActivity=Activity::select('name')->get();

        return view('dataSelection',['data'=>$data,'type'=>$typeActivity]);
    }
    public function send($request)
    {
        $data=DataSample::find($request);
        return view('dataView',['data'=>$data]);
    }
}
