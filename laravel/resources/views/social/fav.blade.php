@extends('site.layout')
@section('maincontent')
<script type="text/javascript">
    function favorite() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เสร็จ",
        steps: [
        {
            element: '#fav1',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'right'
        },
        {
            element: '#fav2',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        {
            element: '#fav3',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        {
            element: '#fav4',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        {
            element: '#fav5',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        ]
    });

    /*intro.onafterchange(function(targetElement) {
      console.log(targetElement.id);
      switch (targetElement.id){
        
        case "comment2":
            $('.introjs-helperLayer').css({width:'127px'})
            break;
      } 
    });*/
    intro.start()
  }
</script>
<div class="container" style="width: 90%; margin-top: 132px;min-height: 600px;">
    <div class="row">
    <ul class="collection with-header pro-upstatus-feed">
        <li class="collection-header myfriend-head">
            <div class="row mf-row">
                <div class="col s1"><img src="img/fav.png" width="50"></div>
                <div class="col s5"><h4 class="mf-col">รายการโปรด</h4></div>
            </div>
        </li>
        <li class="collection-item" style="background-color: #fbfbfb;">
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        @foreach($myFav as $data)
                        <div class="col s12 m4">
                            <div id="fav1" class="card">
                                <div class="card-image">
                                    <img src="{{url('img/healthy.jpg')}}">
                                </div>
                                <div class="card-content" style="height:200px;background-color:eecc6;">
                                    <h5 >{{$data->content_title}}</h5>
                                    <div><p class="wordwrap">{{$data->description}}</p></div>
                                </div>

                                <div class="card-action fav-icon-sec">
                                    <div id="fav2" class="col s4 link-col">
                                        <a class="link-icon-color tooltipped" data-position="bottom" data-delay="50" data-tooltip="คัดลอกลิงค์" href="#"><i style="margin-top: 13px;" class="fa fa-link fa-lg" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div id="fav3" class="col s4 pin-col">
                                        <a class="link-icon-color tooltipped" data-position="bottom" data-delay="50" data-tooltip="ปักหมุด" href="#"><i style="margin-top: 13px;" class="pin-icon fa fa-thumb-tack fa-lg" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div id="fav4" class="col s4">
                                        <a class="link-icon-color tooltipped" data-position="bottom" data-delay="50" data-tooltip="นำรายการนี้ออก" href="#"><i style="margin-top: 13px;" class="fa fa-times fa-lg" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
<<<<<<< HEAD
                                <div id="fav5" class="card-action" style="background-color: #ee6e73;">
                                        <center><a href="{{ url('content/favourite/'.$data->id) }}" style="color: white;">อ่านเนื้อหาเพิ่มเติม</a></center>
=======
                                <div class="card-action" style="background-color: #ee6e73;">
                                        <center><a href="{{ url('content/'.$data->category_title.'/'.$data->id) }}" style="color: white;">อ่านเนื้อหาเพิ่มเติม</a></center>
>>>>>>> 8cd5638b2dcfceb33cc82de0db8002fab58fef00
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </li>
    </ul>
    </div>
</div>

@stop
