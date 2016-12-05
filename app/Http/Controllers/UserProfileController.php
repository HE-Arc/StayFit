<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Requests\UserProfileRequest;
use Illuminate\Support\Facades\App;

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
        return view('userProfile');
    }

    public function postForm(UserProfileRequest $request)
    {
        $user = Auth::User()->find(Auth::User()->id);
        $user->size = $request->sizeNum;
        $user->weight = $request->weightNum;
        $user->gender = $request->gender;
        $user->birth_date = $request->date;
        $user->save();
    }
}
