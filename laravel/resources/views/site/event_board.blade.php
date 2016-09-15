@extends('site.layout')
@section('maincontent')

<div class="row" id="act_part">


<div class="container" >
    <div class="row" style="margin-bottom: 0">
        <div class="col s2">
            <center><a href="/event"class="waves-effect waves-light btn cyan lighten-1 center"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-right: 8px;"></i>กลับกิจกรรม</a>
            </center>
        </div>
        <div class="col s10">
            <div class="card" style="margin-top: 0">
                <div class="card-image" >
                    <img src="{{url('img/polygons.jpg')}}"  id="eve_img" >
                    <span class="card-title">{{$eve_name->title}}</span>
                </div>
                <div class="card-content">
                  @if($eve_name->creator == $user)
                  <p>
                  สร้างโดย &nbsp;&nbsp;<span class="" style=" margin-right: 10px;"><a>คุณ</a></span>

                    <a id="status_join " href="{{url('/event/remove/'.$eve_name->id)}}"class="waves-effect waves-light btn  red " style="color: white;margin-left:36em;width:10em"><i class="fa fa-times"></i> ลบกิจกรรม</a>
                  @else
                    สร้างโดย <a href="Social-Profile.html" style="color: #0d47a1;">{{$eve_name->fname.' '.$eve_name->lname}}</a>
                      <a id="status_join "class="waves-effect waves-light  btn-large quit " style="color: white;margin-left:36em;width:10em"><span> เข้าร่วมแล้ว</span></a></p>
                  @endif



                    </p>

                </div>
            </div>
        </div>
    </div>
        <div class="col s6 offset-s2">
            <div class="row" id="eve_desc">
                        <!--Start Post Box-->
                       <div class="card white" style="margin-bottom: 19px; height: auto;">
                                    <ul class="tabs tab-set" style="background-color: #FFF4F5;">
                                        <li class="tab col s3"><a class="active" href="#status"><i class="fa fa-pencil" aria-hidden="true"></i> แบ่งปันเรื่องราว</a></li>
                                        <li class="tab col s3"><a href="#picpost"><i class="fa fa-camera" aria-hidden="true"></i> แบ่งปันรูปภาพ</a></li>
                                    </ul>
                                    <!--Start Status Post-->
                                    <div id="status">
                                    <div class="card-content black-text" style="margin-bottom: -4%;">
                                        <div class="row valign-wrapper">
                                            <div class="col s2 eve-cmtpic">
                                                <img src="{{url('img/pic.jpg')}}" alt="" class="postbox-pic media-object dp img-circle imgthumb">
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
                                                <img src="{{url('img/pic.jpg')}}" alt="" class="postbox-pic2 media-object dp img-circle imgthumb"> <!-- notice the "circle" class -->
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
                                                    <img class="eve-stpic-po media-object dp img-circle imgthumb" src="{{url('img/pic.jpg')}}" >
                                                </div>
                                                <div class="col s9" id="commenthead">
                                                    <span class="eve-namecomment">พรทิพย์ มัชัย  <span class="badge admin">เจ้าของกิจกรรม</span></span>
                                                    <p id="datecomment">21 เมษายน 2558, 22.01 น.
                                                    </p>
                                                </div>
                                                <div class="eve-post status-post col s12">
                                                    <p>ไปปลูกผักกันจ้า</p>
                                                    <div class="card-image">
                                                        <img class="materialboxed" src="{{url('img/garden.jpg')}}">
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
                                                    <img class="eve-stpic-po media-object dp img-circle imgthumb" src="{{url('img/pic.jpg')}}" >
                                                </div>
                                                <div class="col s9" id="commenthead">
                                                    <span class="eve-namecomment">พรทิพย์ มัชัย <span class="badge admin">เจ้าของกิจกรรม</span></span>
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




                                    <!--Start Comment Post-->
                                    <div class="card-action" id="comment">
                                        <ul class="collapsible" data-collapsible="expandable">
                                            <li>
                                                <div class="collapsible-header active"><i class="fa fa-commenting" aria-hidden="true"></i>ความคิดเห็นจากเพื่อน
                                                    <span class="secondary-content"><i class="black-text fa fa-chevron-up" aria-hidden="true"></i></span>
                                                </div>
                                                <div class="collapsible-body">
                                                     <ul class="collection">
                                                        <li class="collection-item avatar">
                                                            <a href="Social-Profile-friend.html">
                                                            <img src="{{url('img/pic4.jpg')}}" alt="" class="circle">
                                                            <span class="title title-name">สมัย สมร <span class="badge attendee">ผู้ร่วมกิจกรรม</span></span></a>
                                                            <p class="eve-align" id="datecomment">21 เมษายน 2558, 22.01 น.</p>
                                                            <p class="space-cmt eve-align black-text">ไปด้วยคนจ้าทักมา <br></p>

                                                        </li>
                                                        <li class="collection-item avatar">
                                                            <a href="Social-Profile.html">
                                                            <img src="{{url('img/pic.jpg')}}" alt="" class="circle">
                                                            <span class="title title-name">ยายละม้าย คล้ายจะเป็นลม <span class="badge attendee">ผู้ร่วมกิจกรรม</span></span></a>
                                                            <p class="eve-align" id="datecomment">21 เมษายน 2558, 22.01 น.</p>
                                                            <p class="space-cmt eve-align black-text">สนใจทำงานผ่านเน็ตรายได้ดีเพียงนั่งคีย์ข้อมูลวันละ 3-4 ชั่วโมง <br></p>

                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Comment Post-->
                                </div>
                                <!--End Post-->

                </div>
            </div>
        </div>
        <div class="col s4">
            <div class="row" id="eve_side">
                <div class="collection " >
                  <div class="collection-item">
                  <a class="waves-effect waves-light modal-trigger " style="margin-left:17.05em;" href="#edit" id="EventButton"  >
                    <i class="fa fa-pencil-square-o left" aria-hidden="true" style=""></i>แก้ไข </a></div>
                    <div class="collection-item">
                        <p><span style="color: #0d47a1;"><i class="fa fa-clock-o" aria-hidden="true" style="margin-right: 5px;"></i>วันที่: </span><span>{{$eve_name->start_date}}ถึง {{$eve_name->finish_date}} </span><br>&nbsp;&nbsp;&nbsp;เวลา 12.00 น.ถึง 16.00 น.</span>
                        </p>

                    </div>
                    <div class="collection-item">
                        <p><span style="color: #0d47a1;"><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 5px;"></i>สถานที่: </span><span>{{$eve_name->location}}</span></p>

                    </div>
                    <div class="collection-item">
                        <p><span style="color: #0d47a1;"><i class="fa fa-phone " aria-hidden="true" style="margin-right: 5px;"></i>เบอร์โทร: </span><span>{{$eve_name->contact}}</span></p>

                    </div>

                    <div class="collection-item">

                        <h5><span style="color: #0d47a1;">เกี่ยวกับกิจกรรม</span></h5>
                        <p>{{$eve_name->description}}</p>


                    </div>
                </div>
                <div class="collection">
                    <div class="collection-item">
                        <h5><span style="color: #0d47a1;">เพื่อนร่วมกิจกรรม 7 คน</span></h5>
                        <a href="#allfriend" class="modal-trigger">ดูเพื่อนทั้งหมด</a>
                    </div>
                    <div class="collection-item" id="eve_friend">
                        <table style="height: 100%">
                            <tbody>
                                <tr>
                                    <td>
                                   <img class ="partipic center circle"  src="{{url('img/evepic.jpg')}}">
                                    </td>
                                    <td>
                                       <img class ="partipic center circle" src="{{url('img/evepic2.jpg')}}">
                                    </td>
                                    <td>
                                       <img class ="partipic center circle" src="{{url('img/evepic3.png')}}">
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                   <img class ="partipic center circle"  src="img/evepic.jpg">
                                    </td>
                                    <td>
                                       <img class ="partipic center circle" src="img/evepic2.jpg">
                                    </td>
                                    <td>
                                       <img class ="partipic center circle" src="img/evepic3.png">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--allfriend-->
            <div id="allfriend" class="modal" style="width: 500px;">
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
<!---modal edit-->
<div id="edit" class="modal" style="width: 500px;height: 800px;">
  <div class="modal-content">
    <table>
      <form action="{{url('/event/edit/'.$eve_name->id)}}" method="post">
        <tbody>
          <tr>
            <td style="text-align: right;">
              ชื่อกิจกรรม
            </td>
            <td><input placeholder="กรอกชื่อกิจกรรมของคุณ เช่น ชวนเพื่อนกินข้าวกลางวัน" id="title" type="text" class="validate" value="{{$eve_name->title}}" required></td>
          </tr>
          <tr>
            <td style="text-align: right;">
              สถานที่
            </td>
            <td><input placeholder="กรอกรายละเอียด เช่น สยามพารากอน ชั้น G" id="location" type="text" class="validate" required value="{{$eve_name->location}}"></td>
          </tr>

          <tr>
            <td style="text-align: right;">
              เวลาจัดกิจกรรม
            </td>
            <td>
              <input id="start_time" type="text" class="validate" width="50px" value="{{$eve_name->start_time}}" required>&nbsp;&nbsp;ถึง &nbsp;&nbsp;
              <input id="end_time" type="text" class="validate" width="50px" value="{{$eve_name->finish_time}}" required>
            </td>
          </tr>
          <tr>
            <td style="text-align: right;">
              วันที่
            </td>
            <td><input id="start_date" type="date" class="validate" width="50px" value="{{$eve_name->start_date}}">&nbsp;&nbsp;ถึง &nbsp;&nbsp;
              <input id="finish_date" type="date" class="validate" width="50px" required value="{{$eve_name->finish_date}}"></td>
          </tr>
          <tr>
            <td style="text-align: right;">
              เบอร์โทรศัพท์ในการติดต่อ
            </td>
            <td><input placeholder="เช่น 08x-xxx-xxxx" pattern="\d{3}-?\d{3}-?\d{4}" id="phonenumber" type="tel" maxlength="10" class="validate" value="{{$eve_name->contact}}" required></td>
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
              <input placeholder=""id="desc" type="text" class="validate" value="{{$eve_name->description}}">
            </td>
          </tr>

          <tr>
            <td colspan="2">
              <button class="modal-action modal-close btn waves-effect waves-light right red" type="button" name="action">ยกเลิก

              </button>
              <button class="btn waves-effect waves-light right" type="submit" name="action" style="margin-right: 10px;">บันทึก

              </button>



            </td>
          </tr>
        </tbody>
      </form>
    </table>

  </div>

</div>

@stop
