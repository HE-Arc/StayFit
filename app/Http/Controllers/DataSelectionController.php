<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
