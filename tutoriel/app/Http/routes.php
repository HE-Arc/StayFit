<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('1', function()
{
      return view('page1');
});
*/
Route::get('1','WelcomeController@page1');
Route::get('/', 'WelcomeController@index');
