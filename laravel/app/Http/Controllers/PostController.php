<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Like;
use App\Post;
use App\PostPhoto;
use App\Comment;
use App\Notification;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use App\EventPosts;
use App\EventPostComm;
use App\EventLike;
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

      $uid = Auth::user()->id;
      $comment= new Comment();
      $comment->user_id =$uid;
      $comment->message =$req['comment_message'];
      $comment->post_id = $pid;
      $comment->save();

      $commentFrom = DB::table('comments')->join('posts','comments.post_id', '=' , 'posts.id')
      ->join('accounts','posts.user_id', '=' ,'accounts.id')
      ->select('accounts.first_name','accounts.last_name')->where('comments.post_id', $pid)->first();

      $commentTo = DB::table('comments')->join('posts','comments.post_id', '=' , 'posts.id')
      ->join('accounts','comments.user_id', '=' ,'accounts.id')
      ->select('accounts.first_name','accounts.last_name','accounts.id')->where('comments.user_id', $uid)->first();

      $commentNoti = new Notification();
      $commentNoti->noti_type_id = 1;
      $commentNoti->user_id = $uid;
      $commentNoti->post_id = $pid;
      $commentNoti->description = $commentTo->first_name.' ได้แสดงความคิดเห็นบนสถานะของ '.$commentFrom->first_name;
      $commentNoti->save();

      $commentbox = DB::table('comments')->join('accounts','comments.user_id','=','accounts.id')
            ->join('profiles','accounts.profile_id','=','profiles.id')->select('accounts.id','accounts.username','accounts.first_name','accounts.last_name','profiles.avatar','comments.*')
            ->where('post_id',$pid)->orderBy('created_at', 'desc')->first();

      return '<div class="collapsible-body nonborder" style="display: block;">
          <ul class="col s12 collection cmt-box">
          <li class="transper collection-item avatar">
          <a href="/friend/'.$commentbox->username.'"><img src="img/uploads/avatars/'.$commentbox->avatar.'" alt="" class="circle">
              <span class="title title-name">'.$commentbox->first_name.' '.$commentbox->last_name.'</span></a>
              <p class="time-of-comment" id="datecomment">'.$commentbox->created_at.'</p>
              <p class="space-cmt">'.$commentbox->message.'<br></p>
          </li>
      </ul>
      </div>';

    }
    public function deleteComment($cid)
    {

      $comment = Comment::find($cid);
      $comment->delete();
      return back();
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
<<<<<<< HEAD

      $likeFrom = DB::table('likes')->join('posts','likes.post_id', '=' , 'posts.id')
      ->join('accounts','posts.user_id', '=' ,'accounts.id')
      ->select('accounts.first_name','accounts.last_name')->where('likes.post_id', $pid)->first();

      $likeTo = DB::table('likes')->join('posts','likes.post_id', '=' , 'posts.id')
      ->join('accounts','likes.liked_by', '=' ,'accounts.id')
      ->select('accounts.first_name','accounts.last_name','accounts.id')->where('likes.liked_by', $user)->first();

      $likeNoti = new Notification();
      $likeNoti->noti_type_id = 2;
      $likeNoti->user_id = $user;
      $likeNoti->post_id = $pid;
      $likeNoti->description = $likeTo->first_name.' กดไลค์สถานะของคุณ';
      $likeNoti->save();

=======
>>>>>>> 75bd266a6b4c3ac05b16e183e03593fcb80fd469
      $count = DB::table('likes')->select('id')->where('post_id',$pid)->count();
      $likes = DB::table('likes')->join('accounts','likes.liked_by','=','accounts.id')->join('profiles','accounts.profile_id','=','profiles.id')->where('post_id',$pid)
      ->select('likes.*','accounts.first_name','accounts.last_name','accounts.id','profiles.avatar','accounts.username')
      ->orderBy('created_at', 'desc')->first();
      $wholiked = '<a class="tooltipped" id="userLiked" data-position="bottom" data-delay="50" data-tooltip="'.$likes->first_name.' '.$likes->last_name.'" href="/friend/'.$likes->username.'"> <img  id="mypost4" class="pic-wholike " src="img/uploads/avatars/'.$likes->avatar.'"/> </a>';
      $json = '{ "count" : "'.$count.'",
                 "html" : "'.str_replace('"', "'", $wholiked).'"
      }';
      return $json;
      // return response()->json([$count,$wholiked]);
    }
    public function unlikePost(Request $req,$pid){
      $liked_by = Auth::user()->id;
      $post_id = $pid;
      $lid = Like::select('id')->where([['liked_by',$liked_by],['post_id',$post_id]])->delete();
      $count = DB::table('likes')->select('id')->where('post_id',$pid)->count();
      return $count;

    }

    public function deletePost($pid)
    {
      $post = Post::find($pid);
      $post->delete();
      $comment = Comment::where('post_id',$pid)->delete();
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
      $picpost->delete();
      $comment = Comment::where('post_id',$pid)->delete();
      return redirect()->back();
    }
    public function postEventBoard(Request $req,$eid)
    {
      $post = new EventPosts();
      $post->event_id = $eid;
      $post->message = $req->message;
      $post->user_id = Auth::user()->id;
      if($req->hasfile('uploadImage')){
        $image = $req->file('uploadImage');
        $filename = time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(public_path().'/img/uploads/events/'.$filename);
        $post->image = $filename;
        $post->save();
      }
      $post->save();
    return redirect()->back();
    }
    public function commentsPostEvent(Request $req,$pid){


      $uid = Auth::user()->id;
      $comment= new EventPostComm();

      $comment->user_id = $uid;
      $comment->message = $req['comment_message'];
      $comment->event_post_id = $pid;
      $comment->save();
  return back();


      // $uid = Auth::user()->id;
      // $comment= new EventPostComm();
      // $comment->user_id = $uid;
      // $comment->message = $req['comment_message'];
      // $comment->event_post_id = $pid;
      // $comment->save();
      // $commentbox = DB::table('event_board_comment')->join('accounts','event_board_comment.user_id','=','accounts.id')
      //               ->join('profiles','accounts.profile_id','=','profiles.id')->select('accounts.id','accounts.username','accounts.first_name','accounts.last_name','profiles.avatar','event_board_comment.*')
      //               ->where('event_post_id','=',$pid)->orderBy('created_at', 'desc')->first();
                    // return back();
      // return '<div class="collapsible-body">
      //     <ul class="col s12 collection cmt-box">
      //     <li class="transper collection-item avatar">
      //     <a href="/friend/'.$commentbox->username.'"><img src="img/uploads/avatars/'.$commentbox->avatar.'" alt="" class="circle">
      //     <span class="title title-name">'.$commentbox->first_name.' '.$commentbox->last_name.'</span></a>
      //     <p id="datecomment">'.$commentbox->created_at.'</p>
      //     <p class="space-cmt">'.$commentbox->message.'<br></p>
      // </li>
      // </ul>
      // </div>';

    }
    public function deletePostEvent($eid,$pid)
    {
      dd($pid);
      $post = EventPost::find($pid);
      $post->delete();
      return back();
    }
    public function deleteComEvent($eid,$cid)
    {
      dd($cid);
      $comment = EventPostComm::find($pid);
      $comment->delete();
      return back();
    }
    public function likePostEvent($eid,$pid)
    {
      $like = new EventLike();
      $user = Auth::user()->id;
      $like->user_id = $user;
      $like->event_post_id = $pid;
      $like->save();
      return redirect()->back();
    }
    public function unlikePostEvent($eid,$lid){
      $liked = EventLike::find($lid);
      $liked->delete();
      return back();

    }
    public function pinPost(Request $req,$cid)
    {

      $post = new Post();
      $uid= Auth::user()->id;
      $post->user_id = $uid;
      $post->post_message = $req->message;
      $post->content_id= $cid;
      $post->section = 'contents';
      $post->on_id=$uid;
      $post->save();
      return redirect('/profile');
    }
    public function showPost($id)
    {


      $title='Boompow';
      $posts = Post::join('accounts','posts.user_id','=','accounts.id')
      ->join('profiles','accounts.profile_id','=','profiles.id')
      ->select('accounts.id','accounts.first_name','accounts.last_name','profiles.avatar','posts.*','accounts.username')
      ->where('posts.id','=',$id)
      ->first();

      // dd($posts);
      return view('social.post',compact('posts','title'));

    }

}
