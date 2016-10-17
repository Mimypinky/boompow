<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Account;
use App\Friends;
use Auth;
use App\Post;
use App\Profile;
use DB;
class FriendController extends Controller
{
    //

public function sendFriendRequest(Request $req){
          $fid = $req->input('aid');
          $myId = Auth::user()->id;
          $friendRequest = Friends::create(
          array(
            'from_user_id' => $myId ,
            'to_user_id' => $fid ,
            'status' => 'pending' ,
            'action_user_id'=> $myId

          )
        );
        $frId = Account::find($fid);
        return  redirect()->intended('friend/'.$frId->username);
}

  public function viewFriendRequest(){
    //$pending = Friend::where('to_user_id' , Auth::user()->id->get();

    $title = 'Friends Request';

    if(Auth::check()){
      $accounts = DB::table('friends')
              ->join('accounts', 'accounts.id', '=', 'friends.from_user_id')
              ->where('to_user_id' , Auth::user()->id)
              ->where('status' , 'pending')
              ->select('accounts.*' , 'friends.*')->get();


      return view('social.noti')->with('accounts' , $accounts)->with('title',$title);

    }else{
      echo 'Please login ..';
      return redirect()->intended('/');
    }


  }
    public function acceptFriend(Request $req){
      if(Auth::check()){
        $id = $req->input('rid');
        $fr = Friends::find($id);
        $fr->status = 'accepted';
        $fr->save();
        return redirect()->intended('social.noti');
      }else {
        echo 'Please login ..';
        return redirect()->intended('/');

      if(Auth::check()){
          $user = Auth::user()->id;
          $title='Friend Request';
          $status = 'pending';
          $accounts = DB::table('friends')
                  ->join('accounts', 'accounts.id', '=', 'friends.to_user_id')
                  ->where([['action_user_id',$user],['status','pending']])
                  ->select('accounts.*' , 'friends.*')->get();
              //  dd($accounts);
          return view('social.noti',compact('accounts','user','title'));
        }else {
          echo 'Please login ..';
          return redirect()->intended('/');
        }
      }
  }



      public function cancelRequest(Request $req){
        $id = $req->input('aid');
        $user=Auth::user()->id;
        $friend = Friends::find($id);
        $friend = Friends::where([
              ['from_user_id', '=', $user],
              ['to_user_id', '=', $id]])->delete();

        return redirect()->intended('FriendReq');
      }

public function delPending($username){
  $id = Account::where('username' , $username)->first();
  $fid =  $id->id;
  $account = Account::find($fid);
  $title = $account->first_name.'  '.$account->last_name;
  $myId = Auth::user()->id;
  $d1 = Friends::where('from_user_id' , $myId)
  ->where('to_user_id' , $fid)->where('status' , 'pending')->delete();
   $d2 = Friends::where('from_user_id' , $fid)
  ->where('to_user_id' , $myId)->where('status' , 'pending')->delete();
  return redirect()->intended('friend/'.$username);
}

    public function viewFriend($username){
      $id = Account::where('username' , $username)->first();
      $fid = $id->id;
      $account = Account::find($fid);
      $title = $account->first_name.'  '.$account->last_name;
      $myId = Auth::user()->id;
      $isFriend1 = Friends::where([['from_user_id' ,'=', $myId],['to_user_id' , '=',$fid],['status','=','accepted']])->count();
      $isFriend2 = Friends::where([['from_user_id' ,'=', $fid],['to_user_id','=' , $myId],['status' , 'accepted']])->count();
      $status = Friends::select('status')->where([['from_user_id','=',$fid],['to_user_id','=',$myId]])->first();

      $currentId = Auth::user()->profile_id;
      $f_pro_id = Account::find($fid)->profile_id;
      $id = Auth::user()->id;
      $info = DB::table('profiles')->select('*')->where('id','=',$currentId)->first();
      $f_info = DB::table('profiles')->select('*')->where('id','=',$f_pro_id)->first();
      $is_f = $isFriend1 + $isFriend2;
      // dd($f_info);
     if($is_f == 0){
       //ยังไม่ได้เป็นเพื่อนกัน?
        $isPending1 = Friends::where('from_user_id' , $myId)
        ->where('to_user_id' , $fid)->where('status' , 'pending')->count();
        $isPending2 = Friends::where('from_user_id' , $fid)
        ->where('to_user_id' , $myId)->where('status' , 'pending')->count();
        $pending = $isPending1+$isPending2;
            if($pending==0)
            {
              $friend_status ='pending';
              return view('social.profile-friend')->with('title' , $title)
                ->with('account' , $account)->with('msg' , 'This profile has been hidden')->with('status',$status)->with('f_info',$f_info)->with('friend_status',$friend_status);
            }elseif($pending==1||$pending)
            {
              $friend_status ='notfriend';
                return view('social.profile-friend')->with('title' , $title)
                  ->with('account' , $account)->with('msg' , 'This profile has been hidden')->with('status',$status)->with('f_info',$f_info)->with('friend_status',$friend_status);
            }
      }elseif($is_f == 1||$is_f ==2)
      {
        $friend_status ='friend';
        $posts = Post::join('accounts','posts.user_id','=','accounts.id')
        ->join('profiles','accounts.profile_id','=','profiles.id')
        ->select('accounts.id','accounts.first_name','accounts.last_name','profiles.avatar','posts.*')->where('on_id','=',$fid)
        ->orderBy('created_at', 'desc')
        ->get();

        return view('social.profile-friend')->with('title' , $title)->with('account' , $account)->with('posts' , $posts)->with('info',$info)->with('f_info',$f_info)
        ->with('friend_status',$friend_status);
      }
    }

    public function showFriendlist(Request $req)
    {
      $fname= Auth::user()->first_name;
      $lname = Auth::user()->last_name;

      $id=Auth::user()->id;
      $title = $fname.' '.$lname;
      $friend1 = DB::table('friends')->select('to_user_id as id')->where([['from_user_id','=',$id],['status','=','accepted']]);
      $allfriend = DB::table('friends')->select('from_user_id as id')->where([['to_user_id','=',$id],['status','=','accepted']])->union($friend1)->get();
      $myfriend = array();
      $account = Account::join('profiles','profiles.id','=','accounts.profile_id')
      ->select('accounts.username','accounts.first_name','accounts.last_name','profiles.avatar','accounts.id')
      ->get();
      foreach($allfriend as $friend){
        array_push($myfriend,$friend->id);
      }
      return view('social.friend',compact('myfriend','title','account'));

    }
}
