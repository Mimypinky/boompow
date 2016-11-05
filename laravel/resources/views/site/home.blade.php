@extends('site.layout')
@section('maincontent')
<meta name="viewport" content="width=device-width,initial-scale=1">
<script>
$(window).load(function() { // makes sure the whole site is loaded
  $('#status').fadeOut(); // will first fade out the loading animation
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
  $('body').delay(350).css({
    'overflow': 'visible'
  });
})
</script>

<script type="text/javascript">
function content() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#content1',
            intro: "ในส่วนนี้คุณสามารถกดเพื่อ <b>ดูหน้าต่อไป</b> ของเนื้อหาได้",
            position: 'bottom'
        },
        {
            element: '#content2',
            intro: "ในส่วนนี้จะ <b>แสดงภาพประกอบ</b> และ <b>เนื้อหาบางส่วน</b>",
            position: 'right'
        },
        {
            element: '#content3',
            intro: "คุณสามารถคลิก <b>อ่านเนื้อหาเพิ่มเติม</b> ได้ที่นี้",
            position: 'right'
        },
        
      
        ]
    });
   
    intro.start();
}
if((RegExp('contentstart', 'gi').test(window.location.search))){
    
   setTimeout( "content()", 1500);
}

function pinfav() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#pinfav1',
            intro: "เลือกเนื้อหาที่คุณ <b>สนใจ</b> ในส่วนนี้ จากนั้นคลิกที่ปุ่ม <b>อ่านเนื้อหาเพิ่มเติม</b>",
            position: 'top'
        },
        {
            element: '#content2',
            intro: "ในส่วนนี้จะ <b>แสดงภาพประกอบ</b> และ <b>เนื้อหาบางส่วน</b>",
            position: 'right'
        },
        {
            element: '#content3',
            intro: "คุณสามารถคลิก <b>อ่านเนื้อหาเพิ่มเติม</b> ได้ที่นี้",
            position: 'right'
        },
        
      
        ]
    });
   
    intro.start();
}
if((RegExp('pinfavstart', 'gi').test(window.location.search))){
    
   setTimeout( "pinfav()", 1500);
}


</script>
<div id="wrapperHeader">
    <div class="img-cover">
        <img src="{{url('img/health3.jpg')}}">
    </div>

    <div id="header">
        <span>สาระน่ารู้</span>
        <p>ติดตามข่าวสารใหม่ๆได้ที่ BOOMPOW</p>
    </div>
</div>
<div class="container" style="width: 90%;">

  <div class="row">
      <div id="pinfav1" class="col s12">
        <div id="content1" class="center">
          {!! (new Landish\Pagination\Materialize($content))->render() !!}
        </div>

        @foreach($content as $data)


          <div id="content2" class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{url('img/content/'.$data->head_pic_content)}}">
                    </div>
                    <div class="card-content" style="height: 230px;">
                        <h5>{{$data->content_title}}</h5>
                        <p class="wordwrap">{{$data->description}}</p>
                    </div>
                    <div id="content3" class="card-action" style="background-color: #ee6e73;">
                        <center><a href="{{ url('content/'.$data->category->category_title.'/'.$data->id) }}" style="color: white;">อ่านเนื้อหาเพิ่มเติม</a></center>
                    </div>
                    </div>
                </div>


          @endforeach

      

      </div>
      <div class="col s12">
        <div class="center">
          {!! (new Landish\Pagination\Materialize($content))->render() !!}
        </div>
      </div>

  </div>

</div>
@stop
