<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Input;
use App\Chat;
use App\Account;
use App\Friends;
use DB;
class ChatController extends Controller
{
    //
    public function index(){
      $userid =  Auth::user()->id;
    $friendId1 = Friends::where('from_user_id', $userid)->where('status', 'accepted')->get();
    $friendId2 = Friends::where('to_user_id' , Auth::user()->id)->where('status', 'accepted')->get();
    $account1 = Friends::join('accounts' , 'accounts.id' , '=' ,'from_user_id' )->where('to_user_id', $userid)->where('status', 'accepted')->get();

    $account2 = Friends::join('accounts' , 'accounts.id' , '=' ,'to_user_id' )->where('from_user_id', $userid)->where('status', 'accepted')->get();

      $title = 'ข้อความ';
      return view('social.chat',compact('title', 'account1' , 'account2'));
    }

<<<<<<< HEAD
    public function chatRoom($fid){
      $title = 'ห้องแชทของ';
=======
    public function testChat($fid){
      $title = 'สนทนา';
>>>>>>> 80bac48b41892f61c5787009b2ac92898eaf6ec0
      $friendAccount = Account::find($fid);
      $myAccount = Account::find(Auth::user()->id);
      $userid =  Auth::user()->id;
//$friendId1 = Friends::all();
    $friendId1 = Friends::where('from_user_id', $userid)->where('status', 'accepted')->get();
    $friendId2 = Friends::where('to_user_id' , Auth::user()->id)->where('status', 'accepted')->get();
    $account1 = Friends::join('accounts' , 'accounts.id' , '=' ,'from_user_id' )->where('to_user_id', $userid)->where('status', 'accepted')->get();;

    $account2 = Friends::join('accounts' , 'accounts.id' , '=' ,'to_user_id' )->where('from_user_id', $userid)->where('status', 'accepted')->get();;
      return view('social.chat0',compact('friendAccount' , 'myAccount','title' , 'account1' , 'account2'));
    }


}
