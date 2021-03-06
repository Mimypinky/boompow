@extends('site.layout')

@section('maincontent')
<meta name="viewport" content="width=device-width,initial-scale=1">
<div id="wrapperHeader">
    <div class="img-cover">
        <img src="{{url('img/'.$headtitle->pic)}}">
    </div>

    <div id="header">
        <span>{{ $headtitle->category_title_th}}</span>

    </div>
</div>

<nav class="mybc">
    <div class="nav-wrapper">
        <div class="col s12">

            <a href="{{url('/content/'.$headtitle->category_title)}}"class="breadcrumb"><span>{{ $headtitle->category_title_th}}</span></a>
        </div>
    </div>
</nav>

<div class="container" style="width: 90%;">

  <div class="row">
      <div class="col s12">

        @foreach($content as $data)
          <!--<div class="col s4 m4">
              <div class="card">
                  <div class="card-image">
                      <img src="{{url('img/healthy.jpg')}}">
                  </div>
                  <div class="card-content" style="height:200px;background-color:eecc6;">
                      <h5 >{{$data->content_title}}</h5>
                      <div><p class="wordwrap">{{$data->description}}</p></div>
                  </div>
                  <div class="card-action" style="background-color: #ee6e73;">
                      <center><a href="{{ url('content/'.$data->category->category_title.'/'.$data->id) }}" style="color: white;">อ่านเนื้อหาเพิ่มเติม</a></center>
                  </div>

              </div>
          </div>-->
          <div class="col s12 m4">
              <div class="card">
                  <div class="card-image">
                      <img src="{{url('img/healthy.jpg')}}">
                  </div>
                  <div class="card-content" style="height: 200px;">
                      <h5>{{$data->content_title}}</h5>
                      <p class="wordwrap">{{$data->description}}</p>
                  </div>
                  <div class="card-action" style="background-color: #ee6e73;">
                      <center><a href="{{ url('content/'.$data->category->category_title.'/'.$data->id) }}" style="color: white;">อ่านเนื้อหาเพิ่มเติม</a></center>
                  </div>
              </div>
          </div>
@endforeach
      </div>

  </div>






</div>


@stop
