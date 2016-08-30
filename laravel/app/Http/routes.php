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

<<<<<<< HEAD
Route::get('/','HomeController@index');
Route::get('/register','QuestforpwdController@index');
=======

//Route::get('/home','HomeController@index');
>>>>>>> 5b8214d17a1e9351486cc16c82414176e1a787ab

Route::get('/content/{category_title}', 'HomeController@showContent');

<<<<<<< HEAD
Route::get('/content',[ 'as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/event',[ 'as' => 'event', 'uses' => 'EventController@index']);
Route::get('/event/board/{{$eid}}','EventController@eventBoardindex');
Route::get('/register','QuestforpwdController@index');
=======
//Route::get('/event',[ 'as' => 'event', 'uses' => 'EventController@index']);
Route::get('/event/board/{{$eid}}','EventController@eventBoardindex');
Route::get('/register','QuestforpwdController@index');
Route::get('/content/{cate_id}/{id}', 'HomeController@show');

Route::resource('event','EventController');
Route::post('event/create', 'EventController@store');

>>>>>>> 5b8214d17a1e9351486cc16c82414176e1a787ab
Route::group(['middleware' => ['web']], function (){
  //Route::get('/login',[ 'as' => 'login', 'uses' => 'Profile\AuthController@login']);
  Route::post('/handleLogin',[ 'as' => 'handleLogin', 'uses' => 'Profile\AuthController@handleLogin']);
});
