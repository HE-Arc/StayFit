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
        $data = $user->sessions()->with('activity')->get();
        return view('dataSelection', ['data' => $data]);
    }

    public function send($request)
    {
        $user = Auth::user();
        $session = $user->sessions()->where('id', $request)->first();
        if ($user->can('view', $session)) {
            return view('dataView', ['data' => $session]);
        } else {
            return redirect('/');
        }
    }
}
