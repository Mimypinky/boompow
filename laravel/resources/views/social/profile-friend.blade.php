@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%;">
    <div class="row">
        <div class="col s12" style="margin-top: 12%;">
            <div class="row">
                <!--Pro pic-->

                <div class="row">
                    <div style="text-align: center;">
                        <img class="pro-pic media-object dp img-circle" src="{{url('img/pic4.jpg')}}"
                        >

                        <form action="#">
                            <div class="file-field input-field">
                                <span class="cam-input tooltipped" data-position="right" data-delay="50" data-tooltip="เปลี่ยนภาพประจำตัว">
                                <i class="cam-icon fa fa-camera"></i>
                                <input type="file">
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Pro pic-->
                <!--Pro head-->
                <div class="row">
                    <div class="col s8 offset-s2 pro-detail">
                        <a class="modal-trigger black-text edit-btn waves-effect waves-light btn" href="#profile-edit" style="background-color: #ebeef1"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>
                        <div id="proname">
                            <h2>{{$account->first_name}}  {{$account->last_name}}</h2>
                        </div>

                        <div id="prodetail">
                            <p>
                              อิอิ รอแป๊ป
                            </p>
                        </div>
                        <?php
                        $fid = $account->id;
                        $myId = Auth::user()->id;
                        $isPending = DB::table('friends')->where('from_user_id' , $fid)
                        ->where('to_user_id' , $myId)->where('status' , 'pending')->count(); ?>
                        <?php
                        $user = Auth::user()->id;
                        $friend =$account->id;
                        $status=DB::table('friends')->select('status')->where([['from_user_id',$user],['to_user_id',$friend]]) ?>
                        @if(! isset($post))

                        <div class="center"  id="friendRequest" style="margin-bottom:1.5em;margin-top:-3.5em">
                          <form action='{{url('Pending')}}' method='post'>
                            {{ csrf_field() }}
                        <button class="btn red waves-effect waves-light "  type="submit" name="action" >เพิ่มเป็นเพื่อน</button>

                          <input type='hidden' value='{{$account->id}}' name='aid'>
                        <!--  <input type='submit' value='Add'>

                      href="{{url('FriendReq')}}"-->

                        </form>

                      </div>

                        @else
                        <div class="center"  id="friend" style="margin-bottom:1.5em;margin-top:-3.5em">

                        <a class="btn orange waves-effect waves-light " href="{{url('unfriend')}}" >เพื่อน</a>

                        </div>
                        @endif
                        <div style="font-size: 14pt; text-align: center;">
                            <a href="#whofriend" class="modal-trigger"><span class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูเพื่อนของฉัน"><i class="fa fa-users" aria-hidden="true"></i><span>&nbsp100</span><span>&nbspเพื่อน</span></span></a>
                            <span class="border-divi"></span>
                            <span><i class="fa fa-file-text-o" aria-hidden="true"></i><span>&nbsp100</span><span>&nbspโพสต์</span></span>
                            <span class="border-divi"></span>
                            <a href="#picstore" class="modal-trigger"><span class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูรูปภาพที่เคยโพสต์"><i class="fa fa-picture-o" aria-hidden="true"></i><span>&nbsp100</span><span>&nbspรูปภาพ</span></span></a>
                        </div>
                    </div>
                </div>
                <!--End Pro head-->

                <!--timeline-->
                @if(! isset($post))
                <div id="prodetail">
                    <p> {{$msg}}</p>
                </div>
                @else

                <div class="row" style="margin-top: 11%;">
                    <div class="col s8 offset-s2 pro-upstatus">
                        <!--timeline mypost-->
                        <div class="row" style="">
                            <div class="col s12">
                                <div class="card" style="box-shadow:none; background-color: transparent;">
                                    <div class="card-content black-text" >
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="{{url('img/pic4.jpg')}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge me badge">ฉัน</span>
                                              <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s9 upsta-line">
                                            <div class="col s12" id="commenthead">
                                                <span id="namecomment">พรทิพย์ มีชัย
                                                </span>
                                                <div class="edit-cmt-sec">
                                                    <a class="black-text edit-btn-2 waves-effect waves-light btn modal-trigger" href="#post-edit"
                                                    style="background-color: #ebeef1"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>
                                                    <a class="black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1"><i class="fa fa-trash-o"></i> ลบ</a>
                                                </div>

                                                <p id="datecomment">21 เมษายน 2558, 22.01 น.
                                                </p>
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
                                                            <a href="Social-Profile-friend-v2.html" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="สมัย สมร" href="#"><img class="pic-wholike" src="{{url('img/pic1.jpg')}}"></a>


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
                                                            <a class="comment-btn-feed waves-effect waves-light btn">ตกลง</a>
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
                                                                    <a href="Social-Profile-friend-v2.html"><img src="{{url('img/pic4.jpg')}}" alt="" class="circle">
                                                                        <span class="title title-name">สมัย สมร</span></a>
                                                                        <p id="datecomment">21 เมษายน 2558, 22.01 น.</p>
                                                                        <p class="space-cmt">ไปด้วยคนจ้าทักมา <br></p>
                                                                    </li>
                                                                    <li class="transper collection-item avatar">
                                                                        <img src="{{url('img/pic5.jpg')}}" alt="" class="circle">
                                                                        <span class="title title-name">ยายละม้าย คล้ายจะเป็นลม</span>
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
                        <!--End timeline mypost-->
                        <div class="section"></div>
                        <!--timeline friend post-->
                        <div class="row" style="">
                            <div class="col s12">
                                <div class="card" style="box-shadow:none; background-color: transparent;">
                                    <div class="card-content black-text" >
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="img/pic2.jpg" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge me badge f">เพื่อน</span>
                                              <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s9 upsta-line-f">
                                            <div class="col s12" id="commenthead">
                                                <span id="namecomment">สมัคร รักสนุกไม่คิดผูกพัน
                                                </span>
                                                <div class="edit-cmt-sec-f">

                                                    <a class="black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1;"><i class="fa fa-trash-o"></i> ลบ</a>
                                                </div>

                                                <p id="datecomment">21 เมษายน 2558, 22.01 น.
                                                </p>
                                            </div>
                                            <div class="status-post2 col s12">
                                                <p>พรทิพย์จ้ะ ไปข้าวสารกันไหม</p>
                                            </div>
                                            <div class="card-action" style="border: none;">
                                                <div class="row wholike-sec">
                                                    <div class="col s1 like-section">
                                                        <a class="tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="ถูกใจ"><img class="heart-i" src="img/heart-like.png"></a>

                                                    </div>
                                                    <div class="col s2"></div>
                                                    <div class="col s2">
                                                        <div class="likecount">
                                                            <a href="#wholike" class="modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูเพื่อนที่ถูกใจโพสต์นี้" href="" style="color: black;">125+</a>
                                                        </div>
                                                    </div>
                                                    <div class="col s2">
                                                        <div class="wholike">
                                                            <a href="Social-Profile-friend-v2.html" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="สมัย สมร" href="#"><img class="pic-wholike" src="img/pic4.jpg"></a>


                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="img/pic5.jpg"></a>

                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="img/pic2.jpg"></a>

                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="img/pic3.jpg"></a>

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
                                                            <a class="comment-btn-feed waves-effect waves-light btn">ตกลง</a>
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
                                                                    <a href="Social-Profile-friend-v2.html"><img src="img/pic4.jpg" alt="" class="circle">
                                                                        <span class="title title-name">สมัย สมร</span></a>
                                                                        <p id="datecomment">21 เมษายน 2558, 22.01 น.</p>
                                                                        <p class="space-cmt">ไปด้วยคนจ้าทักมา <br></p>
                                                                    </li>
                                                                    <li class="transper collection-item avatar">
                                                                        <img src="img/pic5.jpg" alt="" class="circle">
                                                                        <span class="title title-name">ยายละม้าย คล้ายจะเป็นลม</span>
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

                        <!--timeline mypost pic-->
                        <div class="row" style="">
                            <div class="col s12">
                                <div class="card" style="box-shadow:none; background-color: transparent;">
                                    <div class="card-content black-text" >
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="img/pic.jpg" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge me badge">ฉัน</span>
                                              <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s9 upsta-line">
                                            <div class="col s12" id="commenthead">
                                                <span id="namecomment">พรทิพย์ มีชัย
                                                </span>
                                                <div class="edit-cmt-sec">
                                                    <a class="black-text edit-btn-2 waves-effect waves-light btn modal-trigger selected" href="#pic-edit"
                                                    style="background-color: #ebeef1"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>
                                                    <a class="black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1"><i class="fa fa-trash-o"></i> ลบ</a>
                                                </div>

                                                <p id="datecomment">21 เมษายน 2558, 22.01 น.
                                                </p>
                                            </div>
                                            <div class="status-post2 col s12">
                                                <p>ความรักทำให้ตาบอด</p>
                                                <div class="card-image">
                                                    <img class="materialboxed" src="img/love.jpg">
                                                </div>
                                            </div>
                                            <div class="card-action" style="border: none;">
                                                <div class="row wholike-sec">
                                                    <div class="col s1 like-section">
                                                        <a class="tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="ถูกใจ"><img class="heart-i" src="img/heart-like.png"></a>

                                                    </div>
                                                    <div class="col s2"></div>
                                                    <div class="col s2">
                                                        <div class="likecount">
                                                            <a href="#wholike" class="modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูเพื่อนที่ถูกใจโพสต์นี้" href="" style="color: black;">125+</a>
                                                        </div>
                                                    </div>
                                                    <div class="col s2">
                                                        <div class="wholike">
                                                            <a href="Social-Profile-friend-v2.html" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="สมัย สมร" href="#"><img class="pic-wholike" src="img/pic4.jpg"></a>


                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="img/pic5.jpg"></a>

                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="img/pic2.jpg"></a>

                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="img/pic3.jpg"></a>

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
                                                            <a class="comment-btn-feed waves-effect waves-light btn">ตกลง</a>
                                                        </div>
                                                    </form>
                                                   </div>

                                                   <div class="comment-section">
                                                       <ul class="cmt-coll collapsible" data-collapsible="accordion">
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
                        <!--timeline pin mypost-->
                        <div class="row" style="">
                            <div class="col s12">
                                <div class="card" style="box-shadow:none; background-color: transparent;">
                                    <div class="card-content black-text" >
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="img/pic.jpg" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge2 me badge pin">ปักหมุด</span>
                                              <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s9 upsta-line-pin">
                                            <div class="col s12" id="commenthead">
                                                <span id="namecomment">พรทิพย์ มีชัย
                                                </span>
                                                <i class="fa fa-thumb-tack fa-lg pinpost" aria-hidden="true"></i>
                                                <div class="edit-cmt-sec-f">

                                                    <a class="black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1;"><i class="fa fa-trash-o"></i> ลบ</a>
                                                </div>

                                                <p id="datecomment">21 เมษายน 2558, 22.01 น.
                                                </p>
                                            </div>
                                            <div class="status-post2 col s12">
                                                <div class="row">
                                                    <div class="col s12 m11">
                                                        <div class="card non-shadow" style="margin-top: 13px;">
                                                            <div class="card-image">
                                                                <img src="img/healthy.jpg">
                                                            </div>
                                                            <div class="card-content">
                                                                <h5>Card Title</h5>
                                                                <p>I am a very simple card. I am good at containing small bits of information.
                                                                I am convenient because I require little markup to use effectively.</p>
                                                            </div>
                                                            <div class="card-action">
                                                                <a href="#">This is a link</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card-action" style="border: none;">
                                                <div class="row wholike-sec">
                                                    <div class="col s1 like-section">
                                                        <a class="tooltipped" href="#" data-position="bottom" data-delay="50" data-tooltip="ถูกใจ"><img class="heart-i" src="img/heart-like.png"></a>

                                                    </div>
                                                    <div class="col s2"></div>
                                                    <div class="col s2">
                                                        <div class="likecount">
                                                            <a href="#wholike" class="modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูเพื่อนที่ถูกใจโพสต์นี้" href="" style="color: black;">125+</a>
                                                        </div>
                                                    </div>
                                                    <div class="col s2">
                                                        <div class="wholike">
                                                            <a href="Social-Profile-friend-v2.html" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="สมัย สมร" href="#"><img class="pic-wholike" src="img/pic4.jpg"></a>


                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="img/pic5.jpg"></a>

                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="img/pic2.jpg"></a>

                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href=""><img class="pic-wholike" src="img/pic3.jpg"></a>

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
                                                            <a class="comment-btn-feed waves-effect waves-light btn">ตกลง</a>
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
                                                                    <a href="Social-Profile-friend-v2.html"><img src="img/pic4.jpg" alt="" class="circle">
                                                                        <span class="title title-name">สมัย สมร</span></a>
                                                                        <p id="datecomment">21 เมษายน 2558, 22.01 น.</p>
                                                                        <p class="space-cmt">ไปด้วยคนจ้าทักมา <br></p>
                                                                    </li>
                                                                    <li class="transper collection-item avatar">
                                                                        <img src="img/pic5.jpg" alt="" class="circle">
                                                                        <span class="title title-name">ยายละม้าย คล้ายจะเป็นลม</span>
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
                        <!--End timeline pin mypost-->
                    </div>
                </div>
                <!--End timeline-->
