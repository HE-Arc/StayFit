<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

use App\Http\Requests\SubscribeRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	public function index()
	{
		return view('login');
	}
	public function postForm(SubscribeRequest $request)
	{
		Mail::send('email_contact', $request->all(), function($message) 
		{
			$message->to('schaffora@gmail.com')->subject('Subscribing');
		});

		return view('welcome');
	}

}
