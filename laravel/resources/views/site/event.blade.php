@extends('site.layout')
@section('maincontent')
<script src="{{URL::asset('datepicker/picker.time.js')}}"></script>
<script src="{{URL::asset('datepicker/picker.date.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
  $(".button-collapse").sideNav();
});
$('.datepicker').pickadate({
  selectYears: true,
  selectMonths: true,
  labelMonthNext: 'เดือนถัดไป',
  labelMonthPrev: 'เดือนก่อนหน้า',
  labelMonthSelect: 'เลือกเดือน',
  labelYearSelect: 'เลือกปี',
  monthsFull: [ 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม' ],
  monthsShort: [ 'ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.' ],
  weekdaysFull: [ 'วันอาทิตย์', 'วันจันทร์', 'วันอังคาร', 'วันพุธ', 'วันพฤหัสบดี', 'วันศุกร์', 'วันเสาร์' ],
  weekdaysShort: [ 'อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.' ],
  weekdaysLetter: [ 'อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.' ],
  today: 'วันนี้',
  clear: 'ล้าง',
  close: 'ปิด',
  format: 'dddd dd mmmm yyyy',
  formatSubmit: 'yyyy-mm-dd',
  hiddenName: true,
  min: new Date().now,
  max: [2000,06,06],
  selectYears: 65,
});
$('.timepicker').pickatime({
  min: [7,30],
  max: [14,0]
});
// $(document).ready(function () {
//   $('.modal-trigger').leanModal();
//   $('#modal1').openModal();
//   $('#modal1').closeModal();
//   $('#edit').openModal();
//   $('#edit').closeModal();
// });
<?php
use Carbon\Carbon;
?>




</script>
<script type="text/javascript">
 
  function eventuser() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#event1',
            intro: "คุณสามารถดู <b>กิจกรรมทั้งหมด</b> ได้ที่ส่วนนี้",
            position: 'bottom'
        },
        {
            element: '#status_avai',
            intro: "ในส่วนนี้จะบอก <b>สถานะกิจกรรม</b> ที่กำลังจัดอยู่",
            position: 'bottom'
        },
        {
            element: '#descrip',
            intro: "คุณสามารถ <b>ดูรายละเอียด</b> ของกิจกรรมได้ในส่วนนี้.",
            position: 'bottom'
        },
        {
            element: '#attend',
            intro: "คุณสามารถคลิกที่ <b>เข้าร่วม</b> บนกิจกรรมที่คุณสนใจที่มีสถานะ <b>กำลังรับสมัคร</b>",
            position: 'bottom'
        },
        {
            element: '#event2',
            intro: "คุณสามารถดู <b>กิจกรรมที่คุณเข้าร่วม</b> ได้ที่ส่วนนี้",
            position: 'bottom'
        },
        {
            element: '#cancelE',
            intro: "คุณสามารถ <b>ยกเลิกการเข้าร่วม</b> กิจกรรมของคุณที่นี้.",
            position: 'bottom'
        },
        {
            element: '#Eboard',
            intro: "คุณสามารถเข้า <b>กระดานกิจกรรม</b> เพื่อพูดคุยกับเพื่อนๆเกี่ยวกับกิจกรรมได้ที่นี้",
            position: 'bottom'
        },
        {
            element: '#event3',
            intro: "คุณสามารถดู <b>กิจกรรมของฉัน</b> ได้ที่ส่วนนี้",
            position: 'bottom'
        },
        {
            element: '#addE',
            intro: "ในส่วนนี้คุณสามารถ <b>เพิ่มกิจกรรม</b> ที่คุณเป็นเจ้าของเองได้",
            position: 'bottom'
        },
        ]
    });

    intro.onafterchange(function(targetElement) {
      console.log(targetElement.id);
      switch (targetElement.id){
        case "event1":
            $('.introjs-helperLayer').css("background-color", "#ee6e73")
            break;
        case "event2":
            $('.introjs-helperLayer').css("background-color", "#ee6e73")
            break;
        case "event3":
            $('.introjs-helperLayer').css("background-color", "#ee6e73")
            break;
      }
    });



  intro.onchange(function(targetElement) {
        if($(targetElement).attr("id") == $('#event1').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'allevent');
        }
        if($(targetElement).attr("id") == $('#event2').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'attendevent');
        }

        if($(targetElement).attr("id") == $('#event3').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'myevent');
        }
        if($(targetElement).attr("id") == $('#descrip').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'allevent');
        }
        if($(targetElement).attr("id") == $('#status').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'allevent');
        }
        if($(targetElement).attr("id") == $('#attend').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'allevent');
        }
        if($(targetElement).attr("id") == $('#cancelE').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'attendevent');
        }
        if($(targetElement).attr("id") == $('#Eboard').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'attendevent');
        }
        if($(targetElement).attr("id") == $('#addE').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'myevent');
        }
    });
  intro.start()

}
if((RegExp('eventstart', 'gi').test(window.location.search))){
    
   setTimeout( "eventuser()", 1500);
}
function eventmng() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#mng1',
            intro: "คุณสามารถ <b>แก้ไขกิจกรรม</b> ของคุณได้ที่นี้",
            position: 'bottom'
        },
        {
            element: '#mng2',
            intro: "คุณสามารถ <b>ลบกิจกรรม</b> ที่คุณเป็นเจ้าของได้ที่นี้",
            position: 'bottom'
        },
       
        ]
    });


    intro.onchange(function(targetElement) {
        if($(targetElement).attr("id") == $('#mng1').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'myevent');
        }
        if($(targetElement).attr("id") == $('#mng2').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'myevent');
        }
        
        
    });
    intro.start()
}
if((RegExp('eventmngstart', 'gi').test(window.location.search))){
    
   setTimeout( "eventmng()", 1500);
}

