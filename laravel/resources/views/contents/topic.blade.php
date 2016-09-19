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
    <div class="section shortenNav"></div>
    <div>
        <nav class="shortenNav">
            <div class="nav-wrapper" id="breadcrumbsContent">
              @foreach($article as $data)
              <nav class="mybc" style="background-color: #EE6E74">
                  <div class="nav-wrapper">
                      <div class="col s12">

                          <a href="{{ url('content/'.$headtitle->category_title) }}" class="breadcrumb">{{ $headtitle->category_title_th}}</a>
                            <a href="{{ url('content/'.$headtitle->category_title.'/'.$data->id) }}" class="breadcrumb">{{$data->content_title}}</a>
                      </div>
                  </div>
              </nav>

          @endforeach
        </div>
    </nav>
</div>

<!--Content Section-->
<div class="section"></div>
<div class="">
    <div class="row">
    	<!-- Share Button -->
    	<div class="col s6 m4 l1 offset-m8 offset-s6">

        <div>
            <!--FullScreen-->
            <a href="{{url('content/')}}"class="btn-floating waves-effect waves-light yellow accent-3 marginShareBtn-side tooltipped"data-position="right" data-delay="50" data-tooltip="รายการโปรด"><i class="fa fa-star" aria-hidden="true"></i></a>
          <br>  <a class="btn-floating waves-effect waves-light red darken-1 marginShareBtn-side tooltipped" data-position="right" data-delay="50" data-tooltip="ปักหมุด"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
            <br><a class="btn-floating waves-effect waves-light blue marginShareBtn-side tooltipped" data-position="right" data-delay="50" data-tooltip="คัดลอกลิ้งค์"><i class="fa fa-link" aria-hidden="true"></i></a>


        <!--iPad
            <a class="btn-floating waves-effect waves-light yellow accent-3 marginShareBtn-ipad tooltipped"data-position="top" data-delay="50" data-tooltip="รายการโปรด"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a class="btn-floating waves-effect waves-light red darken-1 marginShareBtn-ipad tooltipped" data-position="top" data-delay="50" data-tooltip="ปักหมุด"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
            <a class="btn-floating waves-effect waves-light blue marginShareBtn-ipad tooltipped" data-position="top" data-delay="50" data-tooltip="คัดลอกลิ้งค์"><i class="fa fa-link" aria-hidden="true"></i></a>



            <a class="btn-floating waves-effect waves-light yellow accent-3 marginShareBtn-mobile tooltipped"data-position="top" data-delay="50" data-tooltip="รายการโปรด"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a class="btn-floating waves-effect waves-light red darken-1 marginShareBtn-mobile tooltipped" data-position="top" data-delay="50" data-tooltip="ปักหมุด"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
            <a class="btn-floating waves-effect waves-light blue marginShareBtn-mobile tooltipped" data-position="top" data-delay="50" data-tooltip="คัดลอกลิ้งค์"><i class="fa fa-link" aria-hidden="true"></i></a>
          -->
        </div>


		</div>
@foreach($article as $data)
        <div class="col s12 l10 m10 offset-m1 ContentBG">

          <h2 class="headContent">{{$data->content_title}}</h2>
          <div class="divider"></div>
          <div class="section"></div>
          <div class="row" id="image">
          <!--  <img class="col s10 m10 l10 offset-l1 offset-m1 offset-s1" src="img/Chick.jpg">-->
        </div>
        <div class="row">
            <div class="col s10 m10 l10 offset-l1 offset-m1 offset-s1">
                <div class="section shortenNav"></div>
                <p>
                  {{$data->description}}
                </p>
            </div>
        </div>


    <div class="divider"></div>
    <div class="section"></div>

</div>
@endforeach
</div>

</div>
<a href="#" class="back-to-top waves-effect waves-light btn light-blue darken-3" style="display: inline;">
<i class="material-icons left">keyboard_arrow_up</i>กลับขึ้นไปด้านบน</a>
<script type="text/javascript" src="js/btt.js"></script>
@stop
