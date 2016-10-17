<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Like;
use App\Post;
use App\PostPhoto;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
class PostController extends Controller
{
    public function postStatus(Request $req)
    {
      $post = new Post();
      $post->user_id =Auth::user()->id;
      $post->post_message = $req['post_message'];
      $post->section = 'posts';
      $post->on_id = Auth::user()->id;
      if($req->hasFile('uploadImage')){
        $image = $req->file('uploadImage');
        $filename = time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(public_path().'/img/uploads/posts/'.$filename);
        $post->image = $filename;
        $post->save();
      }
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
      $commentbox = DB::table('comments')->join('accounts','comments.user_id','=','accounts.id')
            ->join('profiles','accounts.profile_id','=','profiles.id')->select('accounts.id','accounts.first_name','accounts.last_name','profiles.avatar','comments.*')
            ->where('post_id',$pid)->orderBy('created_at', 'desc')->first();
      return '<div class="collapsible-body nonborder" style="display: block;">
          <ul class="col s12 collection cmt-box">
          <li class="transper collection-item avatar">
          <a href="/friend/'.$commentbox->id.'"><img src="img/uploads/avatars/'.$commentbox->avatar.'" alt="" class="circle">
              <span class="title title-name">'.$commentbox->first_name.' '.$commentbox->last_name.'</span></a>
              <p id="datecomment">'.$commentbox->created_at.'</p>
              <p class="space-cmt">'.$commentbox->message.'<br></p>
          </li>
      </ul>
      </div>';

    }
    public function postFriendStatus(Request $req,$fid)
    {
      $post= new Post();
      $post->user_id = Auth::user()->id;
      $post->post_message = $req->post_message;
      $post->section ='posts';
      $post->on_id = $fid;
      if($req->hasfile('uploadImage')){
        $image = $req->file('uploadImage');
        $filename = time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(public_path().'/img/uploads/posts/'.$filename);
        $post->image = $filename;
        $post->save();
      }
      $post->save();
      return back();


    }
    public function likePost(Request $req,$pid){
      $like = new Like();
      $user = Auth::user()->id;
      $like->liked_by = $user;
      $like->post_id = $pid;
      $like->save();
      return back();
    }
    public function unlikePost($lid){
      $liked = Like::find($lid);
      $liked->delete();
      return back();

    }

    public function deletePost($pid)
    {
      $post = Post::find($pid);
      $post->delete();
      return back();
    }
    public function editPost(Request $req,$pid){
      $post = Post::find($pid);
      $post->post_message =$req->post_message;
      $post->save();
      return redirect()->back();
    }

    public function delPicPost(Request $req,$pid)
    {
      $picpost=Post::find($pid);
      $picpost->image='NULL';
      $picpost->save();
      return redirect()->back();
    }
    public function postEventBoard(Request $req,$eid)
    {

    }

}