function eventboard() {
   var intro = introJs();
   intro.setOptions({
    showStepNumbers: false,
    doneLabel: "เข้าใจแล้ว",
    steps: [
    {
        element: '#Eboard',
        intro: "คุณสามารถเข้า <b>กระดานกิจกรรม</b> เพื่อพูดคุยกับเพื่อนๆเกี่ยวกับกิจกรรมได้ที่นี้",
        position: 'bottom'
    },


    ]
   });
   intro.onchange(function(targetElement) {
        if($(targetElement).attr("id") == $('#Eboard').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'attendevent');
        }
    });

   intro.start()
}
if((RegExp('eventboardstart', 'gi').test(window.location.search))){
    
   setTimeout( "eventboard()", 1500);
   }
</script>



<div id="wrapperHeader">
    <div class="img-cover">
        <img src="{{url('img/activities.jpg')}}">
    </div>

    <div id="header">
        <span>{{$title}}</span>
        <p>ติดตามข่าวสารใหม่ๆได้ที่ BOOMPOW</p>
    </div>
</div>
<div class="section"></div>
<div class="container">
  <div class="row">
    <div class="col s12 event-option">
      <ul class="event-option tabs tab-set" style="background-color: #F16B6F;">
        <li id="event1" class="tab"><a href="#allevent">กิจกรรมทั้งหมด</a></li>
        <li id="event2" class="tab"><a href="#attendevent">กิจกรรมที่เข้าร่วม</a></li>
        <li id="event3" class="tab"><a href="#myevent">กิจกรรมของฉัน</a></li>

      </ul>
    </div>
    <!--Start tab-->
    <div id="allevent" class="col s12 ">
      <div class="center">
        {!! (new Landish\Pagination\Materialize($event))->render() !!}
      </div>
      <ul class="collection event-border" data-collapsible="accordion">
        @foreach($event as $key => $data)

        <li class=" collection-item">
          <div class="row">
            <div class="col s10 m9 l9" style="margin-top: 10px; margin-bottom: -25px; padding-left: 3%;">
              <span ><i class="fa fa-calendar-o" aria-hidden="true" style="font-size: 20pt;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size: 20pt">{{$data->title}}<span></span>

          <?php   $party3 = DB::table('join_event')->where('eve_id', $data->id)->count(); ?>
          @if($party3==0)
            <a href="#partiList0" class="modal-trigger"><div class="chip" align="right">ยังไม่มีผู้เข้าร่วม</div></a>

                            <div id="partiList0" class="modal" style="width: 500px;">
                              <ul class="collection with-header f-modal">

                                <li class="collection-header transper">
                                  <h4>ยังไม่มีผู้เข้าร่วม</h4>
                                  <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div>
                                </li>
                              </ul>

                            </div>
          @else
          <a href="#partiList1{{$key}}" class="modal-trigger"><div class="chip" align="right">{{$party3}} ผู้เข้าร่วม</div></a>

                          <div id="partiList1{{$key}}" class="modal" style="width: 500px;">
                          <ul class="collection with-header f-modal">
                          <li class="collection-header transper">
                            <i style="line-height: 1;" class="fa fa-users fa-lg left" aria-hidden="true"></i><h4>ผู้เข้าร่วมกิจกรรม</h4>
                            <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div>
                          </li>
                          <?php $member = DB::table('join_event')->join('accounts','join_event.user_id','=','accounts.id')->where('eve_id','=',$data->id)->get(); ?>
                            @foreach($member as $person)
                            <li class="collection-item avatar transper">
                                <img src="{{url('img/f1.jpg')}}" alt="" class="circle">
                                <p>{{$person->first_name.' '.$person->last_name}} </p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;เพิ่มเพื่อน</a>
                              </li>

                              @endforeach

                            </ul>
                          </div>
          @endif

              </div>
            </div>

            <div  style="margin-top: 20px background-color:#eeeeee;">

              <div class="row" style="padding: 20px;">
                <div class="col s4 center event-card" >
                  <div class="card">
                    <div class="card-image">
                      <img class=" materialboxed" src="{{url('img/uploads/events/'.$data->image)}}">
                    </div>
                    <?php
                    $now = Carbon::parse('now');
                    $start_date = Carbon::parse($data->start_date);
                    $dif = $lengthOfAd = $now->diffInDays($start_date,false);
                    $max = $data->max_amount;

                    if($dif<0 ){
                      $color=' red darken-1 ';
                      $message = 'ปิดรับสมัคร';
                      $display = 'display:none';
                  }else{
                      $color=' light-green darken-1 ';
                      $message = 'กำลังรับสมัคร';
                      $display = ' ';
                    }
                    ?>

                    <!--เริ่มแสดง status (unavailable)-->

                    <div class="card-content {{$color}}" id="status_avai">
                        <p class="ev-status">{{$message}}</p>
                    </div>


                  @if(in_array($data->id,$joined) AND ($data->creator!=$user))
                  <div class="card-action">
                      <ul class="event-menu ">
                          <li class="event-item "><a  >
                              <i class="material-icons left" aria-hidden="true">done</i>เข้าร่วมแล้ว</a></li>
                                  <li class="event-item"><a href="{{url('event/board/'.$data->id)}}"><i class="fa fa-comments left" aria-hidden="true"></i>กระดานกิจกรรม</a></li>
                      </ul>
                  </div>
                  @elseif(in_array($data->id,$joined) AND ($data->creator==$user))
                  <div  class="card-action">
                      <ul class="event-menu ">
                        <li class="event-item"><a href="{{url('event/board/'.$data->id)}}"><i class="fa fa-star left" aria-hidden="true"></i>กิจกรรมของคุณ</a></li>
                      </ul>
                  </div>

                  @else
                  <div class="card-action " style="{{$display}}">
                      <ul class="event-menu">
                          <li class="event-item"><a href="#join{{$key}}" class="modal-trigger">
                              <i class="fa fa-plus-square-o left" aria-hidden="true"></i>เข้าร่วม</a></li>
                      </ul>
                  </div>


                  @endif


                  </div>

              </div>
              <div id="join{{$key}}" class="modal" style="width: 500px;">
                <div class="modal-content">
                  <h4>ยืนยันการเข้าร่วมกิจกรรม <b>{{$data->title}}</b></h4>
                  <p>คุณกำลังทำการเข้าร่วมกิจกรรมนี้</p>
                  <p>ต้องการเข้าร่วมกิจกรรมนี้จริงๆใช่หรือไม่</p>
                  <!--
                  <p>คุณต้องการเข้าร่วมกิจกรรม&nbsp;<b>{{$data->title}}</b>&nbsp;ใช่หรือไม่</p>
                -->
                </div>
                <div class="modal-footer">
                  <div class="modal-footer">
                      <a href="#!" class=" modal-action modal-close waves-effect btn-flat">ไม่ ขอคิดดูก่อน</a>
                      <a href="{{url('event/join/'.$data->id)}}" class=" modal-action modal-close waves-effect btn-flat green white-text">ใช่ ฉันต้องการเข้าร่วม</a>
                  </div>
               </div>
              </div>
              <div class="col s6" style="margin-left: 10px;">
                <div id="descrip" class="row" class="col s12" id="event_detail">
                  <table >

                    <tr>

                      <td><p>ชื่อกิจกรรม</p></td>
                      <td><p>{{$data->title}}
                      </p></td>
                    </tr>
                    <tr>
                      <td><p>โดย</p></td>
                      <td><p>{{$data->fname.'  '.$data->lname}}</p></td>
                    </tr>
                    <tr>
                      <td><p>สถานที่</p></td>
                      <td><p>{{$data->location}}</p></td>
                    </tr>
                    <tr>
                      <td><p>เริ่มวันที่ </p></td>
                      <td><p>{{$data->start_date}} ถึง {{$data->finish_date}}</p></td>

                    </tr>
                    <tr>
                      <td><p>เวลา</p></td>
                      <td><p>{{$data->start_time}} ถึง {{$data->finish_time}}</p></td>
                    </tr>
                    <tr>
                      <td><p>เบอร์ติดต่อ</p></td>
                      <td><p>{{$data->contact}}</p></td>
                    </tr>
                    <tr>
                      <td colspan="2"><h5>รายละเอียดกิจกรรม</h5></td>
                    </tr>
                    <tr>
                      <td colspan="2"><p>{{$data->description}}</p></td>
                    </tr>

                  </table>

                </div>
              </div>
            </div>
          </div>
        </li>

        @endforeach



      </ul>
    </div>
