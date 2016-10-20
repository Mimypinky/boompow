<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Event;
use App\Users;
use App\EventPhotos;
use App\JoinEvent;
use Illuminate\Support\Facades\Auth;
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
            ->select('events.*', 'accounts.first_name as fname','accounts.last_name as lname')
            ->where('creator','=',$user)->orderBy('create_at', 'desc')
            ->get();
        $joinEvent = JoinEvent::join('events','join_event.eve_id','=','events.id')
        ->join('accounts','events.creator','=','accounts.id')
        ->select('events.*','join_event.*', 'accounts.first_name as fname','accounts.last_name as lname')
        ->where('user_id','=',$user)->orderBy('join_time', 'desc')
        ->get();
        $joinEvent2 = JoinEvent::where('user_id', $user)->get();

        $eiei =$joinEvent->toArray();
        $joined = array();
        foreach ($eiei as $key => $value) {
          array_push($joined,$value['eve_id']);
        }


        $party = Event::join('accounts','events.id','=','accounts.id')
        ->join('join_event','events.id','=','join_event.eve_id')
        ->select('accounts.first_name as fname','accounts.last_name as lname','events.id')->orderBy('create_at', 'desc')
        ->get();
        $eieiei = $party->toArray();
        $attend = array();
        foreach($eieiei as $key =>$value){
          array_push($attend,$value['id']);
        }

        return view('site.event',compact('title','event','myEvent','joinEvent','joined','user'));

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
      if($req->hasfile('files')){
        $image = $req->file('files');
        $filename = time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(public_path().'/img/uploads/events/'.$filename);
        $event->image = $filename;
        $event->save();
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
      $eve_name = Event::join('accounts', 'events.creator', '=', 'accounts.id')
      ->select('events.*','accounts.first_name as fname','accounts.last_name as lname')->where('events.id','=',$eid)->first();
      $title = 'กระดานกิจกรรม - '.$eve_name->title;
      return view('site.event_board',compact('title','eve_name','user'));

    }


}
