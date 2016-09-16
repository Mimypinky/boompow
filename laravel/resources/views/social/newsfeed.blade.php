@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%;">
    <div class="row">
        <div class="col s8" style="margin-top: 15%;">
            <div class="card pro-upstatus-feed">
                <div class="card-image">
                    <img class="feed-picBg" src="img/bgpro.png">
                    <span class="card-title" style="top: 21px; left: 36%;">
                        <img class="feed-picPro circle feed-resPic" src="img/pic.jpg"></span>
                    </div>
                    <div class="card-action">
                        <a href="Social-Profile-v2.html" class="prolink-btn waves-effect waves-light btn "><i class="fa fa-user left" aria-hidden="true"></i>ไปที่หน้าของฉัน</a>
                        <h5 style="margin-top: -4%; color:#0d47a1;">พรทิพย์ มีชัย</h5>
                        <p class="feed-pro-detail"><i class="fa fa-user" aria-hidden="true"></i> อายุ 75 ปี บ้านอยู่สีลมซอยสี่ ชอบขี่ม้า ว่างๆชอบดื่มไฮเนเก้น</p>
                    </div>
                </div>
            </div>



            <!--Start Post Box-->
            <div class="col s8 pro-upstatus-feed">
                <ul class="collection with-header f-modal">
                    <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-pencil-square fa-3x left" aria-hidden="true"></i><h4>อัพเดตข่าวของคุณ</h4>
                    </li>
                </ul>
              <div class="row" style="">
                            <div class="col s12">
                                <div class="card" style="box-shadow:none; background-color: transparent;">
                                    <div class="card-content black-text" >
                                        <div class="input-field col s3 img-position-res">
                                             <img src="img/pic.jpg" alt="" class="postbox-pic media-object img-circle imgthumb"> <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s8 upsta-line">
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
                                                <a class="proupsta-btn waves-effect waves-light btn">
                                                โพสต์</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <!--End Post Box-->


            <!--Start Suggest Friend Part-->
            <div class="col s4 suggestF-sec">
                <div class="card pro-upstatus-feed">
                    <ul class="collection with-header f-modal">
                        <li class="collection-header transper suggest-label"><i style="line-height: 1.3;" class="fa fa-user-plus fa-2x left" aria-hidden="true"></i>
                        <h5>แนะนำเพื่อนใหม่</h5>
                        </li>
                    </ul>
                    <div id="test">
                        <div class="card-content black-text">
                           <ul class="collection" style="margin-top: -15px;">
                            <li class="collection-item avatar">
                                <img src="img/pic4.jpg" alt="" class="circle pic-border">
                                <h5 class="title">ยายละม้าย คล้ายจะเป็นลม</h5>
                                <a class="feed-addF-btn waves-effect waves-light btn"><i class="fa fa-user-plus left" aria-hidden="true"></i>เพิ่มเป็นเพื่อน</a>
                            </li>
                            <li class="collection-item avatar">
                                <img src="img/pic4.jpg" alt="" class="circle pic-border">
                                <h5 class="title">ยายละม้าย คล้ายจะเป็นลม</h5>
                                <a class="feed-addF-btn waves-effect waves-light btn"><i class="fa fa-user-plus left" aria-hidden="true"></i>เพิ่มเป็นเพื่อน</a>
                            </li>
                            <li class="collection-item avatar">
                                <img src="img/pic4.jpg" alt="" class="circle pic-border">
                                <h5 class="title">ยายละม้าย คล้ายจะเป็นลม</h5>
                                <a class="feed-addF-btn waves-effect waves-light btn"><i class="fa fa-user-plus left" aria-hidden="true"></i>เพิ่มเป็นเพื่อน</a>
                            </li>
                            <li class="collection-item avatar">
                                <img src="img/pic4.jpg" alt="" class="circle pic-border">
                                <h5 class="title">ยายละม้าย คล้ายจะเป็นลม</h5>
                                <a class="feed-addF-btn waves-effect waves-light btn"><i class="fa fa-user-plus left" aria-hidden="true"></i>เพิ่มเป็นเพื่อน</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Suggest Friend Part-->

        <!--Start newsfeed section-->
        <div class="col s8 pro-upstatus pro-feed">
        <ul class="collection with-header f-modal">
            <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-rss-square fa-3x left" aria-hidden="true"></i><h4>มีอะไรใหม่วันนี้</h4>
            </li>
        </ul>
        <!--timeline mypost-->
            <div class="row" style="">
                <div class="col s12">
                    <div class="card" style="box-shadow:none; background-color: transparent;">
                        <div class="card-content black-text" >
                            <div class="input-field col s3 img-position-res">
                                <img src="img/pic.jpg" alt="" class="postbox-pic media-object img-circle imgthumb">
                                <span class="posbadge-feed me badge">ฉัน</span>
                                <!-- notice the "circle" class -->
                            </div>
                            <div class="input-field col s9 upsta-line">
                                <div class="col s12" id="commenthead">
                                    <span id="namecomment">พรทิพย์ มีชัย</span>
                                    <div class="edit-cmt-sec">
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
                                                <a href="Social-Profile-friend-v2.html" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="สมัย สมร" href="#"><img class="pic-wholike" src="img/pic4.jpg">
                                                </a>
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
            <!--timeline friend post-->
            <div class="row" style="">
                <div class="col s12">
                    <div class="card" style="box-shadow:none; background-color: transparent;">
                        <div class="card-content black-text" >
                            <div class="input-field col s3 img-position-res">
                                <img src="img/pic2.jpg" alt="" class="postbox-pic media-object img-circle imgthumb">
                                <span class="posbadge-feed me badge f">เพื่อน</span>
                                <!-- notice the "circle" class -->
                            </div>
                            <div class="input-field col s9 upsta-line-f">
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
                                        <div class="input-field col s3 img-position-res">
                                             <img src="img/pic4.jpg" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge-feed me badge f">เพื่อน</span>
                                              <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s9 upsta-line-f">
                                            <div class="col s12" id="commenthead">
                                                <span id="namecomment">สมัย สมร
                                                </span>
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
                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href="#"><img class="pic-wholike" src="img/pic4.jpg"></a>


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
                                        <div class="input-field col s3 img-position-res">
                                             <img src="img/pic4.jpg" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge2-feed posbadge me badge pin">ปักหมุด</span>
                                              <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s9 upsta-line-pin">
                                            <div class="col s12" id="commenthead">
                                                <span id="namecomment">สมัย สมร
                                                </span>
                                                <i class="fa fa-thumb-tack fa-lg pinpost" aria-hidden="true"></i>
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
                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ละม้าย คล้ายจะเป็นลม" href="#"><img class="pic-wholike" src="img/pic4.jpg"></a>


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
                                                                    <a href="Social-Profile-friend.html"><img src="img/pic4.jpg" alt="" class="circle">
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
        <!--End newsfeed section-->
    </div>

    <!--Modal Structure-->
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

@stop
