@extends('site.layout')
@section('maincontent')

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

<script type="text/javascript">
    function favorite() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#fav1',
            intro: "ในส่วนนี้คือบทความที่คุณได้ทำการบันทึกไว้เป็น <b>รายการโปรด</b>",
            position: 'right'
        },
        {
            element: '#fav2',
            intro: "คุณสามารถ <b>คัดลอกลิ้งค์</b> ของบทความนี้เพื่อส่งต่อให้เพื่อนของคุณภายนอกเว็บไซต์ได้ที่นี้",
            position: 'bottom'
        },
        {
            element: '#fav3',
            intro: "คุณสามารถ <b>ปักหมุด</b> เนื้อหานี้ไว้บนหน้าโปรไฟล์ของคุณได้ที่นี้ เพื่อนของคุณก็จะสามารถเห็นในสิ่งที่คุณปักหมุดไว้เช่นกัน",
            position: 'bottom'
        },
        {
            element: '#fav4',
            intro: "คุณสามารถ <b>ลบรายการนี้</b> ออกจากรายการโปรดของคุณ",
            position: 'bottom'
        },
        {
            element: '#fav5',
            intro: "คลิกที่นี้เพื่อ <b>อ่านเนื้อหาเพิ่มเติม</b>",
            position: 'right'
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

  if((RegExp('favoritestart', 'gi').test(window.location.search))){
    
   setTimeout( "favorite()", 1500);
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
                        @foreach($myFav as $key=>$data)
                        <div class="col s12 m4">
                            <div id="fav1" class="card">
                                <div class="card-image">
                                    <img src="{{url('img/content/'.$data->head_pic_content)}}">
                                </div>
                                <div class="card-content" style="height:200px;background-color:eecc6;">
                                    <h5 >{{$data->content_title}}</h5>
                                    <div><p class="wordwrap">{{$data->description}}</p></div>
                                </div>

                                <div class="card-action fav-icon-sec">

                                    <div id="fav2" class="col s4 link-col">
                                        <a class="link-icon-color  modal-trigger  tooltipped" data-position="bottom" data-delay="50" data-tooltip="คัดลอกลิงค์" href="#sharecontent{{$key}}"><i style="margin-top: 13px;" class="fa fa-link fa-lg" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                    <div id="fav3" class="col s4 pin-col">
                                        <a class="link-icon-color tooltipped" data-position="bottom" data-delay="50" data-tooltip="ปักหมุด" href="#"><i style="margin-top: 13px;" class="pin-icon fa fa-thumb-tack fa-lg" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                    <div class="col s4" id="fav4">
                                        <a class="link-icon-color modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="นำรายการนี้ออก" href="#del-fav{{$key}}"><i style="margin-top: 13px;" class="fa fa-times fa-lg" aria-hidden="true"></i>

                                        </a>
                                    </div>

                                </div>

                                <div id="fav5" class="card-action" style="background-color: #ee6e73;">
                                        <center><a href="{{ url('content/favourite/'.$data->id) }}" style="color: white;">อ่านเนื้อหาเพิ่มเติม</a></center>

                                <div id="fav5"  class="card-action" style="background-color: #ee6e73;">

                                        <center><a href="{{ url('content/'.$data->category_title.'/'.$data->cid) }}" style="color: white;">อ่านเนื้อหาเพิ่มเติม</a></center>


                                </div>
                            </div>
                        </div>
                        <div id="del-fav{{$key}}" class="modal" style="width: 480px; overflow: hidden;">
                          <div class="modal-content">
                              <h4>ลบรายการ</h4>

                              <p>ต้องการลบบทความนี้ออกจากรายการโปรดใช่หรือไม่</p>
                          </div>
                          <div class="modal-footer">
                            <div class="modal-footer">
                                <a href="#!" class=" modal-action modal-close waves-effect btn-flat">ไม่ ขอคิดดูก่อน</a>
                                <a href="{{url('/favourite/remove/'.$data->id)}}" class=" modal-action modal-close waves-effect btn-flat green white-text">ใช่ ลบรายการนี้</a>
                            </div>
                           </div>
                        </div>

                        <div id="sharecontent{{$key}}" class="modal modal-fixed-footer " style="width:50%;height:50%">
              <div class="modal-content">
                <div class="row">
                  <h4>แบ่งปันบทความ</h4>
                </div>
                <div class="row">
                  <div class="col s12 white"id="showlink">
                  <p class="red-text text-lighten-2" id="link">{{url('/content/'.$data->category_title.'/'.$data->cid)}}</p>
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
                    @endforeach
                    </div>
                </div>
            </div>
        </li>
    </ul>
    </div>
</div>

@stop
