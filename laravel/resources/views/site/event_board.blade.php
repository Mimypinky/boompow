@extends('site.layout')
@section('maincontent')

<div class="row" id="act_part">
<div class="container" >
  <div class="row" style="margin-bottom: 0">
      <div class="col s10">
          <div class="card pro-upstatus-feed event-head">
              <div class="card-image" >
                  <img src="{{url('img/polygons.jpg')}}"  id="eve_img" >
                  <span class="card-title">
                      <a href="/event" class="tooltipped back-btn blue darken-1 waves-effect waves-light btn right" style="margin-right: 10px;" data-position="bottom" data-delay="50" data-tooltip="กลับไปหน้ากิจกรรม"><i class="material-icons" style="font-size: 20pt;">arrow_back</i></a>
                  </span>
                  <span class="card-title event-name">{{$eve_name->title}}</span>

              </div>
              <div class="card-content">
                  @if($eve_name->creator == $user)
                  <span style="font-size: 18pt;">สร้างโดย:&nbsp</span><a href="Social-Profile-v2.html" style="color: #0d47a1; font-size: 18pt !important;">คุณ</a>
                      <a href="#eve-del" id="status_join" class="modal-trigger white-text noshadow waves-effect waves-light btn red right">
                      <i class="fa fa-times"></i>&nbspลบกิจกรรม</a>
                      <a class="white-text noshadow waves-effect waves-light btn red darken-3 right" style="margin-right: 10px;font-size: 14pt;">&nbspแก้ไขข้อมูลกิจกรรม</a>
                      @else
                      <span style="font-size: 18pt;">สร้างโดย:&nbsp</span><a href="Social-Profile-v2.html" style="color: #0d47a1; font-size: 18pt !important;">{{$eve_name->fname.' '.$eve_name->lname}}</a>

                      <a href="#cancel" id="status_join" class="modal-trigger white-text noshadow waves-effect waves-light btn red right">
                      <i class="fa fa-minus-square-o left" aria-hidden="true"></i>&nbspยกเลิกการเข้าร่วม</a>
                      @endif

              </div>
          </div>
      </div>
  </div>

  <!--Start Post Box-->
  <div class="col s8 pro-upstatus-feed">
      <ul class="collection with-header f-modal">
          <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-pencil-square fa-3x left" aria-hidden="true"></i><h4>อัพเดตข่าวกิจกรรมของคุณ</h4>
          </li>
      </ul>
      <div class="row" id="eve_desc">
          <div class="row" style="">
              <div class="col s12">
                  <div class="card" style="box-shadow:none; background-color: transparent;">
                      <div class="card-content black-text" >
                          <div class="input-field col s3 img-position-res">
                              <img src="{{url('img/pic.jpg')}}" alt="" class="postbox-pic media-object img-circle imgthumb"> <!-- notice the "circle" class -->
                              <span class="posbadge-Ejoiner me badge Ejoiner">ผู้เข้าร่วม</span>
                          </div>
                          <div class="input-field col s8 upsta-line-Ejoiner">
                              <textarea style="margin-left: 20px;" id="textarea1" class="materialize-textarea"></textarea>
                              <label style="margin-left: 20px;" for="textarea1">บอกสิ่งดีๆวันนี้ให้เพื่อนคุณรู้สิ!!</label>
                              <div class="card-action" style="border: none;">
                                  <form action="#">
                                      <div class="file-field input-field">
                                          <div class="btn prouppic-btn black-text">
                                              <span style="font-size: 14pt;">
                                                  <i class="fa fa-camera"></i>&nbspอัพโหลดรูปภาพ
                                                  <input type="file"></span>
                                          </div>
                                          <div class="file-path-wrapper">
                                              <input class="file-path validate" type="text" id="myfile-path">
                                          </div>
                                      </div>
                                  </form>
                                  <a class="proupsta-btn waves-effect waves-light btn">โพสต์</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--End Post Box-->

  <!--Start newsfeed section-->
      <div class="col s8 pro-upstatus event-feed">
      <ul class="collection with-header f-modal">
          <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-rss-square fa-3x left" aria-hidden="true"></i><h4>ข่าวสารจากกิจกรรม</h4>
          </li>
      </ul>
      <!--timeline mypost-->
          <div class="row" style="">
              <div class="col s12">
                  <div class="card" style="box-shadow:none; background-color: transparent;">
                      <div class="card-content black-text" >
                          <div class="input-field col s3 img-position-res">
                              <img src="{{url('img/pic.jpg')}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                              <span class="posbadge-Ejoiner me badge Ejoiner">ผู้เข้าร่วม</span>
                              <!-- notice the "circle" class -->
                          </div>
                          <div class="input-field col s9 upsta-line-Ejoiner">
                              <div class="col s12" id="commenthead">
                                  <span id="namecomment">พรทิพย์ มีชัย</span>
                                  <div class="event-edit-btn">
                                      <a class="black-text edit-btn-2 waves-effect waves-light btn modal-trigger" href="#post-edit"
                                      style="background-color: #ebeef1"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>
                                      <a class="black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1"><i class="fa fa-trash-o"></i> ลบ</a>
                                  </div>
                                  <p id="datecomment">21 เมษายน 2558, 22.01 น.</p>
                              </div>
                              <div class="status-post2 col s12">
                                  <p>อากาศแจ่มใสเหมาะแก่การไปดิสนีย์แลนด์ หาเพื่อนร่วมทริปเม้นๆ</p>
                              </div>
                              <div class="card-action" style="border: none;">
                                  <div class="row wholike-sec">
                                      <div class="col s1 like-section">
                                          <a class="tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="ถูกใจ"><img class="heart-i" src="{{url('img/heart-like.png')}}"></a>

                                      </div>
                                      <div class="col s2"></div>
                                      <div class="col s2">
                                          <div class="likecount">
                                              <a href="#wholike" class="modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูเพื่อนที่ถูกใจโพสต์นี้" href="" style="color: black;">125+</a>
                                          </div>
                                      </div>
                                      <div class="col s2">
                                          <div class="wholike">
                                              <a href="Social-Profile-friend-v2.html" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="สมัย สมร" href="#"><img class="pic-wholike" src="{{url('img/pic4.jpg')}}">
                                              </a>
                                              <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="{{url('img/pic5.jpg')}}"></a>
                                              <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="{{url('img/pic2.jpg')}}"></a>
                                              <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="{{url('img/pic3.jpg')}}"></a>
                                              <span class="pic-wholike morelike">...</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="divider"></div>
                                  <div>
                                      <div class="row">
                                          <form>
                                              <div class="input-field cmt-coll-space">
                                                  <div class="input-field col s12">
                                                      <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                      <label style="font-size: 13pt;" for="textarea1">แสดงความคิดเห็น</label>
                                                  </div>
                                                  <a class="comment-btn-event waves-effect waves-light btn">ตกลง</a>
                                              </div>
                                          </form>
                                      </div>
                                      <div class="comment-section">
                                          <ul class="cmt-coll cmt-coll-space collapsible" data-collapsible="accordion">
                                              <li>
                                                  <div class="collapsible-header cmt-coll-head active">
                                                  <i class="material-icons">keyboard_arrow_up</i>ความคิดเห็นจากเพื่อน
                                                  </div>

                                                  <div class="collapsible-body">
                                                      <ul class="col s12 collection cmt-box">
                                                          <li class="transper collection-item avatar">
                                                              <a href="Social-Profile-friend-v2.html"><img src="{{url('img/pic4.jpg')}}" alt="" class="circle joiner-status">
                                                              <span class="title title-name">สมัย สมร</span></a>
                                                              <span class="joiner-badge badge">ผู้เข้าร่วม</span>

                                                              <p id="datecomment">21 เมษายน 2558, 22.01 น.</p>
                                                              <p class="space-cmt">ไปด้วยคนจ้าทักมา <br></p>
                                                          </li>
                                                          <li class="transper collection-item avatar">
                                                              <img src="{{url('img/pic5.jpg')}}" alt="" class="circle joiner-status">
                                                              <span class="title title-name">ยายละม้าย คล้ายจะเป็นลม</span>
                                                              <span class="joiner-badge badge">ผู้เข้าร่วม</span>

                                                              <p id="datecomment">21 เมษายน 2558, 22.01 น.</p>
                                                              <p class="space-cmt">สนใจทำงานผ่านเน็ตรายได้ดีเพียงนั่งคีย์ข้อมูลวันละ 3-4 ชั่วโมง<br></p>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!--End timeline mypost-->
            <hr>
          <!--timeline friend post-->
          <div class="row" style="">
              <div class="col s12">
                  <div class="card" style="box-shadow:none; background-color: transparent;">
                      <div class="card-content black-text" >
                          <div class="input-field col s3 img-position-res">
                              <img src="{{url('img/pic2.jpg')}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                              <span class="posbadge-Eowner me badge Eowner">เจ้าของกิจกรรม</span>
                              <!-- notice the "circle" class -->
                          </div>
                          <div class="input-field col s9 upsta-line-Eowner">
                              <div class="col s12" id="commenthead">
                                  <span id="namecomment">สมัคร รักสนุกไม่คิดผูกพัน
                                  </span>
                                  <p id="datecomment">21 เมษายน 2558, 22.01 น.</p>
                              </div>
                              <div class="status-post2 col s12">
                                  <p>พรทิพย์จ้ะ ไปข้าวสารกันไหม</p>
                              </div>
                              <div class="card-action" style="border: none;">
                                  <div class="row wholike-sec">
                                      <div class="col s1 like-section">
                                          <a class="tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="ถูกใจ"><img class="heart-i" src="{{url('img/heart-like.png')}}"></a>
                                      </div>
                                      <div class="col s2"></div>
                                      <div class="col s2">
                                          <div class="likecount">
                                              <a href="#wholike" class="modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูเพื่อนที่ถูกใจโพสต์นี้" href="" style="color: black;">125+</a>
                                          </div>
                                      </div>
                                      <div class="col s2">
                                          <div class="wholike">
                                              <a href="Social-Profile-friend-v2.html" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="สมัย สมร" href="#"><img class="pic-wholike" src="{{url('img/pic4.jpg')}}"></a>


                                              <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="{{url('img/pic5.jpg')}}"></a>

                                              <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="{{url('img/pic2.jpg')}}"></a>

                                              <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="{{url('img/pic3.jpg')}}"></a>

                                              <span class="pic-wholike morelike">...</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="divider"></div>
                                  <div>
                                      <div class="row">
                                          <form>
                                              <div class="input-field cmt-coll-space">
                                                  <div class="input-field col s12">
                                                      <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                      <label style="font-size: 13pt;" for="textarea1">แสดงความคิดเห็น</label>
                                                  </div>
                                                  <a class="comment-btn-event waves-effect waves-light btn">ตกลง</a>
                                              </div>
                                          </form>
                                      </div>

                                      <div class="comment-section">
                                          <ul class="cmt-coll cmt-coll-space collapsible" data-collapsible="accordion">
                                              <li>
                                                  <div class="collapsible-header cmt-coll-head active">
                                                  <i class="material-icons">keyboard_arrow_up</i>ความคิดเห็นจากเพื่อน
                                                  </div>

                                                  <div class="collapsible-body">
                                                      <ul class="col s12 collection cmt-box">
                                                          <li class="transper collection-item avatar">
                                                              <a href="Social-Profile-friend-v2.html"><img src="{{url('img/pic.jpg')}}" alt="" class="circle joiner-owner">
                                                              <span class="title title-name">พรทิพย์ มีชัย</span></a>
                                                              <span class="joiner-badge badge">ผู้เข้าร่วม</span>
                                                              <p id="datecomment">21 เมษายน 2558, 22.01 น.</p>
                                                              <p class="space-cmt">ไปด้วยคนจ้าทักมา <br></p>
                                                          </li>
                                                          <li class="transper collection-item avatar">
                                                              <img src="{{url('img/pic5.jpg')}}" alt="" class="circle joiner-status">
                                                              <span class="title title-name">ยายละม้าย คล้ายจะเป็นลม</span>
                                                              <span class="joiner-badge badge">ผู้เข้าร่วม</span>
                                                              <p id="datecomment">21 เมษายน 2558, 22.01 น.</p>
                                                              <p class="space-cmt">สนใจทำงานผ่านเน็ตรายได้ดีเพียงนั่งคีย์ข้อมูลวันละ 3-4 ชั่วโมง <br></p>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--End timeline friend post-->
            <hr>
          <!--timeline mypost pic-->
                      <div class="row" style="">
                          <div class="col s12">
                              <div class="card" style="box-shadow:none; background-color: transparent;">
                                  <div class="card-content black-text" >
                                      <div class="input-field col s3 img-position-res">
                                           <img src="{{url('img/pic4.jpg')}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                                           <span class="posbadge-Ejoiner me badge Ejoiner">ผู้เข้าร่วม</span>
                                            <!-- notice the "circle" class -->
                                      </div>
                                      <div class="input-field col s9 upsta-line-Ejoiner">
                                          <div class="col s12" id="commenthead">
                                              <span id="namecomment">สมัย สมร
                                              </span>
                                              <p id="datecomment">21 เมษายน 2558, 22.01 น.
                                              </p>
                                          </div>
                                          <div class="status-post2 col s12">
                                              <p>ความรักทำให้ตาบอด</p>
                                              <div class="card-image">
                                                  <img class="materialboxed" src="{{url('img/love.jpg')}}">
                                              </div>
                                          </div>
                                          <div class="card-action" style="border: none;">
                                              <div class="row wholike-sec">
                                                  <div class="col s1 like-section">
                                                      <a class="tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="ถูกใจ"><img class="heart-i" src="{{url('img/heart-like.png')}}"></a>

                                                  </div>
                                                  <div class="col s2"></div>
                                                  <div class="col s2">
                                                      <div class="likecount">
                                                          <a href="#wholike" class="modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูเพื่อนที่ถูกใจโพสต์นี้" href="" style="color: black;">125+</a>
                                                      </div>
                                                  </div>
                                                  <div class="col s2">
                                                      <div class="wholike">
                                                          <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href="#"><img class="pic-wholike" src="{{url('img/pic4.jpg')}}"></a>


                                                          <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="{{url('img/pic5.jpg')}}"></a>

                                                          <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="{{url('img/pic2.jpg')}}"></a>

                                                          <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="{{url('img/pic3.jpg')}}"></a>

                                                          <span class="pic-wholike morelike">...</span>
                                                      </div>
                                                  </div>
                                             </div>
                                             <div class="divider"></div>
                                             <div>
                                                 <div class="row">
                                                 <form>
                                                     <div class="input-field cmt-coll-space">
                                                          <div class="input-field col s12">
                                                              <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                              <label style="font-size: 13pt;" for="textarea1">แสดงความคิดเห็น</label>
                                                          </div>
                                                          <a class="comment-btn-event waves-effect waves-light btn">ตกลง</a>
                                                      </div>
                                                  </form>
                                                 </div>

                                                 <div class="comment-section">
                                                     <ul class="cmt-coll cmt-coll-space collapsible" data-collapsible="accordion">
                                                          <li>
                                                              <div class="collapsible-header cmt-coll-head active"><p style="margin-left: -4%;">ยังไม่มีความคิดเห็น</p></div>
                                                          </li>
                                                      </ul>
                                                 </div>
                                             </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--End timeline mypost pic-->

      </div>
      <!--End newsfeed section-->
      <!--Start detail section-->
  <div class="col s4">
      <div class="row event-detail">
          <div class="collection pro-upstatus-feed">
              <div class="collection-item edetail-space">
                  <div class="collection-item">
                      <span class="i-event-det">
                      <i class="fa fa-calendar left" aria-hidden="true"></i>วันที่</span>
                      <div class="space"></div>
                      <p>{{$eve_name->start_date}} ถึง{{$eve_name->finish_date}}</p>
                  </div>
                  <div class="collection-item">
                      <span class="i-event-det">
                      <i class="fa fa-clock-o left" aria-hidden="true"></i>เวลา</span>
                      <div class="space"></div>
                      <p>{{$eve_name->start_time}} น. ถึง {{$eve_name->finish_time}} น.</p>
                  </div>
                  <div class="collection-item">
                      <span class="i-event-det">
                      <i class="fa fa-map-marker left" aria-hidden="true"></i>สถานที่</span>
                      <div class="space"></div>
                      <p>{{$eve_name->location}}</p>
                  </div>
                  <div class="collection-item">
                      <span class="i-event-det">
                      <i class="fa fa-phone left" aria-hidden="true"></i>ติดต่อ</span>
                      <div class="space"></div>
                      <p>{{$eve_name->contact}}</p>
                  </div>
                  <div class="collection-item">
                      <h5><span class="i-event-det">เกี่ยวกับกิจกรรม</span></h5>
                      <p>{{$eve_name->description}}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--End detail section-->
  <!--Start whojoined section-->
  <div class="col s4">
      <div class="row joined-f">
          <div class="collection pro-upstatus-feed">
              <div class="collection-item">
                  <h5><span class="joiner-f-head">เพื่อนร่วมกิจกรรม 7 คน</span></h5>
                  <a href="#allfriend" class="modal-trigger">ดูเพื่อนทั้งหมด</a>
              </div>
              <div class="collection-item" id="eve_friend">
                      <div class="row joiner-pic-rspace">
                          <div class="col s12 m7 l4 joiner-pic-col">
                              <a href="#" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="แม้น ณ ซอยสี่"><img src="{{url('img/pic3.jpg')}}"></a>
                          </div>

                          <div class="col s12 m7 l4 joiner-pic-col">
                              <a href="#" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="สมัย สมร"><img src="{{url('img/pic4.jpg')}}"></a>
                          </div>

                          <div class="col s12 m7 l4 joiner-pic-col">
                              <a href="#" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="สมัคร รักสนุกไม่คิดผูกผัน"><img src="{{url('img/pic2.jpg')}}"></a>
                          </div>
                      </div>



              </div>

          </div>
      </div>
  </div>
  <!--End whojoined section-->


  </div>
