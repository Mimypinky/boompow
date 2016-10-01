<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Account;
use App\Profile;
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
          $info = DB::table('profiles')->select('*')->where('id','=',$currentId)->first();
          $title = Auth::user()->username.' \'s Profile';
          $user = Auth::user();
          return view('social.myprofile',compact('title','info','currentId','user'));
      }
      else {
        echo 'Please login ..';
        return redirect()->intended('/');
      }
    }
    public function UpdateAvatar(Request $req)
    {
      if($req->hasFile('avatar')){
        $avatar = $req ->file('avatar');
        $filename = time(). '.'. $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(210,210)->save(public_path('img/uploads/avatars/'.$filename));
        $id = Auth::user()->profile_id;
        $info = Profile::where('id',$id)->first();
        $info->avatar = $filename;
        $info->save();
      }
      return view('social.myprofile',compact('title','bio','currentId'));
    }

}