<!--กิจกรรมที่เข้าร่วมมมมม นะจ๊ะ-->
    <div id="attendevent" class="col s12">

      <ul class="collection event-border" data-collapsible="accordion">
        @foreach($joinEvent as $key=> $join)
        <?php
          $iii =array();
          $mem_join=0 ;
            foreach($ii as $key=>$i){
            $mem_join =DB::table('join_event')->where('eve_id','=',$i)->count();
            }

          ?>

        <li class=" collection-item">
          <div class="row">
            <div class="col s10 m9 l9" style="margin-top: 10px; margin-bottom: -25px; padding-left: 3%;">
              <span><i class="fa fa-calendar-o" aria-hidden="true" style="font-size: 20pt;"></i>
                &nbsp;&nbsp;&nbsp;<span style="font-size: 20pt">{{$join->title}}<span></span>



              </div>
            </div>

            <div  style="margin-top: 20px background-color:#eeeeee;">
              <div class="row" style="padding: 20px;">
                  <div class="col s4 center event-card" >
                      <div class="card">
                          <div class="card-image">
                              <img class=" materialboxed" src="{{url('img/uploads/events/'.$join->image)}}">
                          </div>
                          <?php
                          $now = Carbon::parse('now');
                          $start_date = Carbon::parse($join->start_date);
                          $dif = $lengthOfAd = $now->diffInDays($start_date,false);
                          if($dif<=0){
                            $color=' light-blue darken-3 ';
                            $message = 'กิจกรรมได้เริ่มไปแล้ว';

                        }else{
                            $color=' blue-grey darken-1 ';
                            $message = 'กิจกรรมเริ่มต้นในอีก '.$dif.' วัน';
                          }
                          ?>
                          <div class="card-content {{$color}}">
                              <p class="ev-status">{{$message}}</p>
                          </div>
                          @if($join->event->creator == $user)
                          <div class="card-action">
                              <ul class="event-menu">

                                  <li class="event-item">
                                    <a href="{{url('event/board/'.$join->eve_id)}}"><i class="fa fa-star left" aria-hidden="true"></i>กิจกรรมของคุณ</a></li>

                              </ul>
                          </div>
                         @else
                          <div class="card-action">
                              <ul class="event-menu">
                                  <li id="cancelE" class="event-item">
                                  <a href="#cancel{{$key}}" class="modal-trigger"><i class="fa fa-minus-square-o left" aria-hidden="true"></i>ยกเลิกการเข้าร่วม</a></li>
                                  <li id="Eboard" class="event-item">
                                    <a href="{{url('event/board/'.$join->eve_id)}}"><i class="fa fa-comments left" aria-hidden="true"></i>กระดานกิจกรรม</a></li>

                              </ul>
                          </div>

                          @endif
                      </div>


                  </div>

                  <div id="cancel{{$key}}" class="modal" style="width: 480px;">
                      <div class="modal-content">
                        <h4>ยกเลิกการเข้าร่วมกิจกรรม <b>{{$join->title}}</b></h4>
                        <p>คุณกำลังทำการยกเลิกการเข้าร่วมกิจกรรมนี้</p>
                        <p>ต้องการยกเลิกจริงๆใช่หรือไม่</p>

                      </div>
                      <div class="modal-footer">
                          <a href="#!" class=" modal-action modal-close waves-effect waves-light btn red darken-3" style="margin-right: 5px;">ยกเลิก</a>
                          <a href="{{url('event/cancel/'.$join->eve_id)}}" class=" modal-action modal-close waves-effect waves-light btn cyan lighten-1" style="margin-right: 5px;">ใช่</a>
                      </div>
                  </div>

              <div class="col s6" style="margin-left: 10px;">
                <div class="row" class="col s12" id="event_detail">
                  <table >
                    <tr>
                      <td><p>ชื่อกิจกรรม</p></td>
                      <td><p>{{$join->title}}</p></td>
                    </tr>
                    <tr>
                      <td><p>โดย</p></td>
                      <td><p>{{$join->fname.'  '.$join->lname}}</p></td>
                    </tr>
                    <tr>
                      <td><p>สถานที่</p></td>
                      <td><p>{{$join->location}}</p></td>
                    </tr>
                    <tr>
                      <td><p>เริ่มวันที่ </p></td>
                      <td><p>{{$join->start_date}} ถึง {{$join->finish_date}}</p></td>

                    </tr>
                    <tr>
                      <td><p>เวลา</p></td>
                      <td><p>{{$join->start_time}} ถึง {{$join->finish_time}}</p></td>
                    </tr>
                    <tr>
                      <td><p>เบอร์ติดต่อ</p></td>
                      <td><p>{{$join->contact}}</p></td>
                    </tr>
                    <tr>
                      <td colspan="2"><h5>รายละเอียดกิจกรรม</h5></td>
                    </tr>
                    <tr>
                      <td colspan="2"><p>{{$join->description}}</p></td>
                    </tr>

                  </table>

                </div>
              </div>
            </div>
          </div>
        </li>

        @endforeach


          </ul>
        </div>
      </div>


