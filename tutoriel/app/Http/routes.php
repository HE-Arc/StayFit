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
/*----------------------Page Accueil----------------------*/
Route::get('/', 'WelcomeController@index');

/*----------------------Autre routes----------------------*/
Route::get('login', 'LoginController@index');

/*Route::get('{n}', function($n) { 
    return 'Je suis la page ' . $n . ' !'; 
})->where('n', '[1-3]');*/
//Route::get('1','WelcomeController@page1');

