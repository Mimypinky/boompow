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


// Creates a dropdown of 15 years to control year
});
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
        <li class="tab"><a href="#allevent">กิจกรรมทั้งหมด</a></li>
        <li class="tab"><a href="#attendevent">กิจกรรมที่เข้าร่วม</a></li>
        <li class="tab"><a href="#myevent">กิจกรรมของฉัน</a></li>

      </ul>
    </div>
    <!--Start tab-->
    <div id="allevent" class="col s12 ">
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
                      <img class=" materialboxed" src="img/wf.jpg">
                    </div>
                    @if (strcmp($data->status,"unavailable")==0)
                    <!--เริ่มแสดง status (unavailable)-->
                    <div class="card-content red darken-1" id="status_avai">
                        <p class="ev-status">ปิดรับสมัคร</p>
                    </div>
                  @elseif(strcmp($data->status,"available")==0 )
                  <div class="card-content light-green darken-1" id="status_unavai">
                      <p class="ev-status">กำลังเปิดรับสมัคร</p>
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
                  <div class="card-action">
                      <ul class="event-menu ">
                        <li class="event-item"><a href="{{url('event/board/'.$data->id)}}"><i class="fa fa-star left" aria-hidden="true"></i>กิจกรรมของคุณ</a></li>
                      </ul>
                  </div>

                  @else
                  <div class="card-action">
                      <ul class="event-menu">
                          <li class="event-item"><a href="#join{{$key}}" class="modal-trigger">
                              <i class="fa fa-plus-square-o left" aria-hidden="true"></i>เข้าร่วม</a></li>
                      </ul>
                  </div>


                  @endif
                  @endif

                  </div>


              <!--  @if($data->creator != $user)
                <a class="waves-effect waves-light btn-large blue darken-4" href="{{url('event/board/'.$data->id)}}"><i class="fa fa-comments left" aria-hidden="true" style="margin-right: 5px;"></i>กระดานกิจกรรม</a>
                @else
                <a class="waves-effect waves-light btn-large blue darken-4" href="{{url('event/board/'.$data->id)}}"><i class="fa fa-comments left" aria-hidden="true" style="margin-right: 5px;"></i>กระดานกิจกรรมของคุณ</a>

                @endif
-->

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
                  <!--<a href="#!" class=" modal-action modal-close waves-effect waves-light btn red darken-3" style="margin-right: 5px;">ยกเลิก</a>
                  <a href="{{url('event/join/'.$data->id)}}" class=" modal-action modal-close waves-effect waves-light btn blue darken-4" style="margin-right: 5px;">ใช่</a>


              -->  </div>
              </div>
              <div class="col s6" style="margin-left: 10px;">
                <div class="row" class="col s12" id="event_detail">
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
        <li class=" collection-item">
          <div class="row">
            <div class="col s10 m9 l9" style="margin-top: 10px; margin-bottom: -25px; padding-left: 3%;">
              <span><i class="fa fa-calendar-o" aria-hidden="true" style="font-size: 20pt;"></i>
                &nbsp;&nbsp;&nbsp;<span style="font-size: 20pt">{{$join->title}}<span></span>
                <?php $mem_join =$join->accounts->count();

                      ?>



