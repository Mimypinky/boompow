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
Route::get('/fav/{cid}','FavouriteController@addFav');
Route::get('/content',[ 'as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/event',[ 'as' => 'event', 'uses' => 'EventController@index']);
//Route::resource('event','EventController');
Route::post('/event/create', 'EventController@store');
Route::get('/event/remove/{eid}','EventController@deleteEvents');
Route::get('/event/join/{eid}','EventController@joinEvents');
Route::get('/event/cancel/{eid}','EventController@cancelEvents');
Route::get('/event/board/{eid}','EventController@eventBoardindex');
Route::post('/event/board/{eid}','PostController@postEventBoard');
Route::post('/event/board/{eid}/comment','PostController@commentsPostEvent');
Route::get('/event/board/{eid}/like/{pid}','PostController@likePost');

Route::get('/favourite','FavouriteController@index');

Route::auth();
Route::get('/register/step2',function(){
    $title ='Register';
    return view('auth/register_p2',compact('title'));
});
Route::resource('/register','Profile\AuthController',array('before' => 'csrf'),[ 'except' => ['destroy','edit']]);
Route::get('/checkAvailableUsername','Profile\AuthController@checkAvailableUsername');
// Route::get('/checkAvailableUsername',function(){
//   $username = Request::Input('username');
//
//   $result = App\Account::where('username', $username)->first();
//   if(isset($result)){
//     return Response::json('1');
//   }
//   else {
//     return Response::json('0');
//   }
// });

Route::group(['middleware' => ['web']], function (){
  Route::post('/handleLogin',[ 'as' => 'handleLogin', 'uses' => 'Profile\AuthController@handleLogin']);
  Route::get('login',[ 'as' => 'login', 'uses' => 'Profile\AuthController@loginForm']);
  Route::get('logout',['as' => 'logout', 'uses' => 'Profile\AuthController@logout']);
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

Route::get('/friends','FriendController@showFriendlist');



Route::get('/chat',function(){
  $title ='Boompow - Chatbox';
  return view('social.mockup_chat',compact('title'));
});
route::get('chatHistory/{accid}','ChatController@chatRoom');
Route::get('/message_box','ChatController@index');

Route::get('/notification' , 'FriendController@viewFriendRequest');
Route::get('/deletePending/{username}', 'FriendController@deletePending');
Route::get('/deleteFriendReq/{username}', 'FriendController@deleteFriendRequest');
Route::get('/unfriend/{username}', 'FriendController@unfriend');
Route::get('acceptFriend/{fid}', 'FriendController@acceptFriendRequest');
Route::get('/upload',function(){
  return view('social.ex_upload');
});
Route::get('/testProfile', function(){
  return view('social.test_profile');
});
Route::get('/setting', 'Profile\ProfileController@settingProfile');
Route::post('/updateInfo','Profile\ProfileController@updateInfo');

Route::post('/handleAdminLogin',[ 'as' => 'handleAdminLogin', 'uses' => 'Admin\AuthController@handleAdminLogin']);
Route::resource('/administator/register','Admin\AuthController',array('before' => 'csrf'),[ 'except' => ['destroy','edit']]);
Route::get('/administator','Admin\AdminController@index');

Route::get('/administator/user',function(){
  return view('admin.manage_user');
});
Route::get('/administator/post',function(){
  return view('admin.manage_post');
});
Route::get('/administator/post/create',function(){
  return view('admin.create_content');
});
Route::get('/administator/login',function(){
  return view('admin.adminlogin');
});
Route::get('/administator/register',function(){
  return view('admin.regist_admin');
});
