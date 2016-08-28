@extends('site.layout')
@section('maincontent')
<script type="text/javascript">
   $(document).ready(function () {
       $(".button-collapse").sideNav();
   })

   $(document).ready(function () {
       $('.modal-trigger').leanModal();
       $('#modal1').openModal();
       $('#modal1').closeModal();
       $('#edit').openModal();
       $('#edit').closeModal();
   });

   function joinedEvent(){
       var x = document.getElementById("joinButton");
       if (x.value == "กดเข้าร่วม"){
           x.value = "เข้าร่วมแล้ว";
           $('#joinButton').removeClass('btn').addClass('btn disabled');
           $('#unjoinButton').removeClass('btn disabled').addClass('btn');
       }
       else if (x.value == "เข้าร่วมแล้ว") {
       }
   }

   function unjoinedEvent(){
       var x = document.getElementById("joinButton");
       var y = document.getElementById("unjoinButton");
       if (x.value == "เข้าร่วมแล้ว"){
           x.value = "กดเข้าร่วม";
           y.value = "ยกเลิก";
           $('#unjoinButton').removeClass('btn').addClass('btn disabled');
           $('#joinButton').removeClass('btn disabled').addClass('btn');
       }
       else if (x.value == "เข้าร่วมแล้ว") {
           x.value = "กดเข้าร่วม";
       }

   }
  // Creates a dropdown of 15 years to control year
 });
</script>

<style type="text/css">

    @media screen and (max-width: 1025px) {

        .secnav{
            margin-left: 1%;
        }
    }

