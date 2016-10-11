<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Account;
use App\Profile;
use App\Post;
use App\Like;
use App\Friend;
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
        Image::make($avatar)->resize(210,null)->save(public_path().'/img/uploads/avatars/'.$filename);
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

      return view('social.newsfeed',compact('info','user','title','posts'));

    }


}
