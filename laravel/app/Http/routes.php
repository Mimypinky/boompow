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
Route::post('/event/{eid}/edit','EventController@editEvents');
Route::get('/index', function(){
  $title ='Boompow';
  return view('index',compact('title'));
});
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

Route::get('/register/step2',function(){
    $title ='Register';
    return view('auth/register_p2',compact('title'));
});
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
Route::get('login',function(){
  $title="เข้าสู่ระบบ";
  return view('site.loginform',compact('title'));
});
Route::get('/newsfeed','Profile\ProfileController@newsfeed');

Route::post('/newsfeed','PostController@poststatus');

Route::get('/profile',[ 'as' => 'profile', 'uses' => 'Profile\ProfileController@index']);
Route::post('/profile','Profile\ProfileController@UpdateAvatar');
Route::post('/post','PostController@postStatus');
Route::post('/postfriend/{fid}','PostController@postFriendStatus');
Route::post('/comment/{pid}','PostController@comments');
Route::get('/like/{pid}','PostController@likePost');
Route::get('/unlike/{lid}','PostController@unlikePost');
Route::get('/delete/{pid}','PostController@deletePost');
Route::get('/post/{pid}/edit','PostController@editPost');
Route::get('/delPic/{pid}','PostController@delPicPost');
// Route::get('/profile','PostController@viewLikes');
Route::post('/pending' , 'FriendController@sendFriendRequest');
Route::get('/profile-friend',function(){
  $title ='Boompow - Friend profile';
  return view('social.profile-friend',compact('title'));
});
Route::get('/friend/{username}' ,'FriendController@viewFriend');
Route::get('/friends',function(){
  $title ='Boompow - My Friends';
  return view('social.friend',compact('title'));
});

Route::get('/dP/{username}', 'FriendController@delPending');


Route::get('/chat',function(){
  $title ='Boompow - Chatbox';
  return view('social.mockup_chat',compact('title'));
});
route::get('chatHistory/{accid}','ChatController@testChat');
Route::get('/message_box','ChatController@index');
Route::post('/sendMessage','ChatController@sendMessage');
Route::get('/retrieveChatMessages','ChatController@retrieveChatMessages');

Route::get('/notification' , 'FriendController@viewFriendRequest');
Route::get('acceptFriend/{rid}', 'FriendController@acceptFriend');
Route::get('/upload',function(){
  return view('social.ex_upload');
});
Route::get('/testProfile', function(){
  return view('social.test_profile');
});
Route::get('/setting', 'Profile\ProfileController@settingProfile');
Route::post('/updateInfo','Profile\ProfileController@updateInfo');
