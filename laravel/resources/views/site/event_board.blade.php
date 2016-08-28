@extends('site.layout')
@section('maincontent')

<div class="row" id="act_part">


    <div class="container" >
        <div class="row" style="margin-bottom: 0">
            <div class="col s2">
                <center><a href="EventPage.html"class="waves-effect waves-light btn cyan lighten-1 center"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-right: 8px;"></i>กลับกิจกรรม</a>
                </center>
            </div>
            <div class="col s10">
                <div class="card" style="margin-top: 0">
                    <div class="card-image" >
                        <img src="img/polygons.jpg"  id="eve_img" >
                        <span class="card-title">ชื่อกิจกรรม</span>
                    </div>
                    <div class="card-content">
                        <p >สร้างโดย <a href="Social-Profile.html" style="color: #0d47a1;">ยายละม้าย คล้ายจะเป็นลม</a>
                            <a id="status_join "class="waves-effect waves-light btn  light-green darken-1 right" style="color: white;"><i class="fa  fa-check"></i> เข้าร่วมแล้ว</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s6 offset-s2">
                <div class="row" id="eve_desc">
                    <!--Start Post Box-->
                    <div class="card white" style="margin-bottom: 19px; height: auto;">
                        <ul class="tabs tab-set" style="background-color: #FFF4F5; color:#EE6E74">
                            <li class="tab col s3"><a class="active" href="#status"><i class="fa fa-pencil" aria-hidden="true"></i> แบ่งปันเรื่องราว</a></li>
                            <li class="tab col s3"><a href="#picpost"><i class="fa fa-camera" aria-hidden="true"></i> แบ่งปันรูปภาพ</a></li>
                        </ul>
                        <!--Start Status Post-->
                        <div id="status">
                            <div class="card-content black-text" style="margin-bottom: -4%;">
                                <div class="row valign-wrapper">
                                    <div class="col s2 eve-cmtpic">
                                        <img src="img/pic.jpg" alt="" class="postbox-pic media-object dp img-circle imgthumb">
                                    </div>
                                    <div class="col s9">
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                                            <label style="font-size: 13pt;" for="textarea1">บอกสิ่งดีๆวันนี้ให้เพื่อนคุณรู้สิ!!</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <a class="eve-shareBtn waves-effect waves-light btn"><i class="fa fa-bullhorn left" aria-hidden="true"></i>แบ่งปันเลย!</a>

                            </div>
                        </div>
                        <!--End Status Post-->
                        <!--Start Pic Post-->
                        <div id="picpost">
                            <div class="card-content black-text" style="margin-bottom: -4%;">
                                <div class="row valign-wrapper">
                                    <div class="col s2 eve-cmtpic">
                                        <img src="img/pic.jpg" alt="" class="postbox-pic2 media-object dp img-circle imgthumb"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">

                                        <div class="file-field input-field">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                <label style="font-size: 13pt;" for="textarea1">บอกอะไรเกี่ยวกับรูปภาพหน่อยสิ!</label>
                                            </div>
                                            <a class="cyan darken-2 waves-effect waves-light btn">เลือกรูปภาพ
                                                <input type="file"><i class="fa fa-camera left" aria-hidden="true"></i></a>
                                                <input class="file-path validate" type="text" id="myfile-path">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <a class="eve-shareBtn waves-effect waves-light btn"><i class="fa fa-bullhorn left" aria-hidden="true"></i>แบ่งปันเลย!</a>
                                </div>
                            </div>
                            <!--End Pic Post-->
                        </div>
                        <!--End Post Box-->
                        <!--Post-->
                        <div class="card white" data-step="1" data-intro="Ok, wasn't that fun?" data-position='right'>

                            <div class="card-content black-text">
                                <div class="row">
                                    <div class="col s2 push-s10" style="margin-bottom:-14px; margin-top: -3px;">
                                        <a href=""><i class="fa fa-pencil-square-o fa-2x tooltipped" data-position="bottom" data-delay="50" data-tooltip="แก้ไข"></i></a>
                                    </div>
                                    <div class="col s2 push-s9" style="margin-bottom: -14px; margin-top: -3px;">
                                        <a href=""><i class="fa fa-times fa-2x tooltipped" data-position="bottom" data-delay="50" data-tooltip="ลบ"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3">
                                        <img class="eve-stpic-po media-object dp img-circle imgthumb" src="img/pic5.jpg" >
                                    </div>
                                    <div class="col s9" id="commenthead">
                                        <span class="eve-namecomment">ยายละม้าย คล้ายจะเป็นลม <span class="badge admin">เจ้าของกิจกรรม</span></span>
                                        <p id="datecomment">21 เมษายน 2558, 22.01 น.
                                        </p>
                                    </div>
                                    <div class="eve-post status-post col s12">
                                        <p>กิจกรรมปั่นจักรยานวันหยุด</p>
                                        <div class="card-image">
                                            <img class="materialboxed" src="img/bike.JPG">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-action">
                                <div class="row">
                                    <div class="col s1">
                                        <a href="#"><i class="eve-likeicon fa fa-heart fa-3x" aria-hidden="true"></i></a>
                                        <span class="eve-liketext">ถูกใจ</span>
                                    </div>
                                    <div class="col s2"></div>
                                    <div class="col s2 push-s1">
                                        <div class="eve-likeboxam">
                                            <p id="eve-likeno">125+</p>
                                        </div>
                                    </div>
                                    <div class="col s8 eve-comment">
                                        <div class="input-field">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                <label style="font-size: 13pt;" for="textarea1">แสดงความคิดเห็น</label>
                                            </div>
                                            <a style="left: 11px;" class="waves-effect waves-light btn">ตกลง</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Post-->

                        <!--Post-->
                        <div class="card white" data-step="1" data-intro="Ok, wasn't that fun?" data-position='right'>

                            <div class="card-content black-text">
                                <div class="row">
                                    <div class="col s2 push-s10" style="margin-bottom:-14px; margin-top: -3px;">
                                        <a href=""><i class="fa fa-pencil-square-o fa-2x tooltipped" data-position="bottom" data-delay="50" data-tooltip="แก้ไข"></i></a>
                                    </div>
                                    <div class="col s2 push-s9" style="margin-bottom: -14px; margin-top: -3px;">
                                        <a href=""><i class="fa fa-times fa-2x tooltipped" data-position="bottom" data-delay="50" data-tooltip="ลบ"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3">
                                        <img class="eve-stpic-po media-object dp img-circle imgthumb" src="img/pic5.jpg" >
                                    </div>
                                    <div class="col s9" id="commenthead">
                                        <span class="eve-namecomment">ยายละม้าย คล้ายจะเป็นลม <span class="badge admin">เจ้าของกิจกรรม</span></span>
                                        <p id="datecomment">21 เมษายน 2558, 22.01 น.
                                        </p>
                                    </div>
                                    <div class="eve-post status-post col s12">
                                        <p>อากาศแจ่มใสเหมาะแก่การไปดิสนีย์แลนด์ หาเพื่อนร่วมทริปเม้นๆ</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-action">
                                <div class="row">
                                    <div class="col s1">
                                        <a href="#"><i class="eve-likeicon fa fa-heart fa-3x" aria-hidden="true"></i></a>
                                        <span class="eve-liketext">ถูกใจ</span>
                                    </div>
                                    <div class="col s2"></div>
                                    <div class="col s2 push-s1">
                                        <div class="eve-likeboxam">
                                            <p id="eve-likeno">125+</p>
                                        </div>
                                    </div>
                                    <div class="col s8 eve-comment">
                                        <div class="input-field">
                                           <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                                            <label style="font-size: 13pt;" for="textarea1">แสดงความคิดเห็น</label>
                                        </div>
                                        <a style="left: 11px;" class="waves-effect waves-light btn">ตกลง</a>
                                    </div>
                                </div>
                            </div>
                        </div>


@stop