@endif
                <!-- Modal Structure -->
                    <!--whofriend-->
                    <div id="whofriend" class="modal" style="width: 500px;">
                        <ul class="collection with-header f-modal">
                            <li class="collection-header transper"><i style="line-height: 1;" class="fa fa-users fa-lg left" aria-hidden="true"></i><h4>เพื่อนของฉัน</h4>
                            <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>
                            <li class="collection-item avatar transper">
                                <img src="img/pic.jpg" alt="" class="circle">
                                <p>เจ๊สมร ดอนเจดีย์</p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                            </li>
                            <li class="collection-item avatar transper">
                                <img src="img/pic.jpg" alt="" class="circle">
                                <p>พิชิต จิตมั่นคง </p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                            </li>
                            <li class="collection-item avatar transper">
                                <img src="img/pic.jpg" alt="" class="circle">
                                <p>มาโนช ชงชม </p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                            </li>
                        </ul>
                    </div>
                    <!--picstore-->
                    <div id="picstore" class="modal pic-modal">
                        <ul class="collection with-header f-modal">
                            <li class="collection-header transper"><i style="line-height: 1;" class="fa fa-picture-o fa-lg left" aria-hidden="true"></i><h4>รูปภาพของฉัน</h4>
                            <div class="modal-close close-mbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>
                        </ul>
                        <div class="row pic-rspace">
                            <div class="col s12 m7 l4 pic-col">
                                <img src="img/bike.jpg" style="width:100%;">
                                <div class="divider"></div>
                                <div class="pic-edit-sec">
                                <a class="modal-trigger" href="#pic-edit"><span>แก้ไข</span></a>
                                <span class="border-divi2"></span>
                                <a href="#"><span>ลบ</span></a>
                                </div>
                            </div>
                            <div class="col s12 m7 l4 pic-col">
                                <img src="img/wf.jpg" style="width:100%;">
                                <div class="divider"></div>
                                <div class="pic-edit-sec">
                                <a class="modal-trigger" href="#pic-edit"><span>แก้ไข</span></a>
                                <span class="border-divi2"></span>
                                <a href="#"><span>ลบ</span></a>
                                </div>
                            </div>
                            <div class="col s12 m7 l4 pic-col">
                                <img src="img/cover.jpg" style="width:100%;">
                                <div class="divider"></div>
                                <div class="pic-edit-sec">
                                <a class="modal-trigger" href="#pic-edit"><span>แก้ไข</span></a>
                                <span class="border-divi2"></span>
                                <a href="#"><span>ลบ</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="row pic-rspace">
                            <div class="col s12 m7 l4 pic-col">
                                <img src="img/bike.jpg" style="width:100%;">
                                <div class="divider"></div>
                                <div class="pic-edit-sec">
                                <a class="modal-trigger" href="#pic-edit"><span>แก้ไข</span></a>
                                <span class="border-divi2"></span>
                                <a href="#"><span>ลบ</span></a>
                                </div>
                            </div>
                            <div class="col s12 m7 l4 pic-col">
                                <img src="img/wf.jpg" style="width:100%;">
                                <div class="divider"></div>
                                <div class="pic-edit-sec">
                                <a class="modal-trigger" href="#pic-edit"><span>แก้ไข</span></a>
                                <span class="border-divi2"></span>
                                <a href="#"><span>ลบ</span></a>
                                </div>
                            </div>
                            <div class="col s12 m7 l4 pic-col">
                                <img src="img/cover.jpg" style="width:100%;">
                                <div class="divider"></div>
                                <div class="pic-edit-sec">
                                <a class="modal-trigger" href="#pic-edit"><span>แก้ไข</span></a>
                                <span class="border-divi2"></span>
                                <a href="#"><span>ลบ</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--pic-edit-->
                    <div id="pic-edit" class="modal" style="width: 500px;">
                        <ul class="collection with-header f-modal">
                            <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-pencil-square-o fa-lg left" aria-hidden="true"></i><h4>แก้ไขโพสต์</h4>
                            <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>

                            <li class="transper collection-item avatar">
                                <img src="img/pic5.jpg" alt="" class="circle">
                                <span class="title title-name">ยายละม้าย คล้ายจะเป็นลม</span>
                                <div class="card-image">
                                    <img width="300" src="img/love.jpg">
                                </div>
                                <form action="#">
                                    <div class="file-field input-field">
                                        <div class="btn edit-uppix-btn black-text">
                                            <span style="font-size: 14pt;"><i class="fa fa-camera"></i>&nbspอัพโหลดรูปภาพใหม่</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="edit-uppix-pathbtn file-path validate" type="text" placeholder="ยังไม่ได้เลือกไฟล์ใด">
                                        </div>
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
                    <!--post-edit-->
                    <div id="post-edit" class="modal" style="width: 500px;">
                        <ul class="collection with-header f-modal">
                            <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-pencil-square-o fa-lg left" aria-hidden="true"></i><h4>แก้ไขโพสต์</h4>
                            <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>

                            <li class="transper collection-item avatar">
                                <img src="img/pic5.jpg" alt="" class="circle">
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
                    <!--profile-edit-->
                    <div id="profile-edit" class="modal" style="width: 500px;">
                        <ul class="collection with-header f-modal">
                            <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-pencil-square-o fa-lg left" aria-hidden="true"></i><h4>แก้ไขข้อมูลส่วนตัว</h4>
                            <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>

                            <li>
                                <div class="row" style="margin-top: 5%;">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                              <input id="name-pro" type="text" class="validate">
                                              <label for="name-pro">ชื่อ</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                              <input id="detail-pro" type="text" class="validate">
                                              <label for="detail-pro">อธิบายเกี่ยวกับคุณ</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
                                <img src="img/pic.jpg" alt="" class="circle">
                                <p>เจ๊สมร ดอนเจดีย์</p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                            </li>
                            <li class="collection-item avatar transper">
                                <img src="img/pic.jpg" alt="" class="circle">
                                <p>พิชิต จิตมั่นคง </p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                            </li>
                            <li class="collection-item avatar transper">
                                <img src="img/pic.jpg" alt="" class="circle">
                                <p>มาโนช ชงชม </p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                            </li>
                        </ul>
                    </div>


                    <!-- End Modal Structure -->


            </div>
        </div>
    </div>
</div>
