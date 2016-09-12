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
            ->select('events.*', 'accounts.first_name as fname','accounts.last_name as lname')
            ->get();
        $myEvent = Event::join('accounts', 'events.creator', '=', 'accounts.id')
            ->select('events.*', 'accounts.first_name as fname','accounts.last_name as lname')
            ->where('creator','=',$user)
            ->get();
        $joinEvent = JoinEvent::join('accounts','join_event.user_id','=','accounts.id')
        ->join('events','join_event.eve_id','=','events.id')
        ->select('events.*', 'accounts.first_name as fname','accounts.last_name as lname')
        ->where('user_id','=',$user)
        ->get();


        return view('site.event',compact('title','event','myEvent','joinEvent'));

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
    public function joinEvents($eid){
      $user =Auth::user()->id;
      $join = new JoinEvent();
      $join->eve_id = $req->eid;
      $join->user_id = $user;
      $join->save();
    return redirect('event');
    }

    public function editEvents($eid){
      $event =Event::find($eid);
      $event->description = $request['description'];
      $event->start_time = $request['start_time'];
      $event->finish_time = $request['finish_time'];
      $event->start_date = $request['start_date'];
      $event->finish_date = $request['finish_date'];
      $event->location = $request['location'];
      $event->contact = $request['contact'];
      $event->title = $request['title'];
      $event->save();
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
      $obj1->save();
      return redirect('event');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Event::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
