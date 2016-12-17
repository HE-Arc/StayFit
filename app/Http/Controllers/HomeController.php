<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Requests\UserProfileRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
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
        $user = Auth::User();
        return view('home', ['user' => $user]);
    }
}