<!--กิจกรรมของเราไง-->

        <div id="myevent" class="col s12">

          <ul class="collection" style="margin-top: 17px;">
            <ul class="collapsible " data-collapsible="accordion" style="margin-top: 0%;">
              <li>
                <div id="addE" class="collapsible-header add-ev-btn" >

                    <i class="fa fa-plus-circle" aria-hidden="true" ></i>เพิ่มกิจกรรม
                  </div>

                <div class="collapsible-body add-ebody" >
                  <div class="row">
                     <form class="col s12" method="POST" action="{{url('event/create')}}" enctype="multipart/form-data">
                       <div class="row">
                         <div class="input-field col s12">
                          <i class="material-icons prefix">event_note</i>
                           <input placeholder="ตัวอย่าง: กิจกรรมปลูกป่า" name="title" id="event-name" type="text" class="validate" required>
                           {{ csrf_field() }}
                           <label for="event-name">ชื่อกิจกรรม</label>
                         </div>
                       </div>
                       <div class="row">
                         <div class="input-field col s4">
                          <i class="material-icons prefix">people</i>
                           <input name="max_amount" id="amount-attend" type="number" class="validate" min="1" max="50" value="10" required>

                           <label for="amount-attend">จำนวนผู้เข้าร่วมสูงสุด</label>
                         </div>
                       </div>
                       <div class="row">
                         <div class="input-field col s12">
                         <i class="material-icons prefix">location_on</i>
                           <textarea placeholder="ตัวอย่าง: 11/2 ซ.สวยสุดในสอย ถนนพระราม32 เขตดุสิต" name="location" id="address" class="materialize-textarea" required></textarea>
                           <label for="address">ที่อยู่จัดกิจกรรม</label>
                         </div>
                         </div>
                         <div class="row">
                             <div class="col s3 etime-col-res">
                                 <p><i class="etime-icon material-icons left">schedule</i>เวลาจัดกิจกรรม</p>
                             </div>
                             <div class="input-field col s3 etime-col">
                                <input placeholder="12:00 น."  id="event-name" name="start_time"type="time" class="validate" required>
                            </div>
                            <div class="col s1" style="width: 6%;">
                                 <p>ถึง</p>
                             </div>
                             <div class="input-field col s3 etime-col">
                                 <input placeholder="13:00 น." id="event-name" name="finish_time"type="time" class="validate" required>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col s3 etime-col-res">
                                 <p><i class="material-icons prefix etime-icon">today</i>&nbsp&nbspวันที่จัดกิจกรรม</p>
                             </div>
                             <div class=" col s3 etime-col">
                               <p>

                                 <input type="date" class="datepicker" name="dob" >
                                 <!--<input type="date" name="dob" value="1941-08-07">-->
                             </p>
                                <input  type="date" class="datepicker" name="start_date"  required>
                            </div>
                            <div class="col s1" style="width: 6%;">
                                 <p>ถึง</p>
                             </div>
                             <div class="input-field col s3 etime-col">
                                 <input type="date"  class="datepicker" name="finish_date"  required>
                             </div>
                         </div>

                         <div class="row">
                           <div class="input-field col s12" style="margin-top: 32px;">
                               <i class="material-icons prefix">phone</i>
                             <input placeholder="ตัวอย่าง: 081-2345678" name="contact" id="event-name" type="text" class="validate" required>

                             <label for="event-name">เบอร์โทรติดต่อ</label>
                           </div>
                          </div>
                         <div class="row">
                              <div class="col s3 etime-col-res">
                                  <p><i class="etime-icon material-icons left">satellite</i>อัพโหลดรูปภาพ</p>
                              </div>

                              <div class="input-field col s3 epic-col">
                                 <input type="file" name="files" accept="image/*" id="uploadImage">
                             </div><br>
                             <div class="row">
                             <div id="show_pic_box" style="margin-top:5%;margin-left:10%">
                               <img  id="show_pic" style="width:70%"/>
                               <script>
                               document.getElementById("uploadImage").onchange = function () {
                                   var reader = new FileReader();

                                   reader.onload = function (e) {
                                       // get loaded data and render thumbnail.
                                       document.getElementById("show_pic").src = e.target.result;
                                   };

                                   // read the image file as a data URL.
                                   reader.readAsDataURL(this.files[0]);
                               };

                               </script>

                             </div>
                           </div>
                         </div>
                               <div class="row">
                               <div class="input-field col s12" style="margin-top: 52px;">
                               <i class="material-icons prefix">description</i>
                                 <textarea placeholder="ตัวอย่าง: ช่วยสอนหนังสือเด็ก" name="description" id="edetail" class="materialize-textarea" required></textarea>
                                 <label for="edetail">รายละเอียดกิจกรรม</label>
                               </div>
                               </div>
                               <div class="row">
                               <div class="input-field col s12">
                                <i class="material-icons prefix">link</i>
                                 <input placeholder="ตัวอย่าง: www.facebook.com" name="url" id="url" type="text" class="validate">
                                 <label for="url">ลิงค์ภายนอก</label>
                               </div>
                             </div>
                             <div class="row">
                               <div class="col s12 offset-s8 btn-event">
                                 <button type="reset" class="waves-effect waves-light btn white black-text">ล้าง</button>
                                 <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right" name="action">send</i>สร้างกิจกรรม</button>
                               </div>
                             </div>
                     </form>
                 </div>

                </div>

              </li>
            </ul>

            @foreach($myEvent as $key => $mine)
            <li class=" collection-item event-border">
