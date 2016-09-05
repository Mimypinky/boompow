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
                      <img src="{{url('img/healthy.jpg')}}">
                  </div>
                  <div class="card-content" style="height:200px;background-color:eecc6;">
                      <h5 >{{$data->content_title}}</h5>
                      <div><p class="wordwrap">{{$data->description}}</p></div>
                  </div>
                  <div class="card-action">
<<<<<<< HEAD
                      <a href="{{ url('content/'.$data->category->category_title.'/'.$data->id) }}">เพิ่มเติม</a>
                </div>
=======

                      <a href="content/{{ $data->category->category_title }}/{{ $data->id }}">เพิ่มเติม</a>

                  </div>
>>>>>>> f025b263b3e298ab7012c6145e5e8d4592210b6a
              </div>
          </div>
          @endforeach
      </div>

  </div>

</div>
@stop
