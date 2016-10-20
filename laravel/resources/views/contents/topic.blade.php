@extends('site.layout')
@section('maincontent')
<script type="text/javascript">
    

function more(){
    var intro = introJs();
      intro.setOptions({
        showStepNumbers: false,
        nextLabel: "ต่อไป",
        prevLabel: "กลับ",
        skipLabel: "ข้าม",
        doneLabel: "เสร็จ",

        steps: [
          {
            element: "#more",
            intro: "This is a dropdown"
          },
          {
            element: '#more2',
            intro: "This is an option within a dropdown.",
            position: 'bottom'
          },

        ]
      });

      
      intro.start();
  };

  setTimeout( "more()", 1500);
  
</script>
<div id="wrapperHeader">
    <div class="img-cover">
        <img src="{{url('img/health3.jpg')}}">
    </div>

    <div id="header">
        <span>{{ $headtitle->category_title_th}}</span>

    </div>
</div>
@foreach($article as $data)
<nav class="mybc content-bc">
    <div class="nav-wrapper">
        <div class="col s12">

            <a href="{{url('/content/'.$headtitle->category_title)}}"class="breadcrumb">{{$headtitle->category_title_th}}</a>
            <a class="breadcrumb"><span>{{$data->content_title}}</span></a>
        </div>
    </div>
</nav>
@endforeach

<div class="container" style="width: 90%;">

<!--Content Section-->
<div class="section"></div>
<div class="">
    <div class="row">
    	<!-- Share Button -->
    	<div class="col s6 m4 l1 offset-m8 offset-s6">

        <div>
            <!--FullScreen-->
            <a class="btn-floating waves-effect waves-light yellow darken-2 marginShareBtn-side tooltipped" data-position="right" data-delay="50" data-tooltip="รายการโปรด"><i class="fa fa-star" aria-hidden="true"></i></a>
            <a class="btn-floating waves-effect waves-light orange darken-3 darken-1 marginShareBtn-side tooltipped" data-position="right" data-delay="50" data-tooltip="ปักหมุด"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
            <a class="btn-floating waves-effect waves-light light-blue darken-3 marginShareBtn-side tooltipped" data-position="right" data-delay="50" data-tooltip="คัดลอกลิ้งค์"><i class="fa fa-link" aria-hidden="true"></i></a>




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

<script type="text/javascript" src="js/btt.js"></script>
@stop
