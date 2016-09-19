<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Account;
use App\Friends;
use Auth;
use App\Post;
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

        return  redirect()->intended('friend/'.$fid);
}

  public function viewFriendRequest(){
    //$pending = Friend::where('to_user_id' , Auth::user()->id->get();

    if(Auth::check()){
      $accounts = DB::table('friends')
              ->join('accounts', 'accounts.id', '=', 'friends.from_user_id')
              ->where('to_user_id' , Auth::user()->id)
              ->where('status' , 'pending')
              ->select('accounts.username' , 'friends.id')->get();

      return view('social.noti')->with('accounts' , $accounts);
    }else{
      echo 'Please login ..';
      return redirect()->intended('/');
    }


  }
  public function acceptFriend(Request $req){
    /*if(Auth::check()){
      $id = $req->input('rid');
      $fr = Friends::find($id);
      $fr->status = 'accepted';
      $fr->save();
      return redirect()->intended('FriendReq');
    }else {
      echo 'Please login ..';
      return redirect()->intended('/');
<<<<<<< HEAD
    }*/
    if(Auth::check()){
        $user = Auth::user()->id;
        $title='Friend Request';
        $status = 'pending';
        $accounts = DB::table('friends')
                ->join('accounts', 'accounts.id', '=', 'friends.to_user_id')
                ->where([['action_user_id',$user],['status','pending']])
                ->select('accounts.*' , 'friends.to_user_id')->get();
            //  dd($accounts);
        return view('social.noti',compact('accounts','user','title'));
      }else {
        echo 'Please login ..';
        return redirect()->intended('/');
      }
}

/*public function acceptFriend(Request $req){
  $id = $req->input('rid');
=======
    }
=======
    $user = Auth::user()->id;
    $title='Friend Request';
    $status = 'pending';
    $accounts = DB::table('friends')
            ->join('accounts', 'accounts.id', '=', 'friends.from_user_id')
            ->where([['to_user_id',$user],['status','pending']])
            ->select('accounts.*' , 'friends.from_user_id')->get();

    return view('social.noti',compact('accounts','user','title'));
  }

public function acceptFriend($rid){

>>>>>>> c2f5e503d97a1803b6b260c420661a44208e3189
  $user=Auth::user()->id;
  $fr = Friends::where([['from_user_id',$user],['to_user_id',$rid]]);
  $fr->status = 'accepted';
  //dd($fr);
  $fr->save();
  return redirect('social.noti');


}*/
public function cancelRequest(Request $req){
  $id = $req->input('aid');
  $user=Auth::user()->id;
  $friend = Friends::find($id);
  $friend = Friends::where([
        ['from_user_id', '=', $user],
        ['to_user_id', '=', $id]])->delete();

  return redirect()->intended('FriendReq');

  }

    public function viewFriend($fid){

      $account = Account::find($fid);
      $title = $account->first_name.'  '.$account->last_name;
      $myId = Auth::user()->id;
      $isFriend1 = Friends::where('from_user_id' , $myId)
      ->where('to_user_id' , $fid)->where('status' , 'accepted')->count();
      $isFriend2 = Friends::where('from_user_id' , $fid)
      ->where('to_user_id' , $myId)->where('status' , 'accepted')->count();
      $status = Friends::select('status')->where([['from_user_id','=',$fid],['to_user_id','=',$myId]])->first();

      echo $isFriend1;
      echo $isFriend2;


      if($isFriend1 == 0 && $isFriend2 == 0){


        return view('social.profile-friend')->with('title' , $title)
        ->with('account' , $account)->with('msg' , 'This profile has been hidden')->with('status',$status);


      }else{
        $post = Post::where('user_id' , $fid)->get();
        return view('social.profile-friend')->with('title' , $title)->with('account' , $account)->with('post' , $post);

      }




    }
}
