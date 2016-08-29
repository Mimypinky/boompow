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
Route::get('/event','EventController@index');
Route::get('/event/board/{{$eid}}','EventController@eventBoardindex');
Route::get('/register','QuestforpwdController@index');
Route::get('/content/{cate_id}/{id}', 'HomeController@show');
Route::group(['middleware' => ['web']], function (){
  Route::get('/login',[ 'as' => 'login', 'uses' => 'Profile\AuthController@login']);
  Route::post('/handleLogin',[ 'as' => 'handleLogin', 'uses' => 'Profile\AuthController@handleLogin']);
});
