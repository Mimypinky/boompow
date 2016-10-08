<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Like;
use App\Post;
use App\PostPhoto;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function postStatus(Request $req)
    {
      $post = new Post();
      $post->user_id =Auth::user()->id;
      $post->post_message = $req['post_message'];
      $post->section = 'posts';
      $image = $req->file('files');
      $filename = time().'.'.$image->getClientOriginalExtension();
      Image::make($image)->save(public_path().'/img/uploads/posts/'.$filename);
      $post->image = $filename;
      $post->save();
      return back();

    }
    public function comments(Request $req,$pid){
      $uid =Auth::user()->id;
      $comment= new Comment();
      $comment->user_id =$uid;
      $comment->message =$req['comment_message'];
      $comment->post_id = $pid;
      $comment->save();
      return back();
    }
    public function postFriendStatus(Request $req,$fid)
    {
      $post= new Post();
      $post->user_id = Auth::user()->id;
      $post->post_message = $req['post_message'];
      $post->section ='posts';
      if($req->hasfile('uploadImage')){


      }
    }
}
