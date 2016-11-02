@extends('site.layout')

@section('maincontent')
<meta name="viewport" content="width=device-width,initial-scale=1">

<script type="text/javascript">
function content() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เสร็จ",
        steps: [
        {
            element: '#content1',
            intro: "ในส่วนนี้จะแสดงภาพประกอบ และเนื้อหาบางส่วน",
            position: 'right'
        },
        {
            element: '#content2',
            intro: "คุณสามารถคลิกอ่านเนื้อหาเพิ่มเติมได้ที่นี้",
            position: 'right'
        },


        ]
    });

    intro.start();
}


</script>
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





          <div id="content1" class="col s4">

              <div class="card">
                  <div class="card-image">
                      <img src="{{url('img/content/'.$data->head_pic_content)}}">
                  </div>
                  <div class="card-content" style="height: 200px;">
                      <h5>{{$data->content_title}}</h5>
                      <div class="wordwrap">{!!$data->description!!}</div>
                  </div>
                  <div id="content2" class="card-action" style="background-color: #ee6e73;">
                      <center><a href="{{ url('content/'.$data->category->category_title.'/'.$data->id) }}" style="color: white;">อ่านเนื้อหาเพิ่มเติม</a></center>
                  </div>
              </div>
          </div>

          @endforeach


  </div>



</div>


</div>


@stop