<div class="row">

              <div class="row">
                <div class="col s12" style="margin-top: 10px; margin-bottom: -25px; padding-left: 3%;">
                  <i class="fa fa-calendar-o" aria-hidden="true" style="font-size: 20pt;"></i>&nbsp;&nbsp;&nbsp;
                  <span style="font-size: 20pt">{{$mine->title}}
                    <?php $m_name = DB::table('join_event')->join('accounts','join_event.user_id','=','accounts.id')->where('eve_id','=',$mine->id)->get(); ?>
                      <?php $m = DB::table('join_event')->where('eve_id',$mine->id)->count(); ?>


                      </div>


                  </div>

                </div>

                <div  >
                  <div class="row" >
                    <div class="col s4 center event-card" >
                      <div class="card">
                        <div class="card-image">
                          <img class=" materialboxed" src="{{url('img/uploads/events/'.$mine->image)}}">
                        </div>
                  <?php
                  $now = Carbon::parse('now');
                  $start_date = Carbon::parse($mine->start_date);
                  $dif = $lengthOfAd = $now->diffInDays($start_date,false);
                  if($dif<0){
                    $color=' light-blue darken-3 ';
                    $message = 'กิจกรรมได้เริ่มไปแล้ว';

                }else{
                    $color=' blue-grey darken-1 ';
                    $message = 'กิจกรรมเริ่มต้นในอีก '.$dif.' วัน';
                  }

                  ?>
                        <div class="card-content {{$color}}">
                            <p class="ev-status">{{$message}}</p>
                        </div>

                        <div class="card-action">
                            <ul class="event-menu">
                                <li id="mng1" class="event-item"><a href="#edit{{$key}}" class="modal-trigger"><i class="fa fa-pencil-square-o left" aria-hidden="true"></i>แก้ไข</a>
                                </li>
                                <li id="mng2" class="event-item"><a href="#eve-del{{$key}}" class="modal-trigger">
                                    <i class="fa fa-minus-square-o left" aria-hidden="true"></i>ลบกิจกรรม</a>
                                </li>
                                <li class="event-item"><a href="{{url('event/board/'.$mine->id)}}"><i class="fa fa-comments left" aria-hidden="true"></i>กระดานกิจกรรม</a></li>
                            </ul>
                        </div>

                      </div>
                    </div>

                    <div class="col s6" style="margin-left: 10px;">

                      <div class="row" class="col s12" id="event_detail">
                        <table cellpadding="5px">
                          <tr >
                            <td ><p>ชื่อกิจกรรม</p></td>
                            <td ><p>{{$mine->title}}</p></td>
                          </tr>
                          <tr>
                            <td ><p>โดย</p></td>
                            <td><p>{{$mine->fname.'  '.$mine->lname}}</p></td>
                          </tr>
                          <tr>
                            <td><p>สถานที่</p></td>
                            <td><p>{{$mine->location}}</p></td>
                          </tr>

                          <tr>
                            <td><p>เริ่มวันที่ </p></td>
                            <td><p>{{$mine->start_date}} ถึง {{$mine->finish_date}}</p></td>

                          </tr>
                          <tr>
                            <td><p>เวลา</p></td>
                            <td><p>{{$mine->start_time}} ถึง {{$mine->finish_time}}</p></td>
                          </tr>
                          <tr>
                            <td><p>เบอร์ติดต่อ</p></td>
                            <td><p>{{$mine->contact}}</p></td>
                          </tr>
                          <tr>
                            <td colspan="2"><h5>รายละเอียดกิจกรรม</h5></td>
                          </tr>
                          <tr>
                            <td colspan="2"><p>{{$mine->description}}</p></td>
                          </tr>
                        </table>

                      </div>

                    </div>


                    </div>
                    <!---ส่วนของ delete event-->
                    <div id="eve-del{{$key}}" class="modal" style="width: 480px; overflow: hidden;">
                      <div class="modal-content">
                          <h4>ลบกิจกรรม</h4>
                          <p>คุณกำลังจะทำการลบการกิจกรรมนี้</p>
                          <p>ต้องการลบกิจกรรมนี้จริงๆใช่หรือไม่</p>
                      </div>
                      <div class="modal-footer">
                        <div class="modal-footer">
                            <a href="#!" class=" modal-action modal-close waves-effect btn-flat">ไม่ ขอคิดดูก่อน</a>
                            <a href="{{url('/event/remove/'.$mine->id)}}" class=" modal-action modal-close waves-effect btn-flat green white-text">ใช่ ลบกิจกรรมนี้</a>
                        </div>
                        <!--<a  class=" modal-action modal-close waves-effect waves-light btn red darken-3" style="margin-right: 5px;">ยกเลิก</a>
                        <a href="{{url('/event/remove/'.$mine->id)}}" class=" modal-action waves-effect waves-light btn cyan lighten-1" style="margin-right: 5px;">ใช่</a>
                    -->  </div>
                    </div>


                    <!--ส่วนของ edit event-->
                    <div id="edit{{$key}}" class="modal" style="width: 650px;">
                        <div class="modal-content">
                            <h4>แก้ไขกิจกรรม</h4>
                            <div class="row" >
                                <form class="col s12" action="{{url('/event/'.$mine->id.'/edit')}}" method="POST" enctype="multipart/form-data">

                                      <input type="hidden" name="_token" value="{{csrf_token()}}">

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">event_note</i>
                                            <input placeholder="ตัวอย่าง: กิจกรรมปลูกป่า" id="event-name" type="text" class="validate" name="title"value="{{$mine->title}}" required>
                                            <label for="event-name">ชื่อกิจกรรม</label>

                                        </div>
                                    </div>
                                    <div class="row">
                                     <div class="input-field col s4">
                                      <i class="material-icons prefix">people</i>
                                       <input name="max_amount" id="amount-attend" type="number" class="validate" value="{{$mine->max_amount}}" required>

                                       <label for="amount-attend">จำนวนผู้เข้าร่วมสูงสุด</label>
                                     </div>
                                   </div>


                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">location_on</i>

                                            <textarea placeholder="ตัวอย่าง: 11/2 ซ.สวยสุดในสอย ถนนพระราม32 เขตดุสิต" id="address" class="materialize-textarea" name="location" required>{{$mine->location}}</textarea>
                                            <label for="address">ที่อยู่จัดกิจกรรม</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s3 etime-colm-res">
                                            <p><i class="etime-icon material-icons left">schedule</i>เวลาจัดกิจกรรม</p>
                                        </div>

                                        <div class="input-field col s3 etime-colm">
                                            <input placeholder="12:00 น." id="event-name" type="text" class="validate" name="start_time" value="{{$mine->start_time}}" required>
                                        </div>

                                        <div class="col s1">
                                            <p>ถึง</p>
                                        </div>

                                        <div class="input-field col s3 etime-colm">
                                            <input placeholder="13:00 น." id="event-name" type="text" class="validate" name="finish_time"value="{{$mine->finish_time}}" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s3 etime-colm-res">
                                            <p><i class="material-icons prefix etime-icon">today</i>&nbsp&nbsp วันที่จัดกิจกรรม</p>
                                        </div>

                                        <div class="input-field col s3 etime-colm">

                                            <input id="date" type="date" class="datepicker" name="start_date" value="{{$mine->start_date}}">
                                        </div>

                                        <div class="col s1">
                                            <p>ถึง</p>
                                        </div>

                                        <div class="input-field col s3 etime-colm">
                                            <input id="date" type="date" class="datepicker" name="finish_date"value="{{$mine->finish_date}}">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">phone</i>
                                            <input type="text" placeholder="ตัวอย่าง: 085-994-9230" name="contact"value="{{$mine->contact}}" id="tel" required></input>
                                            <label for="tel">เบอร์โทรศัพท์ติดต่อ</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s3 etime-colm-res">
                                            <p><i class="etime-icon material-icons left">satellite</i>อัพโหลดรูปภาพ</p>
                                        </div>
                                        <div class="input-field col s3 epic-colm" style="    margin-top: -3px;">
                                            <input type="file" name="files" id="uploadImage">
                                        </div>
                                        <div id="show_pic_box">
                                          <img  id="show_pic" style="width:90%"/>
                                          <script>
                                          document.getElementById("uploadImage").onchange = function () {
                                              var reader = new FileReader();

                                              reader.onload = function (e) {
                                                  // get loaded data and render thumbnail.
                                                  document.getElementById("show_pic").src = e.target.result;
                                              };

                                              // read the image file as a data URL.
                                              reader.readAsDataURL(this.files[0]);
                                          };
                                          </script>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12" style="margin-top: 52px;">
                                            <i class="material-icons prefix">description</i>
                                            <textarea placeholder="ตัวอย่าง: ช่วยสอนหนังสือเด็ก" id="edetail" class="materialize-textarea" name="description"  required>{{$mine->description}}</textarea>
                                            <label for="edetail">รายละเอียดกิจกรรม</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">link</i>
                                            <input name="url" placeholder="ตัวอย่าง: www.facebook.com" id="url" type="text" class="validate" value="{{$mine->url}}">
                                            <label for="url">ลิงค์ภายนอก</label>
                                        </div>
                                    </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button href="#!" class=" modal-action modal-close waves-effect btn-flat">ยกเลิกการแก้ไข</button>
                            <!-- <a href="{{url('event/edit/'.$mine->id)}}" class=" modal-action modal-close waves-effect btn-flat green white-text">บันทึกการแก้ไข</a> -->
                            <button class="modal-action waves-effect btn-flat green white-text" type="submit" name="action">บันทึกการแก้ไข</button>
                        </div>
                          </form>
                    </div>


                  </div>
                    @endforeach
                </div>
              </li>

            </ul>

            @stop
