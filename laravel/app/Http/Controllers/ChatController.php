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
//$friendId1 = Friends::all();
    $friendId1 = Friends::where('from_user_id', $userid)->where('status', 'accepted')->get();
    $friendId2 = Friends::where('to_user_id' , Auth::user()->id)->where('status', 'accepted')->get();
    $account1 = Friends::join('accounts' , 'accounts.id' , '=' ,'from_user_id' )->where('to_user_id', $userid)->where('status', 'accepted')->get();

    $account2 = Friends::join('accounts' , 'accounts.id' , '=' ,'to_user_id' )->where('from_user_id', $userid)->where('status', 'accepted')->get();
//      dd($friendId1);
  //dd($account1);
    //  dd($friendId1);


  //  $friendList = Friend::join()

      $title = 'ข้อความ';
      return view('social.chat',compact('title', 'account1' , 'account2'));
    }

    public function testChat($fid){
      $title = 'สนทนา';
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

    public function sendMessage(Request $request)
    {
        $username = Auth::user()->username;
        $text = $request->input('text');
        $fid = 26;
//$text = Input::get('text');

        $chatMessage = new Chat();
        $chatMessage->sender_id = Auth::user()->id;
        $chatMessage->message = $text;
        $chatMessage->fid = $fid;
        $chatMessage->save();
    }


    public function retrieveChatMessages()
    {
        $username = Auth::user()->username;
        $sender_id = Auth::user()->id;

        $message = ChatMessage::where('sender_id', '!=', $sender_id)->where('read', '=', false)->first();

        if (count($message) > 0)
        {
            $message->read = true;
            $message->save();
            return $message->message;
        }
    }


}
