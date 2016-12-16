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
        $user = Auth::user();
        $data = session::where('user_id', $user->id)->with('activity')->get();
        return view('dataSelection', ['data' => $data]);
    }

    public function send($request)
    {
        //Get session row where id=selected one ($request) and where user_id correspond to
        // current user => if not, it means that this user doesn't have right to display this session.
        $result = Session::where('id',$request)->where('user_id',Auth::id())->first();
        if(count($result)==1)
        {
            return view('dataView', ['data' => $result]);
        }else{
            return redirect('/');
        }
    }
}