@if($mem_join==0)
<a href="#parti2{{$key}}" class="modal-trigger"><div class="chip" align="right">ยังไม่มีผู้เข้าร่วม</div></a>
                <div id="parti2{{$key}}" class="modal" style="width: 500px;">
                  <ul class="collection">


                    <li class="collection-item avatar">
                    <h4>ยังไม่มีผู้เข้าร่วม</h4>
                    </li>


                  </ul>
                  <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">
                      <i class="fa fa-times" aria-hidden="true"></i></a>
                  </div>
                </div>

          @else
          <a href="#joinparti{{$key}}" class="modal-trigger"><div class="chip" align="right">{{ $mem_join}} ที่เข้าร่วม</div></a>
          <div id="joinparti{{$key}}" class="modal" style="width: 500px;">
          <ul class="collection with-header f-modal">
            <li class="collection-header transper"><i style="line-height: 1;" class="fa fa-users fa-lg left" aria-hidden="true"></i><h4>ผู้เข้าร่วมกิจกรรม</h4>
                <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div>
            </li>

            @foreach($join->accounts as $account)
              <li class="collection-item avatar transper">
                <img src="{{url('img/f1.jpg')}}" alt="" class="circle">
                <p>{{$account->first_name.' '.$account->last_name}}</p>
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
                              <img class=" materialboxed" src="{{url('img/wf.jpg')}}">
                          </div>
                          <div class="card-content blue-grey darken-1">
                              <p class="ev-status">กิจกรรมเริ่มต้นในอีก 10 วัน</p>
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
                                  <li class="event-item">
                                  <a href="#cancel{{$key}}" class="modal-trigger"><i class="fa fa-minus-square-o left" aria-hidden="true"></i>ยกเลิกการเข้าร่วม</a></li>
                                  <li class="event-item">
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
                      <td><p>{{$join->fname.'  '.$data->lname}}</p></td>
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
                <div class="collapsible-header add-ev-btn" >

                    <i class="fa fa-plus-circle" aria-hidden="true" ></i>เพิ่มกิจกรรม
                  </div>

                <div class="collapsible-body add-ebody" >
                  <div class="row">
                     <form class="col s12" method="POST" action="{{url('event/create')}}">
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
                           <input name="amount-attend" id="amount-attend" type="number" class="validate" value="2" required>
                           {{ csrf_field() }}
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
                             <div class="input-field col s3 etime-col">
                                <input id="date" type="date" name="start_date" class="datepicker" required>
                            </div>
                            <div class="col s1" style="width: 6%;">
                                 <p>ถึง</p>
                             </div>
                             <div class="input-field col s3 etime-col">
                                 <input id="date" type="date" name="finish_date" class="datepicker" required>
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
                                 <input type="file" name="pic" accept="image/*">
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
                    <a href="#myevePartiList{{$key}}" class="modal-trigger">

                      <div class="chip" align="right">{{$m}} ผู้เข้าร่วม</div>
                      </a>

                      </div>
                      @foreach($m_name as $per)
                    <div id="myevePartiList{{$key}}" class="modal" style="width: 500px;">

                      <ul class="collection with-header f-modal">
                        <li class="collection-header transper"><i style="line-height: 1;" class="fa fa-users fa-lg left" aria-hidden="true"></i><h4>ผู้เข้าร่วมกิจกรรม</h4>
                        <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div>
                        </li>
                        <li class="collection-item avatar transper">
                          <img src="img/pic.jpg" alt="" class="circle">       
                          <p>{{$per->first_name.' '.$per->last_name}}</p>
                          <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                        </li>
                        
                      </ul>
                    </div>
                    @endforeach
                  </div>

                </div>

                <div  >
                  <div class="row" >
                    <div class="col s4 center event-card" >
                      <div class="card">
                        <div class="card-image">
                          <img class=" materialboxed" src="img/wf.jpg">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <p class="ev-status">กิจกรรมเริ่มต้นในอีก 10 วัน</p>
                        </div>
                        <div class="card-action">
                            <ul class="event-menu">
                                <li class="event-item"><a href="#edit{{$key}}" class="modal-trigger"><i class="fa fa-pencil-square-o left" aria-hidden="true"></i>แก้ไข</a>
                                </li>
                                <li class="event-item"><a href="#eve-del{{$key}}" class="modal-trigger">
                                    <i class="fa fa-minus-square-o left" aria-hidden="true"></i>ลบกิจกรรม</a>
                                </li>
                                <li class="event-item"><a href="{{url('event/board/'.$mine->id)}}"><i class="fa fa-comments left" aria-hidden="true"></i>กระดานกิจกรรม</a></li>
                            </ul>
                        </div>

                      </div>

                    <!--  <a style=" height: 100%"class="modal-trigger waves-effect waves-light btn-large red" href="#eve-del{{$key}}"><i class="fa fa-times left" aria-hidden="true" style="margin-right: 5px;"></i>ลบกิจกรรม</a>
                      <a style=" height: 100%;"class="waves-effect waves-light btn-large blue darken-4" href="{{url('event/board/'.$mine->id)}}"><i class="fa fa-comments left" aria-hidden="true" style="margin-right: 5px;"></i>กระดานกิจกรรม</a>

-->

                    </div>
                    <!---ส่วนของ delete event-->
                    <div id="eve-del{{$key}}" class="modal" style="width: 480px;">
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
<<<<<<< HEAD
                            <div class="row" >
                                <form class="col s12" action="{{url('/event/'.$mine->id.'/edit')}}" method="post">
=======
                            <div class="row" style="margin-top: 37px;">
                                <form class="col s12" action="{{url('/event/edit/'.$mine->id)}}" method="post">
