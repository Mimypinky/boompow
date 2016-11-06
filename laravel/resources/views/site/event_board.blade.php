@extends('site.layout')
@section('maincontent')

<div class="row" id="act_part">
<div class="container" >
  <div class="row" style="margin-bottom: 0">
      <div class="col s10">
          <div class="card pro-upstatus-feed event-head">
              <div class="card-image" >
                  <img src="{{url('img/polygons.jpg')}}" style="height:30em" id="eve_img" >
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
                      <a href="#edit_event"class="modal-trigger white-text noshadow waves-effect waves-light btn red darken-3 right" style="margin-right: 10px;font-size: 14pt;">&nbspแก้ไขข้อมูลกิจกรรม</a>
                      @else
                      <span style="font-size: 18pt;">สร้างโดย:&nbsp</span><a href="Social-Profile-v2.html" style="color: #0d47a1; font-size: 18pt !important;">{{$eve_name->fname.' '.$eve_name->lname}}</a>

                      <a href="#cancelattend" id="status_join" class="modal-trigger white-text noshadow waves-effect waves-light btn red right">
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
                        @if($eve_name->creator == $account->id)
                        <div class="input-field col s3 img-position-res">
                            <img src="{{url('img/uploads/avatars/'.$account->avatar)}}" alt="" class="postbox-pic media-object img-circle imgthumb"> <!-- notice the "circle" class -->
                            <span class="posbadge-Eowner badge">เจ้าของกิจกรรม</span>
                        </div>
                        <div class="input-field col s8 upsta-line-Eowner">
                        @else
                          <div class="input-field col s3 img-position-res">
                              <img src="{{url('img/uploads/avatars/'.$account->avatar)}}" alt="" class="postbox-pic media-object img-circle imgthumb"> <!-- notice the "circle" class -->
                              <span class="posbadge-Ejoiner badge">ผู้เข้าร่วม</span>
                          </div>
                          <div class="input-field col s8 upsta-line-Ejoiner">
                          @endif

                              <form action="{{url('/event/board/'.$eve_name->id)}}" method="POST" enctype="multipart/form-data">
                              <textarea style="margin-left: 20px;" id="textarea1" class="materialize-textarea" name="message"></textarea>
                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                              <label style="margin-left: 20px;" for="textarea1">บอกสิ่งดีๆวันนี้ให้เพื่อนคุณรู้สิ!!</label>

                              <div class="card-action" style="border: none;">
                                      <div class="file-field input-field">
                                          <div class="btn prouppic-btn black-text">
                                              <span style="font-size: 14pt;">
                                                  <i class="fa fa-camera"></i>&nbspอัพโหลดรูปภาพ
                                                  <input type="file" name="uploadImage"  id="uploadImage"></span>
                                          </div>
                                          <div id="show_pic_box">
                                            <img  id="show_pic" style="width:50%"/>
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
                                          <div class="file-path-wrapper">
                                              <input class="file-path validate" type="text" id="myfile-path">
                                          </div>
                                      </div>
                                  </form>
                                  <button class="proupsta-btn waves-effect waves-light btn" name="action" type="sumbit">โพสต์</button>
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
      @foreach($eve_post as $post)


          <div class="row" style="">
              <div class="col s12">
                  <div class="card" style="box-shadow:none; background-color: transparent;">
                      <div class="card-content black-text" >

                        @if($eve_name->creator == $account->id)

                          <div class="input-field col s3 img-position-res">
                              <img src="{{url('img/uploads/avatars/'.$post->avatar)}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                              <span class="posbadge-Eowner badge">เจ้าของกิจกรรม</span>
                              <!-- notice the "circle" class -->
                          </div>
                          <div class="input-field col s9 upsta-line-Eowner">
                          @else
                          <div class="input-field col s3 img-position-res">
                              <img src="{{url('img/uploads/avatars/'.$post->avatar)}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                              <span class="posbadge-Ejoiner badge">ผู้เข้าร่วม</span>
                              <!-- notice the "circle" class -->
                          </div>
                          <div class="input-field col s9 upsta-line-Ejoiner">
                          @endif


                              <div class="col s12" id="commenthead">
                                  <span id="namecomment">{{$post->first_name.' '.$post->last_name}}</span>
                                  <div class="event-edit-btn">
                                      @if($post->user_id == $account->id)
                                      <a class="black-text edit-btn-2 waves-effect waves-light btn modal-trigger" href="#post-edit"
                                      style="background-color: #ebeef1">
                                      <i class="fa fa-pencil-square-o"></i> แก้ไข</a>
                                      <a class="black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1">
                                      <i class="fa fa-trash-o"></i> ลบ</a>
                                      @endif
                                  </div>
                                  <p id="datecomment">{{$post->created_at}}</p>
                              </div>
                              <div class="status-post2 col s12">
                                  <p>{{$post->message}}</p>
                              </div>
                              @if($post->image!=null)
                              <div class="card-image">
                                  <img class="materialboxed " src="{{url('img/uploads/events/'.$post->image)}}" style="width:60%">
                              </div>
                              @endif
                              <div class="card-action" style="border: none;">
                                <?php $count_likes = DB::table('event_board_like')->where('event_post_id','=',$post->pid)->count();
                                    $likes = DB::table('event_board_like')->join('accounts','event_board_like.user_id','=','accounts.id')->join('profiles','accounts.profile_id','=','profiles.id')
                                    ->where('event_post_id',$post->pid)->select('event_board_like.*','accounts.username','accounts.first_name','accounts.last_name','accounts.id','profiles.avatar')->orderBy('created_at', 'desc')->get();
                                    $uid = Auth::user()->id;
                                    $liked= DB::table('event_board_like')->select('id')->where([['event_post_id','=',$post->pid],['user_id','=',$uid]])->first();
                                        ?>
                                        <div class="row ">
                                            <div class="col s1 like-section">
                                            @if($liked!=null)

                                                <a class="tooltipped" href="{{url('/event/board/'.$eve_name->id.'/unlike/'.$liked->id)}}" data-position="bottom" data-delay="50" data-tooltip="เลิกถูกใจ">
                                                  <img class="heart-i" src="{{url('img/heart-default-like.png')}}">
                                                </a>
                                                @else
                                                <a class="tooltipped" href="{{url('/event/board/'.$eve_name->id.'/like/'.$post->pid)}}" data-position="bottom" data-delay="50" data-tooltip="ถูกใจ">
                                                  <img class="heart-i" src="{{url('img/heart-like.png')}}">
                                                </a>

                                                @endif
                                            </div>
                                            <div class="col s2"></div>
                                            <div class="col s2">
                                                <div class="likecount">
                                                    <a href="#wholike" class="modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูเพื่อนที่ถูกใจโพสต์นี้" href="" style="color: black;">{{$count_likes}}</a>
                                                </div>
                                            </div>
                                            <div class="col s2">
                                                <div class="wholike">

                                                  @foreach($likes as $like)
                                                  @if($like->user_id!=$account->id)
                                                    <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="{{$like->first_name.' '.$like->last_name}}" href="{{url('/friend/'.$like->username)}}">
                                                      <img class="pic-wholike " src="{{url('img/uploads/avatars/'.$like->avatar)}}"/>
                                                    </a>
                                                  @else
                                                    <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="{{$like->first_name.' '.$like->last_name}}" href="{{url('/profile')}}">
                                                      <img class="pic-wholike " src="{{url('img/uploads/avatars/'.$like->avatar)}}"/>
                                                    </a>
                                                  @endif

                                                  @endforeach

                                                </div>
                                            </div>
                                       </div>
                                  <div class="divider"></div>
                                  <div class="row">
                                    <form>
                                        <div class="input-field cmt-coll-space">

                                        <div class="input-field w-cmt">

                                             <div class="input-field col s12">
                                                 <textarea id="newComment" class="materialize-textarea newComment" name="comment_message"></textarea>
                                                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                 <label style="font-size: 13pt;" for="newComment">แสดงความคิดเห็น</label>
                                             </div>
                                             <input type="button" class="btn-comment comment-btn-feed waves-effect waves-light btn" name="name" value="ตกลง">

                                         </div>
                                       </div>
                                     </form>
                                  </div>
                                  <div class="comment-section">
                                      <ul class="cmt-coll cmt-coll-space collapsible" data-collapsible="accordion">

                                            <li id="commentboxs" class="commentboxs">
                                              <input type="hidden" value="{{$eid}}" class="idofEvent" />
                                              <input type="hidden" value="{{$post->pid}}" class="idofEventPost" />
                                              <?php $comments = DB::table('event_board_comment')->join('accounts','event_board_comment.user_id','=','accounts.id')
                                              ->join('profiles','accounts.profile_id','=','profiles.id')->select('accounts.id','accounts.username','accounts.first_name','accounts.last_name','profiles.avatar','event_board_comment.*')
                                              ->where('event_post_id','=',$post->pid)->get();
                                              $count_comments = DB::table('event_board_comment')->where('event_post_id','=',$post->pid)->count();

                                              ?>
                                              @if($count_comments !=null)
                                                <div class="collapsible-header cmt-coll-head active">
                                                    <i class="material-icons">keyboard_arrow_up</i>ความคิดเห็นเพิ่มเติม
                                                </div>
                                              @endif
                                                @foreach($comments as $comment)
                                                <div class="collapsible-body">
                                                    <ul class="col s12 collection cmt-box">

                                                    <li class="transper collection-item avatar">
                                                    <a href="{{url('/friend/$comment->username')}}"><img src="{{url('img/uploads/avatars/'.$comment->avatar)}}" alt="" class="circle">
                                                        <span class="title title-name">{{$comment->first_name.' '.$comment->last_name}}</span></a>
                                                        <p id="datecomment">{{$comment->created_at}}</p>
                                                        <p class="space-cmt">{{$comment->message}}<br></p>

                                                    </li>

                                                </ul>
                                                </div>
                                                @endforeach

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
          @endforeach



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
                <?php $parties  =DB::table('join_event')
                ->join('accounts','join_event.user_id','=','accounts.id')
                ->join('profiles','accounts.profile_id','=','profiles.id')
                ->select('accounts.first_name','accounts.last_name','profiles.avatar','accounts.id','accounts.username')
                ->where('eve_id','=',$eve_name->id)->get();
                $count_parties  =DB::table('join_event')
                ->join('accounts','join_event.user_id','=','accounts.id')
                ->join('profiles','accounts.profile_id','=','profiles.id')
                ->where('eve_id','=',$eve_name->id)->count();
                ?>
                  <h5><span class="joiner-f-head">เพื่อนร่วมกิจกรรม {{$count_parties}} คน</span></h5>

              </div>
              @if($count_parties < 12)
              <div class="collection-item" id="eve_friend">
                      <div class="row joiner-pic-rspace">
                        @foreach($parties as $person)
                        @if($person->id == Auth::user()->id)
                        <div class="col s12 m7 l4 joiner-pic-col">
                            <a href="{{url('/friend/profile')}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="{{$person->first_name.' '.$person->last_name}}">
                              <img src="{{url('img/uploads/avatars/'.$person->avatar)}}"></a>
                        </div>
                        @else
                          <div class="col s12 m7 l4 joiner-pic-col">
                              <a href="{{url('/friend/'.$person->username)}}" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="{{$person->first_name.' '.$person->last_name}}">
                                <img src="{{url('img/uploads/avatars/'.$person->avatar)}}"></a>
                          </div>
                          @endif
                          @endforeach
                      </div>
              </div>
              @else
                <a href="#allfriend" class="modal-trigger">ดูเพื่อนทั้งหมด</a>
              @endif

          </div>
      </div>
  </div>
  <!--End whojoined section-->


  </div>
