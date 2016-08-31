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
Route::get('/register','QuestforpwdController@index');

Route::get('/content/{category_title}', 'HomeController@showContent');


Route::get('/content',[ 'as' => 'home', 'uses' => 'HomeController@index']);
Route::resource('event','EventController');
Route::post('event/create', 'EventController@store');
Route::get('/event/board/{{$eid}}','EventController@eventBoardindex');
Route::get('/register','QuestforpwdController@index');

Route::get('/event/board/{{$eid}}','EventController@eventBoardindex');
Route::get('/register','QuestforpwdController@index');
Route::get('/content/{cate_id}/{id}', 'HomeController@show');


Route::group(['middleware' => ['web']], function (){
  //Route::get('/login',[ 'as' => 'login', 'uses' => 'Profile\AuthController@login']);
  Route::post('/handleLogin',[ 'as' => 'handleLogin', 'uses' => 'Profile\AuthController@handleLogin']);
});
