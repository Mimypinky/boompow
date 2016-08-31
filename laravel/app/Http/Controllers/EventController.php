<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Event;
use App\Users;
use App\EventPhotos;
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
        $title = 'กิจกรรม';
        $event = Event::join('accounts', 'events.creator', '=', 'accounts.id')
            ->select('events.*', 'accounts.first_name as fname','accounts.last_name as lname')
            ->get();
        return view('site.event',compact('title','event'));

      }else {
        echo 'please login';
      }

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
    public function eventBoardindex($eid)
    {
      return view('site.event_board');
    }

}