</div>


  <!--Modal Structure-->

  <div id="edit_event" class="modal" style="width: 650px;">

      <div class="modal-content">
          <h4>แก้ไขกิจกรรม</h4>
          <div class="row" >
              <form class="col s12" action="{{url('/event/'.$eve_name->id.'/edit')}}" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                  <div class="row">
                      <div class="input-field col s12">
                          <i class="material-icons prefix">event_note</i>
                          <input placeholder="ตัวอย่าง: กิจกรรมปลูกป่า" id="event-name" type="text" class="validate" name="title"value="{{$eve_name->title}}" required>
                          <label for="event-name">ชื่อกิจกรรม</label>

                      </div>
                  </div>
                  <div class="row">
                   <div class="input-field col s5">
                    <i class="material-icons prefix">people</i>
                     <input name="max_amount" id="amount-attend" type="number" class="validate" value="{{$eve_name->max_amount}}" required>

                     <label for="amount-attend">จำนวนผู้เข้าร่วมสูงสุด</label>
                   </div>
                 </div>


                  <div class="row">
                      <div class="input-field col s12">
                          <i class="material-icons prefix">location_on</i>

                          <textarea placeholder="ตัวอย่าง: 11/2 ซ.สวยสุดในสอย ถนนพระราม32 เขตดุสิต" id="address" class="materialize-textarea" name="location" >{{$eve_name->location}}</textarea>
                          <label for="address">ที่อยู่จัดกิจกรรม</label>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col s3 etime-colm-res">
                          <p><i class="etime-icon material-icons left">schedule</i>เวลาจัดกิจกรรม</p>
                      </div>

                      <div class="input-field col s3 etime-colm">
                          <input placeholder="12:00 น." id="event-name" type="text" class="validate" name="start_time" value="{{$eve_name->start_time}}" >
                      </div>

                      <div class="col s1">
                          <p>ถึง</p>
                      </div>

                      <div class="input-field col s3 etime-colm">
                          <input placeholder="13:00 น." id="event-name" type="text" class="validate" name="finish_time"value="{{$eve_name->finish_time}}" >
                      </div>
                  </div>

                  <div class="row">
                      <div class="col s3 etime-colm-res">
                          <p><i class="material-icons prefix etime-icon">today</i>&nbsp&nbsp วันที่จัดกิจกรรม</p>
                      </div>

                      <div class="input-field col s3 etime-colm">
                          <input id="date" type="date" class="datepicker" name="start_date" value="{{$eve_name->start_date}}">
                      </div>

                      <div class="col s1">
                          <p>ถึง</p>
                      </div>

                      <div class="input-field col s3 etime-colm">
                          <input id="date" type="date" class="datepicker" name="finish_date"value="{{$eve_name->finish_date}}">
                      </div>
                  </div>


                  <div class="row" style="margin-top: 42px;">
                      <div class="input-field col s12">
                          <i class="material-icons prefix">phone</i>
                          <input type="text" placeholder="ตัวอย่าง: 085-994-9230" name="contact"value="{{$eve_name->contact}}" id="tel" ></input>
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
                          <textarea placeholder="ตัวอย่าง: ช่วยสอนหนังสือเด็ก" id="edetail" class="materialize-textarea" name="description"  required>{{$eve_name->description}}</textarea>
                          <label for="edetail">รายละเอียดกิจกรรม</label>
                      </div>
                  </div>

                  <div class="row">
                      <div class="input-field col s12">
                          <i class="material-icons prefix">link</i>
                          <input name="url" placeholder="ตัวอย่าง: www.facebook.com" id="url" type="text" class="validate" value="{{$eve_name->url}}">
                          <label for="url">ลิงค์ภายนอก</label>
                      </div>
                  </div>

          </div>

      </div>
      <div class="modal-footer">
          <button href="#!" class=" modal-action modal-close waves-effect btn-flat">ยกเลิกการแก้ไข</button>
          <button class="modal-action waves-effect btn-flat green white-text" type="submit" name="action">บันทึกการแก้ไข</button>
      </div>
        </form>
  </div>

  <div id="cancelattend" class="modal" style="width: 480px;">
      <div class="modal-content">
        <h4>ยกเลิกการเข้าร่วมกิจกรรม <b>{{$eve_name->title}}</b></h4>
        <p>คุณกำลังทำการยกเลิกการเข้าร่วมกิจกรรมนี้</p>
        <p>ต้องการยกเลิกจริงๆใช่หรือไม่</p>

      </div>
      <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect waves-light btn red darken-3" style="margin-right: 5px;">ยกเลิก</a>
          <a href="{{url('event/cancel/'.$eve_name->id)}}" class=" modal-action modal-close waves-effect waves-light btn cyan lighten-1" style="margin-right: 5px;">ใช่</a>
      </div>
  </div>
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
  <div id="eve-del" class="modal" style="width: 480px; overflow: hidden;">
    <div class="modal-content">
        <h4>ลบกิจกรรม</h4>

        <p>ต้องการลบกิจกรรม <b>{{$eve_name->title}}</b> ใช่หรือไม่</p>
    </div>
    <div class="modal-footer">
      <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect btn-flat">ไม่ ขอคิดดูก่อน</a>
          <a href="{{url('/event/remove/'.$eve_name->id)}}" class=" modal-action modal-close waves-effect btn-flat green white-text">ใช่ ลบกิจกรรมนี้</a>
      </div>
     </div>
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
          @foreach($parties as $p)
          <li class="collection-item avatar transper">
              <img src="{{url('img/uploads/avatars/'.$p->avatar)}}" alt="" class="circle">
              <p>{{$p->first_name.' '.$p->last_name}}</p>
              <a href="{{url('/friend/'.$p->username)}}" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
          </li>
          @endforeach
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
          <a href="{{url('/cancel/'.$eve_name->id)}}" class=" modal-action modal-close waves-effect btn-flat green white-text">ใช่ ยกเลิกการเข้าร่วม</a>
      </div>
  </div>
  <!--End Modal Structure-->
  <script type="text/javascript">
    var $self;
    $('.btn-comment').click(function(){
      $self = $(this);
      var eventId = $self.parent().parent().parent().parent().parent().parent().find('.idofEvent').val();
      var postId = $self.parent().parent().parent().parent().parent().parent().find('.idofEventPost').val();
      console.log(postId+" "+eventId);
      var addingComment = $.ajax({ url: "{{url('/event/board/')}}"+"/"+eventId+"/comment/"+postId,
      type : "POST",
      data : {comment_message: $(this).parent().find('.newComment').val()},
      headers : { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
      })
      .done(function(html) {
        console.log(html);
        $self.parent().parent().parent().parent().parent().find('.commentboxs').append(html);
      })
      .fail(function(){
        console.log('เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง');
      })
    });



  </script>
@stop
