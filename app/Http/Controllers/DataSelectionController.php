<?php

namespace App\Http\Controllers;

use App\Activity;
use App\DataSample;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Session;

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
        $data=DataSample::select('date','footsteps','duration','distance','calories')->where('user_id',$userId)->get();

        $typeActivity=Activity::select('name');

        return view('dataSelection',['data'=>$data,'type'=>$typeActivity]);
    }
    public function postForm(Requests\dataSelectRequest $request)
    {
         return view('dataView',['data'=>$request]);
    }

}
