<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Account;
use App\Profile;
use App\Post;
use App\Like;
use App\Friends;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
use DB;
use Image;

class ProfileController extends Controller
{
    //
    public function index(){
      if(Auth::check()){
          $currentId = Auth::user()->profile_id;
          $id = Auth::user()->id;
          $info = DB::table('profiles')->select('*')->where('id','=',$currentId)->first();
          $title = Auth::user()->username.' \'s Profile';
          $user = Auth::user();
          $posts = Post::join('accounts','posts.user_id','=','accounts.id')
          ->join('profiles','accounts.profile_id','=','profiles.id')
          ->select('accounts.id','accounts.first_name','accounts.last_name','profiles.avatar','posts.*')->where('on_id','=',$id)
          ->orderBy('created_at', 'desc')
          ->get();
          $count_friend1 = DB::table('friends')
          ->select('to_user_id')->where([['from_user_id','=',$id],['status','=','accepted']])->count();
          $count_friend2 = DB::table('friends')
          ->select('from_user_id')->where([['to_user_id','=',$id],['status','=','accepted']])
          ->count();
          $sumfriend = $count_friend1+$count_friend2;
            $friend1 = DB::table('friends')->join('accounts','friends.to_user_id','=','accounts.id')
            ->join('profiles','accounts.profile_id','=','profiles.id')
            ->select('to_user_id','accounts.first_name','accounts.last_name','profiles.avatar','accounts.id','accounts.username')->where([['from_user_id','=',$id],['status','=','accepted']]);
          $allfriend = DB::table('friends')->join('accounts','friends.from_user_id','=','accounts.id')
          ->join('profiles','accounts.profile_id','=','profiles.id')
          ->select('from_user_id','accounts.first_name','accounts.last_name','profiles.avatar','accounts.id','accounts.username')->where([['to_user_id','=',$id],['status','=','accepted']])
          ->union($friend1)->get();
          $sumpost=Post::where('user_id','=',$id)->count();
          $sumpicpost=Post::where([['image','<>','NULL'],['user_id','=',$id]])->count();
          $pic_post=Post::select('*')->where([['image','<>','NULL'],['user_id','=',$id]])->get();
          // dd($sumpicpost);

          return view('social.myprofile',compact('title','info','currentId','user','posts','allfriend','sumfriend','sumpost','sumpicpost','pic_post'));
      }
      else {
        echo 'Please login ..';
        return redirect()->intended('/');
      }
    }
    public function UpdateAvatar(Request $req)
    {
      $id=Auth::user()->id;

      $info= Account::find($id);
      $info->first_name = $req->first_name;
      $info->last_name = $req->last_name;

      $profile_id = Auth::user()->profile_id;
      $info_bio = Profile::find($profile_id);
      $info_bio->bio = $req->bio;
      $info->save();

      if($req->hasFile('avatar')){
        $avatar = $req ->file('avatar');
        $filename = time(). '.'. $avatar->getClientOriginalExtension();
        Image::make($avatar)->save(public_path().'/img/uploads/avatars/'.$filename);
        $id = Auth::user()->profile_id;
        $image = Profile::find($id);
        $image->avatar = $filename;
        $image->save();
      }

      return redirect('/profile');
    }


    public function newsfeed(Request $req)
    {
      $user = Auth::user();
      $id = Auth::user()->id;
      $title = 'Newsfeed';
      $profile_id =Auth::user()->profile_id;
      $info = Profile::select('*')->where('id','=',$profile_id)->first();

      $friend1 = DB::table('friends')->select('to_user_id')->where([['from_user_id','=',$id],['status','=','accepted']]);
      $allfriend = DB::table('friends')->select('from_user_id')->where([['to_user_id','=',$id],['status','=','accepted']])->union($friend1)->get();

      $posts = Post::join('accounts','posts.user_id','=','accounts.id')
      ->join('profiles','accounts.profile_id','=','profiles.id')
      ->select('accounts.id','accounts.first_name','accounts.last_name','profiles.avatar','posts.*')->where('on_id','=',$id)
      ->orderBy('created_at', 'desc')
      ->get();
      // $friends_sql=mysql_query("SELECT b.to_user_id FROM (SELECT to_user_id FROM friends WHERE from_user_id = $id) a INNER JOIN (SELECT from_user_id FROM friends WHERE to_user_id = $id) b
      // ON a.friend_two = b.friend_two");
      //             while($friends=mysql_fetch_array($friends_sql))
      //             {
      //                  $getMutualFriendInfo = mysql_query("SELECT * FROM users WHERE uid='{$friends['friend_two']}'");
      //                   $MutualFriendInfo = mysql_fetch_array($getMutualFriendInfo);
      //                 }
      //           dd($MutualFriendInfo);

      // $i = $allfriend->toArray();
      // $ii = array();
      // foreach ($i as $key => $value) {
      //   array_push($ii,$value['accounts.id']);
      //   // dd($ii);
      // }


      return view('social.newsfeed',compact('info','user','title','posts'));

    }
    public function settingProfile(Request $req)
    {
      $id=Auth::user()->id;
      $title='ตั้งค่าข้อมูลส่วนตัว';
      $info = Account::join('profiles','accounts.profile_id','=','profiles.id')->where('accounts.id','=',$id)->first();
      return view('social.setting_profile',compact('info','title'));
    }
    public function updateInfo(Request $req)
    {
      $id=Auth::user()->id;
      $name = Account::find($id);
      $pro_id= Account::find($id)->profile_id;
      $pro = Profile::find($pro_id);
      $name->first_name = $req['first_name'];
      $name->last_name = $req['last_name'];
      $pro->bio = $req['bio'];
      if($req->hasFile('uploadImage')){
        $avatar = $req ->file('uploadImage');
        $filename = time(). '.'. $avatar->getClientOriginalExtension();
        Image::make($avatar)->save(public_path().'/img/uploads/avatars/'.$filename);
        $id = Auth::user()->profile_id;

        $pro->avatar = $filename;
        // dd($filename);
        $pro->save();
      }
      $name->save();
      $pro->save();

      return redirect('/profile');
    }


}
