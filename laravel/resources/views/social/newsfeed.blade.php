@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%;">
    <div class="row">
        <div class="col s8" style="margin-top: 15%;">
            <div class="card">
                <div class="card-image">
                    <img class="feed-picBg" src="img/bgpro.png">
                    <span class="card-title" style="top: 21px; left: 36%;">
                        <img class="feed-picPro circle" src="img/pic.jpg"></span>
                    </div>
                    <div class="card-action">
                        <a href="Social-Profile.html" style="margin-left: 73%;" class="waves-effect waves-light btn "><i class="fa fa-user left" aria-hidden="true"></i>ไปที่หน้าของฉัน</a>
                        <h5 style="margin-top: -4%; color:#0d47a1;">พรทิพย์ มีชัย</h5>
                        <p class="feed-pro-detail"><i class="fa fa-user" aria-hidden="true"></i> อายุ 75 ปี บ้านอยู่สีลมซอยสี่ ชอบขี่ม้า ว่างๆชอบดื่มไฮเนเก้น</p>
                    </div>
                </div>
            </div>

            <!--Start Friend Part-->
            <div class="col s4" style="margin-top: 15%;">
                <div class="card white">
                    <ul class="tabs tab-set" style="background-color: #EE6E74;color: #FFF4F5">
                        <li class="tab"><a class="active" href="#test" style="color:#FFF4F5;"><i class="fa fa-users" aria-hidden="true"></i> เพื่อนของฉัน</a></li>
                    </ul>
                    <div id="test">
                        <div class="card-content black-text">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><a href="#"><img class="circle feed-friend" src="img/pic2.jpg"></a></td>
                                        <td><a href="#"><img class="circle feed-friend" src="img/pic3.jpg"></a></td>
                                        <td><a href="Social-Profile-friend.html"><img class="circle feed-friend" src="img/pic4.jpg"></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><img class="circle feed-friend" src="img/pic5.jpg"></a></td>
                                        <td><a href="#"><img class="circle feed-friend" src="img/mim_tn.jpg"></a></td>
                                        <td><a href="#"><img class="circle feed-friend" src="img/Non_thumbnail.jpg"></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><img class="circle feed-friend" src="img/friends/mick_tn.jpg"></a></td>
                                        <td><a href="#"><img class="circle feed-friend" src="img/friends/ner_tn.jpg"></a></td>
                                        <td><a href="FriendList.html"><div class="circle feed-friend" style="background-color: #BC2C33;"><p class="white-text center-align" style="padding-top: 25px">ดูทั้งหมด</p></a></div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Friend Part-->

            <!--Start Post Box-->
            <div class="col s8">
              <div class="card white" style="margin-bottom: 30px;">
                <ul class="tabs tab-set" style="background-color: #FFF4F5;">
                    <li class="tab col s3"><a class="active" href="#status"><i class="fa fa-pencil" aria-hidden="true"></i> แบ่งปันเรื่องราว</a></li>
                    <li class="tab col s3"><a href="#picpost"><i class="fa fa-camera" aria-hidden="true"></i> แบ่งปันรูปภาพ</a></li>
                </ul>
                <!--Start Status Post-->
                <div id="status">
                    <div class="card-content black-text" style="margin-bottom: -4%;">
                        <div class="row valign-wrapper">
                            <div class="col s2">
                                <img src="img/pic.jpg" alt="" class="postbox-pic media-object dp img-circle imgthumb"> <!-- notice the "circle" class -->
                            </div>
                            <div class="col s10">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label style="font-size: 13pt;" for="textarea1">บอกสิ่งดีๆวันนี้ให้เพื่อนคุณรู้สิ!!</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <a class="waves-effect waves-light btn"><i class="fa fa-bullhorn left" aria-hidden="true"></i>แบ่งปันเลย!</a>
                    </div>
                </div>
                <!--End Status Post-->
                <!--Start Pic Post-->
                <div id="picpost">
                    <div class="card-content black-text" style="margin-bottom: -4%;">
                        <div class="row valign-wrapper">
                            <div class="col s2">
                                <img src="img/pic.jpg" alt="" class="postbox-pic2 media-object dp img-circle imgthumb"> <!-- notice the "circle" class -->
                            </div>
                            <div class="col s10">
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
                            <a class="waves-effect waves-light btn"><i class="fa fa-bullhorn left" aria-hidden="true"></i>แบ่งปันเลย!</a>
                        </div>
                    </div>
                    <!--End Pic Post-->
                </div>
            </div>
            <!--End Post Box-->


            <!--Start Suggest Friend Part-->
            <div class="col s4">
                <div class="card white">
                    <ul class="tabs tab-set" style="background-color: #EE6E74;">
                        <li class="tab"><a class="active" href="#test" style="color:#FFF4F5;"><i class="fa fa-user-plus" aria-hidden="true"></i> แนะนำเพื่อนใหม่</a></li>
                    </ul>
                    <div id="test">
                        <div class="card-content black-text">
                           <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="img/pic4.jpg" alt="" class="circle pic-border">
                                <h5 class="title">ยายละม้าย คล้ายจะเป็นลม</h5>
                                <a class="waves-effect waves-light btn"><i class="fa fa-user-plus left" aria-hidden="true"></i>เพิ่มเป็นเพื่อน</a>
                            </li>
                            <li class="collection-item avatar">
                                <img src="img/pic4.jpg" alt="" class="circle pic-border">
                                <h5 class="title">ยายละม้าย คล้ายจะเป็นลม</h5>
                                <a class="waves-effect waves-light btn"><i class="fa fa-user-plus left" aria-hidden="true"></i>เพิ่มเป็นเพื่อน</a>
                            </li>
                            <li class="collection-item avatar">
                                <img src="img/pic4.jpg" alt="" class="circle pic-border">
                                <h5 class="title">ยายละม้าย คล้ายจะเป็นลม</h5>
                                <a class="waves-effect waves-light btn"><i class="fa fa-user-plus left" aria-hidden="true"></i>เพิ่มเป็นเพื่อน</a>
                            </li>
                            <li class="collection-item avatar">
                                <img src="img/pic4.jpg" alt="" class="circle pic-border">
                                <h5 class="title">ยายละม้าย คล้ายจะเป็นลม</h5>
                                <a class="waves-effect waves-light btn"><i class="fa fa-user-plus left" aria-hidden="true"></i>เพิ่มเป็นเพื่อน</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Suggest Friend Part-->

        <!--Start feed friend status-->
        <div class="col s8" style="margin-top: -13%">
         <div class="card white">
            <ul class="tabs tab-set" style="background-color: #EE6E74;">
                <li class="tab"><a class="active" href="#test" style="color:#FFF4F5;"><i class="fa fa-rss" aria-hidden="true"></i> มีอะไรใหม่วันนี้!</a></li>
            </ul>
            <!--Start Feed 1-->
            <div >
                <div class="card-content black-text">
                    <div class="row">
                        <div class="col s3">
                            <img class="stpic-po media-object dp img-circle imgthumb" src="img/pic4.jpg" >
                        </div>
                        <div class="col s9" id="commenthead">
                            <a href="Social-Profile-friend.html"><span id="namecomment">สมัย สมร</span></a>
                            <p id="datecomment">21 เมษายน 2558, 22.01 น.
                            </p>
                        </div>
                        <div class="status-post col s12">
                            <p>ความรักทำให้ตาบอด</p>
                            <div class="card-image">
                                <img class="materialboxed" src="img/love.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <div class="row">
                        <div class="col s1 push-s1">
                            <a href="#"><i class="likeicon fa fa-heart fa-3x" aria-hidden="true"></i></a>
                            <span class="liketext">ถูกใจ</span>
                        </div>
                        <div class="col s2"></div>
                        <div class="col s2 push-s1">
                            <div id="likeboxam">
                                <p id="likeno">125+</p>
                            </div>
                        </div>
                        <div class="col s8" style="margin-left: -19px; margin-top: -16px;">
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
            <!--Stop Feed 1-->
            <div class="divider"></div>
            <div class="section">
                <!--Start Feed 2-->
                <div >
                    <div class="card-content black-text">
                        <div class="row">
                            <div class="col s3">
                                <img class="stpic-po media-object dp img-circle imgthumb" src="img/pic2.jpg" >
                            </div>
                            <div class="col s9" id="commenthead">
                                <span id="namecomment">สมัคร ยังมีรักแท้</span>
                                <p id="datecomment">21 เมษายน 2558, 22.01 น.
                                </p>
                            </div>
                            <div class="status-post col s12">
                                <p>เลิกเมาเหล้า แล้วมาเมารักแทน หาตี้ข้าวสารทักๆ ใต้โพสเลยขอรับ</p>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <div class="row">
                            <div class="col s1 push-s1">
                                <a href="#"><i class="likeicon fa fa-heart fa-3x" aria-hidden="true"></i></a>
                                <span class="liketext">ถูกใจ</span>
                            </div>
                            <div class="col s2"></div>
                            <div class="col s2 push-s1">
                                <div id="likeboxam">
                                    <p id="likeno">125+</p>
                                </div>
                            </div>
                            <div class="col s8" style="margin-left: -19px; margin-top: -16px;">
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
                    <!--Start user comment-->
                    <div class="card-action" id="comment">
                        <ul class="collapsible" data-collapsible="expandable" style="margin-left: 47px; margin-right: 39px;">
                            <li>
                                <div class="collapsible-header active"><i class="fa fa-commenting" aria-hidden="true"></i>ความคิดเห็นจากเพื่อน
                                    <span class="secondary-content"><i class="black-text fa fa-chevron-up" aria-hidden="true"></i></span>
                                </div>
                                <div class="collapsible-body">
                                    <ul class="collection">
                                        <li class="collection-item avatar">
                                            <a href="Social-Profile-friend.html"><img src="img/pic4.jpg" alt="" class="circle">
                                                <span class="title title-name">สมัย สมร</span></a>
                                                <p id="datecomment">21 เมษายน 2558, 22.01 น.</p>
                                                <p class="space-cmt">ไปด้วยคนจ้าทักมา <br></p>
                                            </li>
                                            <li class="collection-item avatar">
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
                        <!--Stop user comment-->
                    </div>
                    <!--Stop Feed 2-->
                </div>
            </div>
            <!--Stop feed friend status-->
        </div>
    </div>

@stop
