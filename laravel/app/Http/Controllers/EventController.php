<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Event;
use App\Users;
use App\Account;
use App\Profile;
use App\EventPhotos;
use App\JoinEvent;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\EventPosts;
use Intervention\Image\ImageManagerStatic as Image;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::check()){
        $user =Auth::user()->id;
        $title = 'กิจกรรม';
        $event = Event::join('accounts', 'events.creator', '=', 'accounts.id')
            ->select('events.*', 'accounts.first_name as fname','accounts.last_name as lname')->orderBy('create_at', 'desc')
            ->paginate(7);

        $myEvent = Event::join('accounts', 'events.creator', '=', 'accounts.id')
            ->join('join_event', 'join_event.user_id', '=', 'accounts.id')
            ->select('events.*', 'accounts.first_name as fname','accounts.last_name as lname','accounts.username')
            ->where('creator','=',$user)->orderBy('create_at', 'desc')
            ->get();

            $mem = array();
            $eve = Event::join('accounts', 'events.creator', '=', 'accounts.id')
                ->select('events.*', 'accounts.first_name as fname','accounts.last_name as lname')->orderBy('create_at', 'desc')->get();
              foreach($eve as $e){
                $mem_join =DB::table('join_event')->where('eve_id','=',$e->id)->count();
                array_push($mem,$mem_join);
              }
              // return $mem;

        $joinEvent = JoinEvent::join('events','join_event.eve_id','=','events.id')
        ->join('accounts','events.creator','=','accounts.id')
        ->select('events.*','join_event.*', 'accounts.first_name as fname','accounts.last_name as lname')
        ->where('user_id','=',$user)->orderBy('join_time', 'desc')
        ->get();
          $ii = array();
        foreach ($joinEvent as $key => $value) {
          array_push($ii,$value->eve_id);
        }
        // $iii = array();

      //   foreach($event as $key => $value) {
      //     if(in_array($value->eve_id,$ii)){
      //     $mem_join =DB::table('join_event')->where('eve_id','=',$value->eve_id)->count();
      //     return $mem_join.'<br/>';
      //   }
      // }




        $joinEvent2 = JoinEvent::where('user_id', $user)->get();

        $eiei =$joinEvent->toArray();
        $joined = array();
        foreach ($eiei as $key => $value) {
          array_push($joined,$value['eve_id']);
        }



        return view('site.event',compact('title','event','myEvent','joinEvent','joined','user','ii','mem'));

      }else {
        echo 'Please login ..';
        return redirect()->intended('/');
      }

    }
    public function deleteEvents($eid){
          $event = Event::find($eid);
          $event->delete();
          return redirect('event');
    }
    public function joinEvents(Request $req,$eid){
      $user =Auth::user()->id;
      $join = new JoinEvent();
      $join->eve_id = $req->eid;
      $join->user_id = $user;
      $join->join_time = date("Y-m-d H:i:s");
      $join->save();
      return redirect('event');
    }
    public function cancelEvents($eid){

      $event = JoinEvent::find($eid);
      $user = Auth::user()->id;
      $event = JoinEvent::where([
            ['eve_id', '=', $eid],
            ['user_id', '=', $user]])->delete();
      return redirect('event');

    }

    public function editEvents(Request $req,$eid){
      $event =Event::find($eid);
      $event->description = $req['description'];
      $event->start_time = $req['start_time'];
      $event->finish_time = $req['finish_time'];
      $event->start_date = $req['start_date'];
      $event->finish_date = $req['finish_date'];
      $event->location = $req['location'];
      $event->contact = $req['contact'];
      $event->title = $req['title'];
      $event->max_amount =  $req['max_amount'];

      if($req->hasfile('files')){
        $image = $req->file('files');
        $filename = time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(public_path().'/img/uploads/events/'.$filename);
        $event->image = $filename;
        $event->save();
      }

      $event->save();
      return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('site.event');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //
      $obj1 = new Event();
      $obj1->title = $request['title'];
      $obj1->creator = Auth::user()->id;
      $obj1->description = $request['description'];
      $obj1->start_time = $request['start_time'];
      $obj1->finish_time = $request['finish_time'];
      $obj1->start_date = $request['start_date'];
      $obj1->finish_date = $request['finish_date'];
      $obj1->location = $request['location'];
      $obj1->contact = $request['contact'];
      $obj1->title = $request['title'];
      $obj1->max_amount = $request['max_amount'];
      if($request->hasfile('files')){
        $image = $request->file('files');
        $filename = time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(public_path().'/img/uploads/events/'.$filename);
        $obj1->image = $filename;
        $obj1->save();
      }
      $obj1->save();
      $join = new JoinEvent();
      $join->eve_id = $obj1->id;
      $join->user_id = Auth::user()->id;
      $join->save();

      return redirect('event');
    }


    public function eventBoardindex(Request $req)
    {
      $eid = $req->eid;
      $user = Auth::user()->id;
      $account = Account::join('profiles','profiles.id','=','accounts.profile_id')->select('accounts.first_name','accounts.last_name','profiles.avatar','accounts.id as id')
      ->where('accounts.id',$user)->first();
      // dd($account->id);
      $eve_name = Event::join('accounts', 'events.creator', '=', 'accounts.id')
      ->join('profiles','profiles.id','=','accounts.profile_id')
      ->select('events.*','accounts.first_name as fname','accounts.last_name as lname')->where('events.id','=',$eid)->first();


      $eve_post = EventPosts::join('accounts','accounts.id','=','event_board_post.user_id')
      ->join('profiles','profiles.id','=','accounts.profile_id')
      ->select('event_board_post.id as pid','event_board_post.user_id','event_board_post.image','accounts.first_name','accounts.last_name','event_board_post.created_at','event_board_post.message','accounts.id as aid','profiles.avatar')
      ->where('event_board_post.event_id','=',$eid)->orderBy('created_at','desc')
      ->get();


      $title = 'กระดานกิจกรรม - '.$eve_name->title;
      return view('site.event_board',compact('title','eve_name','user','account','eve_post'));

    }


}
