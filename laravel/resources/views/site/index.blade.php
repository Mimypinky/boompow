@extends('site.layout')
@section('maincontent')
<div class="row">
    <div class="hello">
    <center><h1 style="font-size: 36pt; text-shadow: 2px 2px #3A3737;" class="hello-content">{{$headtitle}}</h1></center>
    </div>
</div>
<div class="container" style="width: 90%;">

  <div class="row">
      <div class="col s12">
        @foreach($content as $data)
          <div class="col s4 m4">
              <div class="card">
                  <div class="card-image">
                      <img src="img/healthy.jpg">
                  </div>
                  <div class="card-content">
                      <h6>{{$data->content_title}}</h6>
                      <p>......</p>
                  </div>
                  <div class="card-action">
                      <a href="#">This is a link</a>
                  </div>
              </div>
          </div>
          @endforeach
      </div>

  </div>

</div>
@stop
