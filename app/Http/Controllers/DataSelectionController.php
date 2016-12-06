<?php

namespace App\Http\Controllers;

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
        $data=Session::select('footsteps','duration','distance','calories')->where('user_id',$userId)->get();

        return view('dataSelection',['data'=>$data]);
    }
    public function postForm(Requests\dataSelectRequest $request)
    {
        return view('dataView',['data'=>$request]);
    }

}
