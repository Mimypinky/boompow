@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%;">
    <div class="row">
        <div class="col s12" style="margin-top: 11%;">
            <div class="row grey lighten-5" style="border-radius: 10px; border: 0.5px solid #eeeeee;">
                <!--Pro pic-->
                <div class="row">
                    <div style="text-align: center;">
                        <img class="pro-pic media-object dp img-circle" src="img/pic.jpg"
                        >
                    </div>
                </div>
                <!--End Pro pic-->


                <!--Pro detail-->
                <div class="row">
                    <div class="col s12">
                        <div class="col s8 offset-s2 ">
                            <div id="profilehead">
                                <a href="#!">
                                    <i class="fa fa-pencil-square-o fa-2x tooltipped" data-position="bottom" data-delay="50" data-tooltip="แก้ไข" style="margin-left: 91%;margin-top: 22px; color: white;"></i></a>
                                    <div id="proname">
                                        <h5>พรทิพย์ มีชัย</h5>
                                    </div>
                                    <div id="prodetail">
                                        <p>อายุ 75 ปี บ้านอยู่สีลมซอยสี่ ชอบขี่ม้า ว่างๆชอบดื่มไฮเนเก้น</p>
                                    </div>
                                </div>

                                <!--Blue menu-->
                                <div id="proheadbox">
                                    <div class="col s4">
                                        <a href="#">
                                            <div id="firstcmt">
                                                <p style="line-height: 0px; color: white;">1000</p>
                                                <span style="color: white;">โพสต์ของฉัน</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col s4">
                                        <a href="#whofollow" class="modal-trigger">
                                            <div id="follow">
                                                <p style="line-height: 0px; color: white;">1000 คน</p>
                                                <span style="color: white;">เพื่อนของฉัน</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col s4">
                                        <a href="#wholove" class="modal-trigger">
                                            <div id="like">
                                                <p style="line-height: 0px; color: white;">1000 คน</p>
                                                <span style="color: white;">ชอบ</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--End Blue menu-->
                            </div>
                        </div>
                    </div>
                    <!--Pro detail-->
                    <div class="row">
                        <form>
                            <div class="col s12">
                                <!--Start PostBox-->
                                <div class="col s10 offset-s2 ">
                                    <div class="row" style="margin-top: 28px; margin-bottom: -1px;">
                                        <div class="col s9 m9" style="width: 80%">

                                            <div class="card white" style="margin-bottom: 30px;">

                                                <!--Start Status Post-->
                                                <div id="status">
                                                    <div class="card-content black-text" style="margin-bottom: -4%;">
                                                        <div class="row valign-wrapper">

                                                            <div class="col s10">


                                                                <div class="input-field col s12">
                                                                    <textarea id="textarea1" placeholder="บอกสิ่งดีๆ ให้เพื่อนของคุณได้รู้สิ" class="materialize-textarea"></textarea>

                                                                </div>
                                                                <img id="postImg" src="" width="100%"/>
                                                                <script>
                                                                $(function () {
                                                                        $(":file").change(function () {
                                                                            if (this.files && this.files[0]) {
                                                                                var reader = new FileReader();
                                                                                reader.onload = imageIsLoaded;
                                                                                reader.readAsDataURL(this.files[0]);
                                                                            }
                                                                        });
                                                                    });
                                                                    function imageIsLoaded(e) {
                                                                        $('#postImg').attr('src', e.target.result);
                                                                    };
                                                              </script>
                                                                <form action="#">
                                                                    <div class="file-field input-field">
                                                                      <div class="btn transparent waves-effect waves-light"style="float:right;margin-right:2%;width:3.5em;border-radius:5px 5px;padding:0px 0px">
                                                                        <i class="material-icons " style="color:#90a4ae;font-size:2em;">photo</i>
                                                                        <input type="file">
                                                                      </div>

                                                                    </div>
                                                                  </form>
                                                            </div>
                                                            <div class="col s2">
                                                                <a type="submit" class="waves-effect waves-light btn" style="padding:5px 5px;width:7em"><i class="fa fa-bullhorn left" aria-hidden="true"></i>แบ่งปัน</a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>


                                                </div>
                                            </div>


                                            <!--Start pin Status part-->
                                            <div class="col s9 m9" style="width: 80%">
                                                <div class="pin-border card white" data-step="1" data-intro="Ok, wasn't that fun?" data-position='right'>
                                                    <div  class="card-content black-text">
                                                        <div class="row">
                                                            <div class="col s2 push-s10" style="margin-bottom:-14px; margin-top: -3px;">
                                                                <a href=""><i class="fa fa-pencil-square-o fa-2x tooltipped" data-position="bottom" data-delay="50" data-tooltip="แก้ไข"></i></a>
                                                            </div>
                                                            <div class="col s2 push-s9" style="margin-bottom: -14px; margin-top: -3px;">
                                                                <a href=""><i class="fa fa-times fa-2x tooltipped" data-position="bottom" data-delay="50" data-tooltip="ลบ"></i></a>
                                                            </div>
                                                            <div class="col s2 push-s5" id="pin-post">
                                                                <i id="pin-icon" class="fa fa-thumb-tack fa-3x" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s3">
                                                                <img class="stpic-po media-object dp img-circle imgthumb" src="img/pic.jpg" >
                                                            </div>
                                                            <div class="col s9" id="commenthead">
                                                                <span id="namecomment">พรทิพย์ มีชัย</span>
                                                                <p id="datecomment">ได้ปักเนื้อหาเมื่อ 21 เมษายน 2558, 22.01 น.
                                                                </p>
                                                            </div>
                                                            <div class="status-post col s12">
                                                                <div class="row">
                                                                    <div class="col s12 m10">
                                                                        <div class="card" style="margin-top: 13px;">
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
                                                </div>
                                                <!--End pin Status part-->
                                                <!--Start pic Status part-->
                                                <div class="col s9 m9" style="width: 80%">
                                                    <div class="card white" data-step="1" data-intro="Ok, wasn't that fun?" data-position='right'>
                                                        <div  class="card-content black-text">
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
                                                                    <img class="stpic-po media-object dp img-circle imgthumb" src="img/pic.jpg" >
                                                                </div>
                                                                <div class="col s9" id="commenthead">
                                                                    <span id="namecomment">พรทิพย์ มีชัย</span>
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
                                            </div>
                                            <!--End pic Status part-->

                                            <!--Start Status part-->
                                            <div class="col s9 m9" style="width: 80%">
                                                <div class="card white" data-step="1" data-intro="Ok, wasn't that fun?" data-position='right'>
                                                    <div  class="card-content black-text">
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
                                                                <img class="stpic-po media-object dp img-circle imgthumb" src="img/pic.jpg" >
                                                            </div>
                                                            <div class="col s9" id="commenthead">
                                                                <span id="namecomment">พรทิพย์ มีชัย</span>
                                                                <p id="datecomment">21 เมษายน 2558, 22.01 น.
                                                                </p>
                                                            </div>
                                                            <div class="status-post col s12">
                                                                <p>อากาศแจ่มใสเหมาะแก่การไปดิสนีย์แลนด์ หาเพื่อนร่วมทริปเม้นๆ</p>
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
                                        </div>
                                        <!--End Status part-->
                                        <!--Start Status part2-->
                                        <div class="col s9 m9" style="width: 80%">
                                            <div class="card white" data-step="1" data-intro="Ok, wasn't that fun?" data-position='right'>
                                                <div  class="card-content black-text">
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
                                                            <img class="stpic-po media-object dp img-circle imgthumb" src="img/pic.jpg" >
                                                        </div>
                                                        <div class="col s9" id="commenthead">
                                                            <span id="namecomment">พรทิพย์ มีชัย</span>
                                                            <p id="datecomment">21 เมษายน 2558, 22.01 น.
                                                            </p>
                                                        </div>
                                                        <div class="status-post col s12">
                                                            <p>อากาศแจ่มใสเหมาะแก่การไปดิสนีย์แลนด์ หาเพื่อนร่วมทริปเม้นๆ</p>
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
                                        </div>
                                        <!--End Status part2-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    </div>
                    </div>


                    <!-- Modal Structure -->
                    <!--whofollow-->
                    <div id="whofollow" class="modal" style="width: 500px;">
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="img/pic.jpg" alt="" class="circle">
                                <p>เจ๊สมร ดอนเจดีย์</p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                            </li>
                            <li class="collection-item avatar">
                                <img src="img/pic.jpg" alt="" class="circle">
                                <p>พิชิต จิตมั่นคง </p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                            </li>
                            <li class="collection-item avatar">
                                <img src="img/pic.jpg" alt="" class="circle">
                                <p>มาโนช ชงชม </p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                            </li>
                        </ul>
                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!--wholove-->
                    <div id="wholove" class="modal" style="width: 500px;">
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="img/pic.jpg" alt="" class="circle">
                                <p>เจ๊สมร ดอนเจดีย์</p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>


                            </li>
                            <li class="collection-item avatar">
                                <img src="img/pic.jpg" alt="" class="circle">
                                <p>พิชิต จิตมั่นคง </p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                            </li>
                            <li class="collection-item avatar">
                                <img src="img/pic.jpg" alt="" class="circle">
                                <p>มาโนช ชงชม </p>
                                <a href="#!" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                            </li>
                        </ul>
                        <div class="modal-footer">
                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                    </div>
@stop
