@extends('site.layout')
@section('maincontent')
<script>
$(window).load(function() { // makes sure the whole site is loaded
  $('#status').fadeOut(); // will first fade out the loading animation
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
  $('body').delay(350).css({
    'overflow': 'visible'
  });
})
</script>
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
                      <img src="{{url('img/healthy.jpg')}}">
                  </div>
                  <div class="card-content" style="height:200px;background-color:eecc6;">
                      <h5 >{{$data->content_title}}</h5>
                      <div><p class="wordwrap">{{$data->description}}</p></div>
                  </div>
                  <div class="card-action">
                      <a href="{{ url('content/'.$data->category->category_title.'/'.$data->id) }}">เพิ่มเติม</a>
                </div>
              </div>
          </div>
          @endforeach
      </div>

  </div>

</div>
@stop
