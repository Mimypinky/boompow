<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;
use App\Comment;
use App\Post;

class NotificationController extends Controller
{
    //

    public function index(){
      if(Auth::check()){
        $title = 'แจ้งเตือน';
        $friendReqNoti = DB::table('friends')
                ->join('accounts', 'accounts.id', '=', 'friends.from_user_id')
                ->join('profiles','profiles.id','=','accounts.profile_id')
                ->where('to_user_id' , Auth::user()->id)
                ->where('status' , 'pending')
                ->select('accounts.*' , 'friends.*','profiles.avatar','friends.created_at')->get();

        $ownPostNoti = DB::table('notifications')
                ->join('accounts','accounts.id', '=' ,'notifications.user_id')
                ->join('profiles','profiles.id','=','accounts.profile_id')
                ->join('posts','posts.id','=','notifications.post_id')
                ->join('comments','posts.id','=','comments.post_id')
                ->select('notifications.description','notifications.created_at','notifications.post_id','profiles.avatar')
                ->whereNotIn('notifications.user_id', [Auth::user()->id])
                ->where('posts.user_id','=',Auth::user()->id)
                ->where('notifications.owner_read','=','1')
                ->orderBy('notifications.created_at','desc')
                ->distinct()->get();

        $otherPostNoti = DB::table('notifications')
                ->join('accounts','accounts.id', '=' ,'notifications.user_id')
                ->join('profiles','profiles.id','=','accounts.profile_id')
                ->join('posts','posts.id','=','notifications.post_id')
                ->join('comments','posts.id','=','comments.post_id')
                ->select('notifications.description','notifications.created_at','notifications.post_id','profiles.avatar')
                ->whereNotIn('notifications.user_id', [Auth::user()->id])
                ->whereNotIn('comments.user_id',[Auth::user()->id])
                ->whereNotIn('posts.user_id', [Auth::user()->id])
                ->where('notifications.noti_type_id','<>',2)
                ->orderBy('notifications.created_at','desc')
                ->distinct()->get();

        return view('social.noti',compact('title','friendReqNoti','ownPostNoti','otherPostNoti'));
      }

    else{
      echo 'กรุณาเข้าสู่ระบบ..';
      return redirect()->intended('/');
    }

    }

    public function viewPost(Request $pid){
      echo $pid;
    }


}
