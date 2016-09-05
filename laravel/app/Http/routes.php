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


Route::get('/','HomeController@index');
Route::get('/content/{category_title}', 'HomeController@showContent');
Route::get('/content/{category_title}/{topic}','HomeController@getTopic');
Route::get('/content',[ 'as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/event',[ 'as' => 'event', 'uses' => 'EventController@index']);
Route::get('/event/board/{$eid}','EventController@eventBoardindex');
//Route::get('/event',[ 'as' => 'event', 'uses' => 'EventController@index']);

Route::get('/register','QuestforpwdController@index');

Route::resource('event','EventController');
Route::post('event/create', 'EventController@store');
Route::group(['middleware' => ['web']], function (){
  //Route::get('/login',[ 'as' => 'login', 'uses' => 'Profile\AuthController@login']);
Route::post('/handleLogin',[ 'as' => 'handleLogin', 'uses' => 'Profile\AuthController@handleLogin']);
});
Route::get('/newsfeed',function(){
    $title = 'newsfeed';
      return view('social.newsfeed',compact('title'));
});
Route::get('myprofile',function(){
  $title = '...s Profile';
  return view('social.myprofile',compact('title'));
});
//Route::get('event/{eventname}',);