</div>


  <!--Modal Structure-->
  <!--post-edit-->
  <div id="post-edit" class="modal" style="width: 500px;">
      <ul class="collection with-header f-modal">
          <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-pencil-square-o fa-lg left" aria-hidden="true"></i><h4>แก้ไขโพสต์</h4>
              <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>

          <li class="transper collection-item avatar">
              <img src="{{url('img/pic5.jpg')}}" alt="" class="circle">
              <span class="title title-name">ยายละม้าย คล้ายจะเป็นลม</span>
              <form action="#">
                  <div class="file-field input-field" style="margin-top: -5%;">
                      <div class="input-field col s12">
                          <textarea id="textarea1" class="materialize-textarea">สวัสดีจ้ามีนา
                          </textarea>
                      </div>
                  </div>
              </form>
              <a class="modal-close waves-effect waves-light btn right">ตกลง</a>
          </li>
      </ul>
  </div>
  <!--wholike-->
  <div id="wholike" class="modal" style="width: 500px;">
      <ul class="collection with-header f-modal">
          <li class="collection-header transper"><i style="line-height: 1;" class="fa fa-heart fa-lg left" aria-hidden="true"></i><h4>เพื่อนที่ถูกใจโพสต์นี้</h4>
              <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>
          <li class="collection-item avatar transper">
              <img src="{{url('img/pic.jpg')}}" alt="" class="circle">
              <p>เจ๊สมร ดอนเจดีย์</p>
              <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
          </li>
          <li class="collection-item avatar transper">
              <img src="{{url('img/pic.jpg')}}" alt="" class="circle">
              <p>พิชิต จิตมั่นคง </p>
              <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
          </li>
          <li class="collection-item avatar transper">
              <img src="{{url('img/pic.jpg')}}" alt="" class="circle">
              <p>มาโนช ชงชม </p>
              <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
          </li>
      </ul>
  </div>
  <!--allfriend-->
  <div id="allfriend" class="modal" style="width: 500px;">
      <ul class="collection with-header f-modal">
          <li class="collection-header transper"><i style="line-height: 1;" class="fa fa-users fa-lg left" aria-hidden="true"></i><h4>ผู้เข้าร่วมกิจกรรม</h4>
              <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div>
          </li>
          <li class="collection-item avatar transper">
              <img src="{{url('img/pic.jpg')}}" alt="" class="circle">
              <p>เจ๊สมร ดอนเจดีย์</p>
              <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
          </li>
          <li class="collection-item avatar transper">
              <img src="{{url('img/pic.jpg')}}" alt="" class="circle">
              <p>พิชิต จิตมั่นคง </p>
              <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
          </li>
          <li class="collection-item avatar transper">
              <img src="{{url('img/pic.jpg')}}" alt="" class="circle">
              <p>มาโนช ชงชม </p>
              <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
          </li>
      </ul>
  </div>
  <!--cancelattend-->
  <div id="cancelattend" class="modal" style="width: 500px;">
      <div class="modal-content">
          <h4>ยกเลิกการเข้าร่วมกิจกรรม</h4>
          <p>คุณกำลังทำการยกเลิกการเข้าร่วมกิจกรรมนี้</p>
          <p>ต้องการยกเลิกจริงๆใช่หรือไม่</p>
      </div>
      <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect btn-flat">ไม่ อยู่กิจกรรมนี้ต่อ</a>
          <a href="#!" class=" modal-action modal-close waves-effect btn-flat green white-text">ใช่ ยกเลิกการเข้าร่วม</a>
      </div>
  </div>
  <!--End Modal Structure-->

@stop
