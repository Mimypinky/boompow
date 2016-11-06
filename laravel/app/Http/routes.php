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
Route::get('/search','HomeController@search');
Route::get('/','HomeController@index');
Route::get('/content/{category_title}', 'HomeController@showContent');
Route::get('/content/{category_title}/{topic}','HomeController@getTopic');
Route::get('/fav/{cid}','FavouriteController@addFav');
Route::get('/unfav/{cid}','FavouriteController@deleteFav');
Route::get('/content',[ 'as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/event',[ 'as' => 'event', 'uses' => 'EventController@index']);
//Route::resource('event','EventController');
Route::post('/event/create', 'EventController@store');
Route::get('/event/remove/{eid}','EventController@deleteEvents');
Route::get('/event/join/{eid}','EventController@joinEvents');
Route::get('/event/cancel/{eid}','EventController@cancelEvents');
Route::get('/event/board/{eid}','EventController@eventBoardindex');
Route::post('/event/board/{eid}','PostController@postEventBoard');
Route::post('/event/board/{eid}/comment/{pid}','PostController@commentsPostEvent');
Route::get('/event/board/{eid}/like/{pid}','PostController@likePostEvent');
Route::get('/event/board/{eid}/unlike/{lid}','PostController@unlikePostEvent');
Route::get('/event/board/{eid}/post/delete/{pid}','PostController@deletePostEvent');
Route::get('/event/board/{eid}/comment/delete/{cid}','PostController@deleteComEvent');

Route::get('/favourite','FavouriteController@index');
Route::get('/favourite/remove/{cid}','FavouriteController@deleteFav');

Route::auth();
Route::get('/register/step2',function(){
    $title ='Register';
    return view('auth/register_p2',compact('title'));
});
Route::resource('/register','Profile\AuthController',array('before' => 'csrf'),[ 'except' => ['destroy','edit']]);
Route::get('/checkAvailableUsername','Profile\AuthController@checkAvailableUsername');
Route::get('/checkUsername','Profile\AuthController@checkUsername');
Route::get('/findQuesPass','Profile\AuthController@findQuesPass');
Route::get('/checkEmail','Profile\AuthController@checkEmail');
Route::post('/sendPassword','Profile\AuthController@sendPassword');
Route::group(['middleware' => ['web']], function (){
  Route::post('/handleLogin',[ 'as' => 'handleLogin', 'uses' => 'Profile\AuthController@handleLogin']);
  Route::get('login',[ 'as' => 'login', 'uses' => 'Profile\AuthController@loginForm']);
  Route::get('logout',['as' => 'logout', 'uses' => 'Profile\AuthController@logout']);
});

Route::get('/forget2',function(){
    $title ='Boompow - ลืมรหัสผ่าน';
    return view('auth.forget2',compact('title'));
});
Route::get('/newsfeed','Profile\ProfileController@newsfeed');

Route::post('/newsfeed','PostController@poststatus');

Route::get('/profile',[ 'as' => 'profile', 'uses' => 'Profile\ProfileController@index']);
Route::post('/profile','Profile\ProfileController@UpdateAvatar');
Route::post('/post','PostController@postStatus');
Route::post('/postfriend/{fid}','PostController@postFriendStatus');
Route::post('/comment/{pid}','PostController@comments');
<<<<<<< HEAD
=======
<<<<<<< HEAD
Route::post('/like/{pid}','PostController@likePost');
Route::post('/unlike/{pid}','PostController@unlikePost');
=======
>>>>>>> 3a3d104001d5d6572351ffd173bdd7ba3b131a63

Route::get('/comment/delete/{cid}','PostController@deleteComment');
Route::get('/like/{pid}','PostController@likePost');
Route::get('/unlike/{lid}','PostController@unlikePost');

<<<<<<< HEAD
=======
>>>>>>> 75bd266a6b4c3ac05b16e183e03593fcb80fd469
>>>>>>> 3a3d104001d5d6572351ffd173bdd7ba3b131a63
Route::get('/delete/{pid}','PostController@deletePost');
Route::get('/post/{pid}/edit','PostController@editPost');
Route::get('/delPic/{pid}','PostController@delPicPost');
Route::post('/pin/{cid}','PostController@pinPost');

Route::post('/pending' , 'FriendController@sendFriendRequest');
Route::get('/profile-friend',function(){
  $title ='Boompow - Friend profile';
  return view('social.profile-friend',compact('title'));
});
Route::get('/friend/{username}' ,'FriendController@viewFriend');

Route::get('/friends','FriendController@showFriendlist');
Route::get('/post/{id}','PostController@showPost');


Route::get('/chat',function(){
  $title ='Boompow - Chatbox';
  return view('social.mockup_chat',compact('title'));
});
route::get('chatHistory/{accid}','ChatController@chatRoom');
Route::get('/message_box','ChatController@index');

Route::get('/notification','NotificationController@index');
Route::get('/post/{pid}','NotificationController@viewPost');
Route::get('/friendNotification' , 'FriendController@viewFriendRequest');
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
Route::get('/administator/content','Admin\AdminController@showContent');
Route::get('/administator/user','Admin\AdminController@showUsers');
Route::get('/administator/content/create','Admin\AdminController@create');
Route::post('/administator/content/create','Admin\AdminController@store');
Route::get('/administator/content/edit/{id}','Admin\AdminController@edit');
Route::post('administator/content/update/{id}','Admin\AdminController@update');
Route::get('/administator/content/delete/{id}','Admin\AdminController@deleteContent');
Route::get('/administator/event','Admin\AdminController@showEvent');
Route::get('/administator/user/ban/{id}','Admin\AdminController@banUser');
Route::get('/administator/login',function(){
  return view('admin.adminlogin');
});
Route::get('/administator/register',function(){
  return view('admin.regist_admin');
});