</style>
<div id="activities" >
        <center><h1 style="font-size: 36pt; text-shadow: 2px 2px #3A3737;" class="hello-content">{{$title}}</h1></center>
    </div>
    <div class="section"></div>
    <div class="container">
           <div class="row">
               <div class="col s12 eventOption">
                   <ul class="tabs tab-set" style="background-color: #BC2C33;">
                       <li class="tab"><a href="#allevent">กิจกรรมทั้งหมด</a></li>
                       <li class="tab"><a href="#attendevent">กิจกรรมที่เข้าร่วม</a></li>
                       <li class="tab"><a href="#myevent">กิจกรรมของฉัน</a></li>

                   </ul>
               </div>
               <!--Start tab-->
               <div id="allevent" class="col s12">
                   <ul class="collection" data-collapsible="accordion">
                     @foreach($event as $data)
                       <li class=" collection-item">
                           <div class="row">
                               <div class="col s10 m9 l9" style="margin-top: 10px; margin-bottom: -10px;">
                                   <a href="event_activity_owner.html"><i class="fa fa-calendar-o" aria-hidden="true" style="font-size: 20pt;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size: 16pt">{{$data->title}}<span></span>
                                       <a href="#partiList2" class="modal-trigger"><div class="chip" align="right">7 ผู้เข้าร่วม</div></a>

                                       <div id="partiList2" class="modal" style="width: 500px;">
                                           <ul class="collection">
                                               <li class="collection-item avatar">
                                                   <img src="img/f1.jpg" alt="" class="circle">
                                                   <p>First Line </p>
                                                   <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                                               </li>
                                               <li class="collection-item avatar">
                                                   <img src="img/f1.jpg" alt="" class="circle">
                                                   <p>First Line </p>
                                                   <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                                               </li>
                                               <li class="collection-item avatar">
                                                   <img src="img/f1.jpg" alt="" class="circle">
                                                   <p>First Line </p>
                                                   <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                                               </li>
                                           </ul>
                                           <div class="modal-footer">
                                               <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                               <div  style="margin-top: 20px background-color:#eeeeee;">

                                   <div class="row" style="padding: 20px;">
                                       <div class="col s4 center" >
                                           <div class="card">
                                               <div class="card-image">
                                                   <img class=" materialboxed" src="img/love.jpg">
                                               </div>
                                               </div>
                                               @if (strcmp($data->status,"unavailable")==0)
          <!--เริ่มแสดง status (unavailable)--> <div class="card-action card-panel red darken-4" id="event_status" >
                                                   <p style="color: white;">ปิดรับสมัคร</p>
                                                </div>
                                                @elseif(strcmp($data->status,"available")==0 )
                                                        <div class="card-action card-panel  green darken-2" id="event_status" >
                                                            <p style="color: white;">กำลังเปิดรับ</p>
                                                        </div>

                                                    <a class="waves-effect waves-light btn-large modal-trigger " href="#modal1" id="EventButton"  value=""><i class="fa fa-plus-square-o left" aria-hidden="true" style="margin-right: 5px;"></i>เข้าร่วม </a>
                                                    <a class="waves-effect waves-light btn-large blue darken-4" href="#"><i class="fa fa-comments left" aria-hidden="true" style="margin-right: 5px;"></i>กระดานกิจกรรม</a>

                                                <div id="modal1" class="modal" style="width: 480px;">
                                                    <div class="modal-content">
                                                        <p>คุณต้องการเข้าร่วมกิจกรรม&nbsp;ชื่อกิจกรรม&nbsp;ใช่หรือไม่</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#!" class=" modal-action modal-close waves-effect waves-light btn red darken-3" style="margin-right: 5px;">ยกเลิก</a>
                                                        <a href="#!" class=" modal-action modal-close waves-effect waves-light btn cyan lighten-1" style="margin-right: 5px;">ใช่</a>
                                                    </div>
                                                </div>
                                                @endif


                                       </div>

                                       <div class="col s6" style="margin-left: 10px;">
                                           <div class="row" class="col s12" id="event_detail">
                                               <table >
                                                   <tr>

                                                       <td><p>ชื่อกิจกรรม</p></td>
                                                       <td><p>{{$data->title}}</p></td>
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
                                                       <td><p>{{$data->start_date}}ถึง วันที่ {{$data->finish_date}}</p></td>

                                                   </tr>
                                                   <tr>
                                                       <td><p>เวลา</p></td>
                                                       <td><p>{{$data->start_time}}ถึง{{$data->finish_time}}</p></td>
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

                       <div id="attendevent" class="col s12">
                           <ul class="collection" data-collapsible="accordion">
                               <li class=" collection-item"><div class="row">
                                   <div class="col s10 m9 l9" style="margin-top: 10px; margin-bottom: -10px;">
                                       <i class="fa fa-calendar-o" aria-hidden="true" style="font-size: 20pt;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size: 16pt">ชื่อกิจกรรม<span>
                                       <a href="#partiList" class="modal-trigger"><div class="chip" align="right">7 ผู้เข้าร่วม</div></a>
                                       <div id="partiList" class="modal" style="width: 500px;">
                                           <ul class="collection">
                                               <li class="collection-item avatar">
                                                   <img src="img/f1.jpg" alt="" class="circle">
                                                   <p>First Line </p>
                                                   <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                                               </li>
                                               <li class="collection-item avatar">
                                                   <img src="img/f1.jpg" alt="" class="circle">
                                                   <p>First Line </p>
                                                   <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                                               </li>
                                               <li class="collection-item avatar">
                                                   <img src="img/f1.jpg" alt="" class="circle">
                                                   <p>First Line </p>
                                                   <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                                               </li>
                                           </ul>
                                           <div class="modal-footer">
                                               <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div  style="margin-top: 20px background-color:#eeeeee;">
                                   <div class="row" style="padding: 20px;">
                                       <div class="col s4 center" >
                                           <div class="card">
                                               <div class="card-image">
                                                   <img class=" materialboxed" src="img/love.jpg">
                                               </div>
                                               <div class="card-action card-panel cyan accent-4" id="event_status" >
                                                   <p style="color: white">วันนี้เป็นวันกิจกรรม!</p>
                                               </div>
                                           </div>
                                           <a style=" height: 100%"class="waves-effect waves-light btn-large modal-trigger " href="#cancel" id="EventButton"  value=""><i class="fa fa-minus-square-o left" aria-hidden="true" style="margin-right: 5px;"></i>ยกเลิก</a>
                                           <a style=" height: 100%"class="waves-effect waves-light btn-large blue darken-4" href="event_activity_party.html"><i class="fa fa-comments left" aria-hidden="true" style="margin-right: 5px;"></i>กระดานกิจกรรม</a>
                                       </div>
                                       <div id="cancel" class="modal" style="width: 480px;">
                                           <div class="modal-content">
                                               <p>คุณต้องการยกเลิกการเข้าร่วมกิจกรรม&nbsp;ชื่อกิจกรรม&nbsp;ใช่หรือไม่</p>
                                           </div>
                                           <div class="modal-footer">
                                               <a href="#!" class=" modal-action modal-close waves-effect waves-light btn red darken-3" style="margin-right: 5px;">ยกเลิก</a>
                                               <a href="#!" class=" modal-action modal-close waves-effect waves-light btn cyan lighten-1" style="margin-right: 5px;">ใช่</a>
                                           </div>
                                       </div>
                                       <div class="col s6" style="margin-left: 10px;">
                                           <div class="row" class="col s12" id="event_detail">
                                               <table cellpadding="5px">
                                                   <tr>
                                                       <td><p>ชื่อกิจกรรม</p></td>
                                                       <td><p>ชื่อกิจกรรม</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td ><p>โดย</p></td>
                                                       <td><p>ยายละม้าย คล้ายจะเป็นลม</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td><p>สถานที่</p></td>
                                                       <td><p>สวนธนบุรีรัมย์</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td><p>วัน</p></td>
                                                       <td><p>2&nbsp;-&nbsp;4 เมษายน 2559</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td><p>เวลา</p></td>
                                                       <td><p>12.00น. &nbsp;-&nbsp;16.00น.</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td><p>เบอร์ติดต่อ</p></td>
                                                       <td><p>081-999-9999</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td colspan="2"><h5>รายละเอียดกิจกรรม</h5></td>
                                                   </tr>
                                                   <tr>
                                                       <td colspan="2"><p>ลงสนามด้วยความสง่า เก่งกล้าเหนือใคร เราเอาจริงมาชิงชัย ไม่มีใครหาญสู้ เรามาเชียร์เป็นแรงช่วยด้วยใจของเพื่อนพ้อง บางมดจะได้ครองความเป็นหนึ่งเหนือใคร ความเป็นหนึงเหนือใคร</p></td>
                                                   </tr>
                                               </table>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </li>
                           <li class=" collection-item">
                               <div class="row">
                                   <div class="col s10 m9 l9" style="margin-top: 10px; margin-bottom: -10px;">
                                       <i class="fa fa-calendar-o" aria-hidden="true" style="font-size: 20pt;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size: 16pt">ชื่อกิจกรรม<span>
                                       <a href="#partiList" class="modal-trigger"><div class="chip" align="right">7 ผู้เข้าร่วม</div></a>
                                       <div id="partiList" class="modal" style="width: 500px;">
                                           <ul class="collection">
                                               <li class="collection-item avatar">
                                                   <img src="img/f1.jpg" alt="" class="circle">
                                                   <p>First Line </p>
                                                   <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                                               </li>
                                               <li class="collection-item avatar">
                                                   <img src="img/f1.jpg" alt="" class="circle">
                                                   <p>First Line </p>
                                                   <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                                               </li>
                                               <li class="collection-item avatar">
                                                   <img src="img/f1.jpg" alt="" class="circle">
                                                   <p>First Line </p>
                                                   <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                                               </li>
                                           </ul>
                                           <div class="modal-footer">
                                               <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div  style="margin-top: 20px background-color:#eeeeee;">
                                   <div class="row" style="padding: 20px;">
                                       <div class="col s4 center" >
                                           <div class="card">
                                               <div class="card-image">
                                                   <img class=" materialboxed" src="img/love.jpg">
                                               </div>
                                               <div class="card-action card-panel yellow darken-4" id="event_status" >
                                                   <p style="color: #fff;">กิจกรรมเริ่มพรุ่งนี้</p>
                                               </div>
                                           </div>
                                           <a style=" height: 100%"class="waves-effect waves-light btn-large modal-trigger " href="#cancel2" id="EventButton"  value=""><i class="fa fa-minus-square-o left" aria-hidden="true" style="margin-right: 5px;"></i>ยกเลิก</a>
                                           <a style=" height: 100%"class="waves-effect waves-light btn-large blue darken-4" href="event_activity_party.html"><i class="fa fa-comments left" aria-hidden="true" style="margin-right: 5px;"></i>กระดานกิจกรรม</a>
                                       </div>
                                       <div id="cancel2" class="modal" style="width: 480px;">
                                           <div class="modal-content">
                                               <p>คุณต้องการยกเลิกการเข้าร่วมกิจกรรม&nbsp;ชื่อกิจกรรม&nbsp;ใช่หรือไม่</p>
                                           </div>
                                           <div class="modal-footer">
                                               <a href="#!" class=" modal-action modal-close waves-effect waves-light btn red darken-3" style="margin-right: 5px;">ยกเลิก</a>
                                               <a href="#!" class=" modal-action modal-close waves-effect waves-light btn cyan lighten-1" style="margin-right: 5px;">ใช่</a>
                                           </div>
                                       </div>
                                       <div class="col s6" style="margin-left: 10px;">
                                           <div class="row" class="col s12" id="event_detail">
                                               <table cellpadding="5px">
                                                   <tr>
                                                       <td><p>ชื่อกิจกรรม</p></td>
                                                       <td><p>ชื่อกิจกรรม</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td ><p>โดย</p></td>
                                                       <td><p>คุณสมร</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td><p>สถานที่</p></td>
                                                       <td><p>สวนธนบุรีรัมย์</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td><p>วัน</p></td>
                                                       <td><p>2&nbsp;-&nbsp;4 เมษายน 2559</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td><p>เวลา</p></td>
                                                       <td><p>12.00น. &nbsp;-&nbsp;16.00น.</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td><p>เบอร์ติดต่อ</p></td>
                                                       <td><p>081-999-9999</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td colspan="2"><h5>รายละเอียดกิจกรรม</h5></td>
                                                   </tr>
                                                   <tr>
                                                       <td colspan="2"><p>ลงสนามด้วยความสง่า เก่งกล้าเหนือใคร เราเอาจริงมาชิงชัย ไม่มีใครหาญสู้ เรามาเชียร์เป็นแรงช่วยด้วยใจของเพื่อนพ้อง บางมดจะได้ครองความเป็นหนึ่งเหนือใคร ความเป็นหนึงเหนือใคร</p></td>
                                                   </tr>
                                               </table>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </li>
                           <li class=" collection-item">
                               <div class="row">
                                   <div class="col s10 m9 l9" style="margin-top: 10px; margin-bottom: -10px;">
                                       <i class="fa fa-calendar-o" aria-hidden="true" style="font-size: 20pt;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size: 16pt">ชื่อกิจกรรม<span>
                                       <a href="#partiList" class="modal-trigger"><div class="chip" align="right">7 ผู้เข้าร่วม</div></a>
                                       <div id="partiList" class="modal" style="width: 500px;">
                                           <ul class="collection">
                                               <li class="collection-item avatar">
                                                   <img src="img/f1.jpg" alt="" class="circle">
                                                   <p>First Line </p>
                                                   <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                                               </li>
                                               <li class="collection-item avatar">
                                                   <img src="img/f1.jpg" alt="" class="circle">
                                                   <p>First Line </p>
                                                   <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                                               </li>
                                               <li class="collection-item avatar">
                                                   <img src="img/f1.jpg" alt="" class="circle">
                                                   <p>First Line </p>
                                                   <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                                               </li>
                                           </ul>
                                           <div class="modal-footer">
                                               <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div  style="margin-top: 20px background-color:#eeeeee;">
                                   <div class="row" style="padding: 20px;">
                                       <div class="col s4 center" >
                                           <div class="card">
                                               <div class="card-image">
                                                   <img class=" materialboxed" src="img/love.jpg">
                                               </div>
                                               <div class="card-action card-panel green darken-2" id="event_status" >
                                                   <p style="color: white;">กิจกรรมเริ่มต้นในอีก 10 วัน</p>
                                               </div>
                                           </div>
                                           <a style="height: 100%"class="waves-effect waves-light btn-large modal-trigger" href="#cancel3" id="EventButton" value=""><i class="fa fa-minus-square-o left" aria-hidden="true" style="margin-right: 5px;"></i>ยกเลิก</a>
                                           <a style=" height: 100%"class="waves-effect waves-light btn-large blue darken-4" href="event_activity_party.html"><i class="fa fa-comments left" aria-hidden="true" style="margin-right: 5px;"></i>กระดานกิจกรรม</a>
                                       </div>
                                       <div id="cancel3" class="modal" style="width: 480px;">
                                           <div class="modal-content">
                                               <p>คุณต้องการยกเลิกการเข้าร่วมกิจกรรม&nbsp;ชื่อกิจกรรม&nbsp;ใช่หรือไม่</p>
                                           </div>
                                           <div class="modal-footer">
                                               <a href="#!" class=" modal-action modal-close waves-effect waves-light btn red darken-3" style="margin-right: 5px;">ยกเลิก</a>
                                               <a href="#!" class=" modal-action modal-close waves-effect waves-light btn cyan lighten-1" style="margin-right: 5px;">ใช่</a>
                                           </div>
                                       </div>
                                       <div class="col s6" style="margin-left: 10px;">
                                           <div class="row" class="col s12" id="event_detail">
                                               <table cellpadding="5px">
                                                   <tr>
                                                       <td><p>ชื่อกิจกรรม</p></td>
                                                       <td ><p>ชื่อกิจกรรม</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td ><p>โดย</p></td>
                                                       <td><p>คุณสมร</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td><p>สถานที่</p></td>
                                                       <td><p>สวนธนบุรีรัมย์</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td><p>วัน</p></td>
                                                       <td><p>2&nbsp;-&nbsp;4 เมษายน 2559</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td><p>เวลา</p></td>
                                                       <td><p>12.00น. &nbsp;-&nbsp;16.00น.</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td><p>เบอร์ติดต่อ</p></td>
                                                       <td><p>081-999-9999</p></td>
                                                   </tr>
                                                   <tr>
                                                       <td colspan="2"><h5>รายละเอียดกิจกรรม</h5></td>
                                                   </tr>
                                                   <tr>
                                                       <td colspan="2"><p>ลงสนามด้วยความสง่า เก่งกล้าเหนือใคร เราเอาจริงมาชิงชัย ไม่มีใครหาญสู้ เรามาเชียร์เป็นแรงช่วยด้วยใจของเพื่อนพ้อง บางมดจะได้ครองความเป็นหนึ่งเหนือใคร ความเป็นหนึงเหนือใคร</p></td>
                                                   </tr>
                                               </table>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </li>
                       </ul>
                   </div>
                   <div id="myevent" class="col s12">

                       <ul class="collection">
                           <ul class="collapsible " data-collapsible="accordion">
                               <li>
                                 <div class="collapsible-header" style="height: 50px;">
                                     <p style="font-size:16pt;color:#d32f2f;text-align: center" >
                                         <i class="fa fa-plus-circle" aria-hidden="true" ></i>เพิ่มกิจกรรม
                                     </p>
                                 </div>
                                 <div class="collapsible-body" style="padding: 15px;">
                                     <table style="width:1000px;">
                                         <form action="" method="post">
                                             <tbody>
                                                 <tr>
                                                     <td style="text-align: right;">
                                                         ชื่อกิจกรรม
                                                     </td>
                                                     <td><input placeholder="กรอกชื่อกิจกรรมของคุณ เช่น ชวนเพื่อนกินข้าวกลางวัน" id="event_name" type="text" class="validate" required></td>
                                                 </tr>
                                                 <tr>
                                                     <td style="text-align: right;">
                                                         สถานที่
                                                     </td>
                                                     <td><input placeholder="กรอกรายละเอียด เช่น สยามพารากอน ชั้น G" id="location" type="text" class="validate" required></td>
                                                 </tr>

                                                 <tr>
                                                     <td style="text-align: right;">
                                                         เวลาจัดกิจกรรม
                                                     </td>
                                                     <td>
                                                         <input id="stime" type="datetime" class="validate" width="50px" placeholder="เช่น 12.00">&nbsp;&nbsp;ถึง &nbsp;&nbsp;<input id="stime" type="datetime" class="validate" width="50px" required placeholder="เช่น 14.00">
                                                     </td>
                                                 </tr>
                                                 <tr>
                                                     <td style="text-align: right;">
                                                         วันที่
                                                     </td>
                                                     <td> <input type="date" class="datepicker"></td>
                                                 </tr>
                                                 <tr>
                                                     <td style="text-align: right;">
                                                      เบอร์โทรศัพท์ในการติดต่อ
                                                  </td>
                                                  <td><input placeholder="เช่น 08x-xxx-xxxx" pattern="\d{3}-?\d{3}-?\d{4}" id="phonenumber" type="tel" maxlength="10" class="validate"  required></td>
                                              </tr>
                                              <tr>
                                                 <td style="text-align: right;">
                                                  รูปภาพ
                                              </td>
                                              <td> <input type="file" name="pic" accept="image/*"></td>
                                          </tr>

                                          <tr>
                                             <td style="text-align: right;">
                                              รายละเอียดกิจกรรม
                                          </td>
                                          <td>
                                              <input placeholder=""id="desc" type="text" class="validate">
                                          </td>
                                      </tr>

                                      <tr>
                                         <td colspan="2">
                                          <button class="btn waves-effect waves-light right" type="submit" name="action">ตกลง
                                           <i class="material-icons right">send</i>
                                       </button>
                                       <button style="margin-right: 10px;"class="btn waves-effect waves-light right yellow darken-4" type="reset" name="action">ล้าง

                                       </button>


                                   </td>
                               </tr>
                           </tbody>
                       </form>
                   </table>
               </div>
           </li>
       </ul>
       <li class=" collection-item">

           <div class="row">
               <div class="col s10 m9 l9" style="margin-top: 10px; margin-bottom: -10px;">
                   <i class="fa fa-calendar-o" aria-hidden="true" style="font-size: 20pt;"></i>&nbsp;&nbsp;&nbsp;<span style="font-size: 16pt">ชื่อกิจกรรม<span>
                   <a href="#myevePartiList" class="modal-trigger"><div class="chip" align="right">7 ผู้เข้าร่วม</div></a>
                   <div id="myevePartiList" class="modal" style="width: 500px;">

                       <ul class="collection">
                        <li class="collection-item avatar">
                         <img src="img/f1.jpg" alt="" class="circle">

                         <p>First Line </p>

                         <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                     </li>
                     <li class="collection-item avatar">
                         <img src="img/f1.jpg" alt="" class="circle">

                         <p>First Line </p>

                         <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                     </li>
                     <li class="collection-item avatar">
                         <img src="img/f1.jpg" alt="" class="circle">

                         <p>First Line </p>

                         <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;ติดตาม</a>
                     </li>
                 </ul>

                 <div class="modal-footer">
                     <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
                 </div>
             </div>
         </div>

     </div>

     <div  style="margin-top: 20px background-color:#eeeeee;">
       <div class="row" style="padding: 20px;">
           <div class="col s4 center" >
               <div class="card">
                   <div class="card-image">
                       <img class=" materialboxed" src="img/love.jpg">
                   </div>
                   <div class="card-action card-panel yellow darken-4" id="event_status" >
                       <p style="color: #fff;">กิจกรรมเริ่มพรุ่งนี้</p>
                   </div>

               </div>
               <a style=" height: 100%"class="waves-effect waves-light btn modal-trigger " href="#edit" id="EventButton"  value=""><i class="fa fa-pencil-square-o left" aria-hidden="true" style="margin-right: 5px;"></i>แก้ไข </a>
               <a style=" height: 100%"class="modal-trigger waves-effect waves-light btn red" href="#eve-del"><i class="fa fa-times left" aria-hidden="true" style="margin-right: 5px;"></i>ลบกิจกรรม</a>
               <a style=" height: 100%; margin-top: 15px;"class="waves-effect waves-light btn blue darken-4" href="event_activity_owner.html"><i class="fa fa-comments left" aria-hidden="true" style="margin-right: 5px;"></i>กระดานกิจกรรม</a>


           </div>
           <div id="eve-del" class="modal" style="width: 480px;">
               <div class="modal-content">
                   <p>คุณต้องการลบกิจกรรม&nbsp;ชื่อกิจกรรม&nbsp;ใช่หรือไม่</p>
               </div>
               <div class="modal-footer">
                   <a href="#!" class=" modal-action modal-close waves-effect waves-light btn red darken-3" style="margin-right: 5px;">ยกเลิก</a>
                   <a href="#!" class=" modal-action waves-effect waves-light btn cyan lighten-1" style="margin-right: 5px;">ใช่</a>
               </div>
           </div>
           <div id="edit" class="modal" style="width: 500px;height: 800px;">
               <div class="modal-content">
                <table>
                 <form action="" method="post">
                     <tbody>
                         <tr>
                             <td style="text-align: right;">
                                 ชื่อกิจกรรม
                             </td>
                             <td><input placeholder="กรอกชื่อกิจกรรมของคุณ เช่น ชวนเพื่อนกินข้าวกลางวัน" id="event_name" type="text" class="validate" value="ชื่อกิจกรรม" required></td>
                         </tr>
                         <tr>
                             <td style="text-align: right;">
                                 สถานที่
                             </td>
                             <td><input placeholder="กรอกรายละเอียด เช่น สยามพารากอน ชั้น G" id="location" type="text" class="validate" required value="สวนธนบุรีรัมย์"></td>
                         </tr>

                         <tr>
                             <td style="text-align: right;">
                                 เวลาจัดกิจกรรม
                             </td>
                             <td>
                                 <input id="stime" type="datetime" class="validate" width="50px" value="12.00" required>&nbsp;&nbsp;ถึง &nbsp;&nbsp;<input id="stime" type="datetime" class="validate" width="50px" value="16.00" required>
                             </td>
                         </tr>
                         <tr>
                             <td style="text-align: right;">
                                 วันที่
                             </td>
                             <td><input id="sdate" type="datetime" class="validate" width="50px" value="2-04-2559">&nbsp;&nbsp;ถึง &nbsp;&nbsp;<input id="edate" type="datetime" class="validate" width="50px" required value="4-04-2559"></td>
                         </tr>
                         <tr>
                             <td style="text-align: right;">
                              เบอร์โทรศัพท์ในการติดต่อ
                          </td>
                          <td><input placeholder="เช่น 08x-xxx-xxxx" pattern="\d{3}-?\d{3}-?\d{4}" id="phonenumber" type="tel" maxlength="10" class="validate" value="081-999-9999" required></td>
                      </tr>
                      <tr>
                         <td style="text-align: right;">
                          รูปภาพ
                      </td>
                      <td> <input type="file" name="pic" accept="image/*"></td>
                  </tr>

                  <tr>
                     <td style="text-align: right;">
                      รายละเอียดกิจกรรม
                  </td>
                  <td>
                      <input placeholder=""id="desc" type="text" class="validate" value="ลงสนามด้วยความสง่า เก่งกล้าเหนือใคร เราเอาจริงมาชิงชัย ไม่มีใครหาญสู้ เรามาเชียร์เป็นแรงช่วยด้วยใจของเพื่อนพ้อง บางมดจะได้ครองความเป็นหนึ่งเหนือใคร ความเป็นหนึงเหนือใคร">
                  </td>
              </tr>

              <tr>
                 <td colspan="2">
                  <button class="modal-action modal-close btn waves-effect waves-light right red" type="button" name="action">ยกเลิก

                  </button>
                  <button class="btn waves-effect waves-light right" type="button" name="action" style="margin-right: 10px;">บันทึก

                  </button>



              </td>
          </tr>
      </tbody>
   </form>
   </table>

   </div>

   </div>

   <div class="col s6" style="margin-left: 10px;">

       <div class="row" class="col s12" id="event_detail">
           <table cellpadding="5px">
               <tr >
                   <td ><p>ชื่อกิจกรรม</p></td>
                   <td ><p>ชื่อกิจกรรม</p></td>
               </tr>
               <tr>
                   <td ><p>โดย</p></td>
                   <td><p>คุณสมร</p></td>
               </tr>
               <tr>
                   <td><p>สถานที่</p></td>
                   <td><p>สวนธนบุรีรัมย์</p></td>
               </tr>
               <tr>
                   <td><p>วัน</p></td>
                   <td><p>2&nbsp;-&nbsp;4 เมษายน 2559</p></td>
               </tr>
               <tr>
                   <td><p>เวลา</p></td>
                   <td><p>12.00น. &nbsp;-&nbsp;16.00น.</p></td>
               </tr>
               <tr>
                   <td><p>เบอร์ติดต่อ</p></td>
                   <td><p>081-999-9999</p></td>
               </tr>
               <tr>
                   <td colspan="2"><h5>รายละเอียดกิจกรรม</h5></td>
               </tr>
               <tr>
                   <td colspan="2"><p>ลงสนามด้วยความสง่า เก่งกล้าเหนือใคร เราเอาจริงมาชิงชัย ไม่มีใครหาญสู้ เรามาเชียร์เป็นแรงช่วยด้วยใจของเพื่อนพ้อง บางมดจะได้ครองความเป็นหนึ่งเหนือใคร ความเป็นหนึงเหนือใคร</p></td>
               </tr>
           </table>

       </div>

   </div>
   </div>
   </div>
   </li>
   </ul>

@stop
