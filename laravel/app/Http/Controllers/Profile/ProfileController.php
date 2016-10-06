<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Account;
use App\Profile;
use App\Post;
use App\Like;
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
          $posts = Post::select('*')->where('user_id',$id)->get();

          // dd($user);
          return view('social.myprofile',compact('title','info','currentId','user','posts'));
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
      $info->first_name = $req['first_name'];
      $info->last_name = $req['last_name'];
      $profile_id = Auth::user()->profile_id;
      $info_bio = Profile::find($profile_id);
      $info_bio->bio = $req['bio'];
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

}
