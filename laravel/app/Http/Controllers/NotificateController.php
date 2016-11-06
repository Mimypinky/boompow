<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use Auth;
use App\Account;
use App\Post;
use DB;
use Carbon\Carbon;
class NotificateController extends Controller
{
    //

    public function index(){

      if(Auth::check()){
        $title = 'แจ้งเตือน';
        Carbon::setLocale('th');
        $friendReqNoti = DB::table('friends')
                ->join('accounts', 'accounts.id', '=', 'friends.from_user_id')
                ->join('profiles','profiles.id','=','accounts.profile_id')
                ->where('to_user_id' , Auth::user()->id)
                ->where('status' , 'pending')
                ->select('accounts.*' , 'friends.*','profiles.avatar')->get();

        $commentNoti = Comment::join('posts' , 'posts.id' , '=' , 'comments.post_id')
         ->join('accounts' ,'accounts.id' , '=' , 'comments.user_id')
         ->join('profiles','profiles.id','=','accounts.profile_id')
         ->select('comments.user_id','accounts.first_name','accounts.last_name','comments.updated_at','comments.post_id','profiles.avatar')
         ->where('posts.user_id', Auth::user()->id)
         ->whereNotIn('comments.user_id' , [Auth::user()->id])
         ->orderBy('comments.updated_at','desc')->get();
        //  foreach ($commentNoti as $key => $timeValue) {
        //    $time = $timeValue->updated_at;
        //    $formattedTime = Carbon::parse($time)->diffForHumans();
        //  }
         return view('social.noti',compact('title','commentNoti','friendReqNoti'));

      }else{
        echo 'หน้านี้ไม่สามารถเข้าถึงได้ กรุณาเข้าสู่ระบบ ..';
        return redirect()->intended('/');
      }



    }

    public function viewPost(Request $request,$pid){
      return $pid;
    }
}
