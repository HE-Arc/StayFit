<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Requests\UserProfileRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class UserProfileController extends Controller
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
        return view('userProfile',['user' => $user]);
    }

    public function postForm(UserProfileRequest $request)
    {
        $user = Auth::User()->find(Auth::id());
        $user->size = $request->size;
        $user->weight = $request->weight;
        $user->gender = $request->gender;
        $user->birth_date = $request->birth_date;
        $user->save();
        return view('userProfileOk');
    }
}