>>>>>>> eb558b453a093842f4ccd575b7d0ecefa4e6f43e
                                    <input type="hidden" name="_method" value="POST">
                                    {!! csrf_field() !!}

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">event_note</i>
                                            <input placeholder="ตัวอย่าง: กิจกรรมปลูกป่า" id="event-name" type="text" class="validate" value="{{$mine->title}}" required>
                                            <label for="event-name">ชื่อกิจกรรม</label>

                                        </div>
                                    </div>
                                    <div class="row">
                                     <div class="input-field col s4">
                                      <i class="material-icons prefix">people</i>
                                       <input name="amount-attend" id="amount-attend" type="number" class="validate" value="2" required>
                                       {{ csrf_field() }}
                                       <label for="amount-attend">จำนวนผู้เข้าร่วมสูงสุด</label>
                                     </div>
                                   </div>


                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">location_on</i>

                                            <textarea placeholder="ตัวอย่าง: 11/2 ซ.สวยสุดในสอย ถนนพระราม32 เขตดุสิต" id="address" class="materialize-textarea" required>{{$mine->location}}</textarea>
                                            <label for="address">ที่อยู่จัดกิจกรรม</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s3 etime-colm-res">
                                            <p><i class="etime-icon material-icons left">schedule</i>เวลาจัดกิจกรรม</p>
                                        </div>

                                        <div class="input-field col s3 etime-colm">
                                            <input placeholder="12:00 น." id="event-name" type="text" class="validate" value="{{$mine->start_time}}" required>
                                        </div>

                                        <div class="col s1">
                                            <p>ถึง</p>
                                        </div>

                                        <div class="input-field col s3 etime-colm">
                                            <input placeholder="13:00 น." id="event-name" type="text" class="validate" value="{{$mine->finish_time}}" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s3 etime-colm-res">
                                            <p><i class="material-icons prefix etime-icon">today</i>&nbsp&nbsp วันที่จัดกิจกรรม</p>
                                        </div>

                                        <div class="input-field col s3 etime-colm">
                                            <input id="date" type="date" class="datepicker" value="{{$mine->start_date}}">
                                        </div>

                                        <div class="col s1">
                                            <p>ถึง</p>
                                        </div>

                                        <div class="input-field col s3 etime-colm">
                                            <input id="date" type="date" class="datepicker" value="{{$mine->finish_date}}">
                                        </div>
                                    </div>
<!--
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix etime-icon">today</i>
                                            <input id="date" type="date" class="datepicker" value="{{$mine->start_date}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix etime-icon">today</i>
                                            <input id="date" type="date" class="datepicker" value="{{$mine->finish_date}}">
                                        </div>
                                    </div>-->

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">phone</i>
                                            <input type="text" placeholder="ตัวอย่าง: 085-994-9230" value="{{$mine->contact}}" id="tel" required></input>
                                            <label for="tel">เบอร์โทรศัพท์ติดต่อ</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s3 etime-colm-res">
                                            <p><i class="etime-icon material-icons left">satellite</i>อัพโหลดรูปภาพ</p>
                                        </div>
                                        <div class="input-field col s3 epic-colm" style="    margin-top: -3px;">
                                            <input type="file" name="pic" accept="image/*">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12" style="margin-top: 52px;">
                                            <i class="material-icons prefix">description</i>
                                            <textarea placeholder="ตัวอย่าง: ช่วยสอนหนังสือเด็ก" id="edetail" class="materialize-textarea"  required>{{$mine->description}}</textarea>
                                            <label for="edetail">รายละเอียดกิจกรรม</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">link</i>
                                            <input placeholder="ตัวอย่าง: www.facebook.com" id="url" type="text" class="validate">
                                            <label for="url">ลิงค์ภายนอก</label>
                                        </div>
                                    </div>

                            </div>
<<<<<<< HEAD

                                <!--    <div class="switch">
                                        <label for="url">การรับสมัคร</label>
                                        <p>
                <input class="with-gap" name="availability" type="radio" id="test5" value="available" checked />
                <label for="test5">เปิดรับอยู่</label>
              </p>
              <p>
        <input class="with-gap" name="availability" type="radio" id="test5" value="available" checked />
        <label for="test5">เปิดรับอยู่</label>
        </p>

      </div>--->
=======
                            <!--
                            <div class="switch">
                                <label for="url">การรับสมัคร</label>
                                <p>
                                  <input class="with-gap" name="availability" type="radio" id="test5" value="available" checked />
                                  <label for="test5">เปิดรับอยู่</label>
                                </p>
                                <p>
                                  <input class="with-gap" name="availability" type="radio" id="test5" value="available" checked />
                                  <label for="test5">เปิดรับอยู่</label>
                                </p>
                            </div>
                            -->
>>>>>>> eb558b453a093842f4ccd575b7d0ecefa4e6f43e

                        </div>
                        <div class="modal-footer">
                            <button href="#!" class=" modal-action modal-close waves-effect btn-flat">ยกเลิกการแก้ไข</button>
                            <!-- <a href="{{url('event/edit/'.$mine->id)}}" class=" modal-action modal-close waves-effect btn-flat green white-text">บันทึกการแก้ไข</a> -->
                            <button class="modal-action waves-effect btn-flat green white-text" type="submit" name="action">บันทึกการแก้ไข</button>
                        </div>
                          </form>
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
                </div>
              </li>
              @endforeach
            </ul>

            @stop
