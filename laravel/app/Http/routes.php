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
Route::post('/event/edit/{eid}','EventController@editEvents');

Route::get('/','HomeController@index');
Route::get('/content/{category_title}', 'HomeController@showContent');
Route::get('/content/{category_title}/{topic}','HomeController@getTopic');
Route::get('/content',[ 'as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/event',[ 'as' => 'event', 'uses' => 'EventController@index']);
//Route::resource('event','EventController');
Route::post('/event/create', 'EventController@store');
Route::get('/event/remove/{eid}','EventController@deleteEvents');
Route::get('/event/join/{eid}','EventController@joinEvents');
Route::get('/event/cancel/{eid}','EventController@cancelEvents');
Route::get('/event/board/{eid}','EventController@eventBoardindex');

Route::get('/favourite','FavouriteController@index');

Route::auth();

Route::resource('/register','Profile\AuthController',array('before' => 'csrf'),[ 'except' => ['destroy','edit']]);
Route::get('/checkAvailableUsername',function(){
  $username = Request::Input('username');

  $result = App\Account::where('username', $username)->first();
  if(isset($result)){
    return Response::json('1');
  }
  else {
    return Response::json('0');
  }
});

Route::group(['middleware' => ['web']], function (){
  Route::post('/handleLogin',[ 'as' => 'handleLogin', 'uses' => 'Profile\AuthController@handleLogin']);
  Route::get('logout',['as' => 'logout', 'uses' => 'Profile\AuthController@logout']);
});

Route::get('/newsfeed',function(){
    $title = 'newsfeed';
      return view('social.newsfeed',compact('title'));
});

Route::get('/profile',[ 'as' => 'profile', 'uses' => 'Profile\ProfileController@index']);
Route::post('/Pending' , 'FriendController@sendFriendRequest');
Route::get('/profile-friend',function(){
  $title ='Boompow - Friend profile';
  return view('social.profile-friend',compact('title'));
});
Route::get('/friend/{fid}' , 'FriendController@viewFriend');
Route::get('/friends',function(){
  $title ='Boompow - My Friends';
  return view('social.friend',compact('title'));
});
Route::get('/chat',function(){
  $title ='Boompow - Chatbox';
  return view('social.chat',compact('title'));
});

//Route::get('cancelRequest' , 'FriendController@viewFriendRequest');
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> 482d3ddc42ee5199fda264626ac1b63d490a04f9
Route::get('/notification',function(){
  $title ='Boompow - Notificate';
  return view('social.noti',compact('title'));
});
<<<<<<< HEAD

Route::post('/acceptFriend', 'FriendController@acceptFriend');
Route::get('/upload',function(){
  return view('social.ex_upload');
});
=======
>>>>>>> 9060938f5737cba36ada8eb68e12d82414216885
>>>>>>> c2f5e503d97a1803b6b260c420661a44208e3189
Route::get('/notification' , 'FriendController@viewFriendRequest');
Route::get('acceptFriend/{rid}', 'FriendController@acceptFriend');
Route::get('/upload',function(){
  return view('social.ex_upload');
});
Route::get('/testProfile', function(){
  return view('social.test_profile');
});
Route::get('/setting', function(){
  $title= 'Boompow';
  return view('social.setting_profile',compact('title'));
});
