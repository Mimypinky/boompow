
@extends('admin.layout')
@section('main')

<div id="page-wrapper">
  <div class="main-page">
    <div class="row-one">

      <div class="col-md-4" style="color:#fff;text-align:center">
        <div class="col-xs-8 " style="background-color: #47b8e0;height:80px;padding-top:27px">

          <h3>Contents</h3>
        </div>
        <div class="col-xs-4" style="background-color: #5acbf3;height:80px;padding-top:27px">
          <h3> {{$c_content}}</h3>
        </div>
        <div class="col-xs-12"style="background-color: #77919d;text-align:left">
          <a style="color:#fff;"href="{{url('/administator/content')}}" >
            <p >Show all contents</p></a>
          </div>

      </div>
      <div class="col-md-4  states-mdl" style="color:#fff;text-align:center">
        <div class="col-xs-8" style="background-color: #ffc952;height:80px;padding-top:27px">

          <h3>Event</h3>
        </div>
        <div class="col-xs-4" style="background-color: #ffd16d;height:80px;padding-top:27px" >
          <h3>{{$c_event}}</h3>
        </div>
        <div class="col-xs-12"style="background-color: #77919d;text-align:left">
          <a style="color:#fff;"href="{{url('/administator/event')}}" >
            <p >Show all events</p></a>
          </div>
      </div>


      <div class="col-md-4  states-last" style="color:#fff;text-align:center">
        <div class="col-xs-8" style="background-color: #ff7473;height:80px;padding-top:27px">

          <h3>Users</h3>
        </div>
        <div class="col-xs-4" style="background-color: #fd8d8d;height:80px;padding-top:27px">
          <h3>{{$c_acc}}</h3>
        </div>
        <div class="col-xs-12"style="background-color: #77919d;text-align:left">
          <a style="color:#fff;"href="{{url('/administator/user')}}" >
            <p >Show all users</p></a>
          </div>
      </div>
      <div class="clearfix"> </div>
    </div>

        </div>
      </div>
  </div>
</div>
@stop
