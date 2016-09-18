@extends('site.layout')

@section('maincontent')
<div id="wrapperHeader">
    <div class="img-cover">
        <img src="{{url('img/health3.jpg')}}">
    </div>

    <div id="header">
        <span>{{ $headtitle->category_title_th}}</span>

    </div>
</div>

<div class="container" style="width: 90%;">

  <div class="row">
      <div class="col s12">
        <nav class="mybc" style="background-color: #EE6E74">
            <div class="nav-wrapper">
                <div class="col s12">

                    <a href="#!" class="breadcrumb">{{ $headtitle->category_title_th}}</a>

                </div>
            </div>
        </nav>

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
