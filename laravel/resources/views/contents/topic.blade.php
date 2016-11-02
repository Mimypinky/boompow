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
<style>
#showlink{
    border-radius: 10px 10px 10px 10px;
  -moz-border-radius: 10px 10px 10px 10px;
  -webkit-border-radius: 10px 10px 10px 10px;
    border: 1px solid #ee6e73 ;
    width:
  }
  ::selection{

      background:#e57373 ; color:#fff; text-shadow: none;

    }

</style>

<!--Content Section-->
<div class="section"></div>
<div class="">
    <div class="row">
    	<!-- Share Button -->
    	<div class="col s6 m4 l1 offset-m8 offset-s6">

        <div>
            <!--FullScreen-->
@foreach($article as $data)

@if(Auth::guest())
<a href="#sharecontent"class="modal-trigger btn-floating waves-effect waves-light light-blue darken-3 marginShareBtn-side tooltipped" data-position="right" data-delay="50" data-tooltip="คัดลอกลิ้งค์">
  <i class="fa fa-link" aria-hidden="true"></i></a>
@else
<?php
$uid =Auth::user()->id;
$fav = DB::table('favourite')->where([['user_id','=',$uid],['content_id','=',$data->id]])->first();?>
      @if($fav)
      <a href="{{url('/unfav/'.$fav->id)}}"class="btn-floating waves-effect waves-light grey lighten-1 marginShareBtn-side tooltipped" data-position="right" data-delay="50" data-tooltip="รายการโปรด">
        <i class="fa fa-star" aria-hidden="true"></i></a>
        @else
            <a href="{{url('/fav/'.$data->id)}}"class="btn-floating waves-effect waves-light yellow darken-2 marginShareBtn-side tooltipped" data-position="right" data-delay="50" data-tooltip="รายการโปรด">
              <i class="fa fa-star" aria-hidden="true"></i></a>
              @endif

            <a href="#pinstatus"class="modal-trigger btn-floating waves-effect waves-light orange darken-3 darken-1 marginShareBtn-side tooltipped" data-position="right" data-delay="50" data-tooltip="ปักหมุด">
              <i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
            <a href="#sharecontent"class="modal-trigger btn-floating waves-effect waves-light light-blue darken-3 marginShareBtn-side tooltipped" data-position="right" data-delay="50" data-tooltip="คัดลอกลิ้งค์">
              <i class="fa fa-link" aria-hidden="true"></i></a>
@endif
<div id="pinstatus" class="modal modal-fixed-footer">
<div class="modal-content" style="padding:50px ">
<div class="row">
    <span style="font-size:2.5em"class="card-title">ปักหมุดบทความ</span><br>
    <span><i>บทความที่ได้ปักหมุดจะถูกโพสต์บทหน้าไทม์ไลน์ของคุณ</i></span>
  <div class="col s12">
    <form action="{{url('/pin/'.$data->id)}}" method="post">
    <div class="row">
       <div class="input-field col s12">
         <textarea id="textarea1" class="materialize-textarea" name="message"placeholder="กล่าวบางอย่างเกี่ยวกับบทความนี้"></textarea>
         {{ csrf_field() }}
       </div>
     </div>
  </div>
  <div class="row ">
  <div class="col s8 offset-s2 ">

     <div class="card">
       <div class="card-image">
         <img src="{{url('img/content/'.$data->head_pic_content)}}" style="max-height:300px"/>
       </div>
       <div class="card-stacked">
         <div class="card-content">
          <h2>{{$data->content_title}}</h2>
         </div>
         <div class="card-action">
          <a href="#">อ่านเนื้อหา</a>
        </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>

<div class="modal-footer">
  <a  class="modal-action modal-close waves-effect waves-red btn-flat ">ยกเลิก</a>
  <button type="submit" name="action" class="modal-action  waves-effect waves-green btn-flat" >  <i class="material-icons right">send</i>ปัก</button>
</div>
</form>
</div>
              <div id="sharecontent" class="modal modal-fixed-footer " style="width:50%;height:50%">
    <div class="modal-content">
      <div class="row">
        <h4>แบ่งปันบทความ</h4>
      </div>
      <div class="row">
        <div class="col s12 white"id="showlink">
        <p class="red-text text-lighten-2" id="link">{{url('/content/'.$headtitle->category_title.'/'.$data->id)}}</p>
      </div>
    </div>
    <div class="row">
      <script type="text/javascript">
              $(function(){
              new Clipboard('.copy-text');
              });

      </script>
      <div class="col s12" style="text-align:right;">
        <a data-clipboard-target="#link" href="#" class="copy-text btn waves-effect waves-light" >คัดลอก
            <i class="fa fa-files-o" aria-hidden="true"></i>
          </a>
      </div>
      </div>

    </div>
  </div>



        </div>


		</div>

        <div class="col s12 l10 m10 offset-m1 ContentBG">
          <div class="row">
          <div class="col s12">
          <h2 class="headContent">{{$data->content_title}}</h2>
          <p class="headContent" style="font-style:italic;font-size:9pt">{{$data->updated_at}}</p>
          <p class="headContent" style="font-style:italic;font-size:9pt">{{$data->reference}}</p>
        </div>

    </div>

          <div class="divider"></div>
          <!-- <div class="section"></div> -->
          <div class="row" id="image">
          <!--  <img class="col s10 m10 l10 offset-l1 offset-m1 offset-s1" src="img/Chick.jpg">-->
        </div>
        <div class="row">
            <div class="col s10 m10 l10 offset-l1 offset-m1 offset-s1">
                <div class="section shortenNav"></div>

                <p>

                  {!!$data->description!!}

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
