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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
Route::get('/dataSample', 'DataSampleController@getForm');
Route::post('/dataSample', ['uses' => 'DataSampleController@postForm', 'as' => 'addDataSample']);


Route::get('/user', 'UserProfileController@index');
Route::post('/user', ['uses' => 'UserProfileController@postForm','as' => 'formUser']);

Route::get('/selection','DataSelectionController@index');
Route::post('/selection',['uses'=>'DataSelectionController@postForm','as'=>'selectionSample']);

Route::get('/compare','DataCompareController@index');

Route::get('/view','DataViewController@index');


