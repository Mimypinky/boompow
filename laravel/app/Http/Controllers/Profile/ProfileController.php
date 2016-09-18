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

class ProfileController extends Controller
{
    //
    public function index(){
      if(Auth::check()){
          $currentId = Auth::user()->profile_id;
          $bio = DB::table('profiles')->select('bio')->where('id','=',$currentId)->first();
          $title = Auth::user()->username.' \'s Profile';
          return view('social.myprofile',compact('title','bio','currentId'));
      }
      else {
        echo 'Please login ..';
        return redirect()->intended('/');
      }
    }
}
