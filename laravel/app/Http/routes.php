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
  return view('site.layout');
});

Route::get('/event',function(){
  return view('site.event');
});
Route::get('/testNewEve',function(){
  return view('site.newEvent');
});
Route::post('/testNewEve','CreateEvent@store');


Route::get('/register','QuestforpwdController@index');

//Route::auth();

//Route::get('/home', 'HomeController@index');
