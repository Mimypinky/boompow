<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Input;
use App\Chat;

class ChatController extends Controller
{
    //
    public function index(){
      $title = 'ข้อความ';
      return view('social.chat',compact('title'));
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
