@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%;">
    <div class="row">
        <div class="col s12" style="margin-top: 12%;">
            <div class="row">



                <!--timeline-->
                <div class="row" style="margin-top: 11%;">
                    <div class="col s8 offset-s2 pro-upstatus">
                        <!--timeline mypost-->
                        <div class="row" style="">
                            <div class="col s12">
                                <div class="card" style="box-shadow:none; background-color: transparent;">
                                    <div class="card-content black-text" >
                                      <?php $uid = Auth::user()->id;?>
                                      @if($uid == $posts->user_id)
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="{{url('img/uploads/avatars/'.$posts->avatar)}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge me badge ">ฉัน</span>
                                              <!-- notice the "circle" class -->
                                        </div>
                                          <div class="input-field col s9 upsta-line">
                                            <div class="col s12" id="commenthead">
                                                <span id="namecomment">{{$posts->first_name.'  '.$posts->last_name}}
                                                </span>

                                                <div class="edit-cmt-sec">
                                                    <a href="#post-edit"class="black-text edit-btn-2 waves-effect waves-light btn modal-trigger" href="#post-edit"
                                                    style="background-color: #ebeef1"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>
                                                    <a href="#deletePost" class="black-text del-btn waves-effect waves-light btn modal-trigger" style="background-color: #ebeef1"><i class="fa fa-trash-o"></i> ลบ</a>
                                                </div>

                                                <p id="datecomment">{{$posts->created_at}}
                                                </p>
                                            </div>
                                            <div id="post-edit" class="modal" style="width: 500px;">
                                                <ul class="collection with-header f-modal">
                                                    <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-pencil-square-o fa-lg left" aria-hidden="true"></i><h4>แก้ไขโพสต์</h4>
                                                        <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>

                                                    <li class="transper collection-item avatar">
                                                        <img src="{{url('img/uploads/avatars/'.$posts->avatar)}}" alt="" class="circle">
                                                        <span class="title title-name">{{$posts->first_name.' '.$posts->last_name}}</span>
                                                        <form action="{{url('/post/'.$posts->id.'/edit')}}" method="get" enctype="multipart/form-data">
                                                            <div class="file-field input-field" style="margin-top: -5%;">
                                                                <div class="input-field col s12">
                                                                    <textarea id="textarea1" class="materialize-textarea" name="post_message" >{{$posts->post_message}}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        <button name="action" type="submit"  class="modal-close waves-effect waves-light btn right">ตกลง</button>
                                                        </form>

                                                    </li>
                                                </ul>
                                            </div>


                                              <div id="deletePost" class="modal" style="width: 500px;">
                                                <div class="modal-content" >

                                                      <p>คุณต้องการจะลบโพสต์นี้ใช่หรือไม่</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <a  class=" modal-close modal-action waves-effect waves-green btn-flat">ยกเลิก</a>
                                                       <a href="{{url('/delete/'.$posts->id)}}" class="modal-action waves-effect waves-green btn-flat ">ตกลง</a>
                                                    </div>
                                              </div>
                                        @else
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="{{url('img/uploads/avatars/'.$posts->avatar)}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge me badge f">{{$posts->username}}</span>
                                              <!-- notice the "circle" class -->
                                        </div>
                                          <div class="input-field col s9 upsta-line-f">

                                        <div class="col s12" id="commenthead">
                                        <span id="namecomment">{{$posts->first_name.'  '.$posts->last_name}}
                                        </span>
                                    <p id="datecomment">{{$posts->created_at}}
                                  </p>
                                </div>
                                        @endif

                                            <div class="status-post2 col s12">
                                                <p>{{$posts->post_message}}</p>
                                                @if($posts->image!=null)
                                                <div class="card-image">
                                                    <img class="materialboxed " src="img/uploads/posts/{{$posts->image}}" style="width:60%">
                                                </div>
                                                @endif
                                                @if($posts->content_id!=null)
                                                <?php $content = DB::table('contents')->join('category','category.id','=','contents.cate_id')->select('category.id as cgid','category.category_title','contents.*')->where('contents.id','=',$posts->content_id)->first();?>

                                                  <div class="row ">
                                                  <div class="col s9 offset-s2 ">

                                                     <div class="card">
                                                       <div class="card-image">
                                                         <img src="{{url('img/content/'.$content->head_pic_content)}}" style="max-height:300px"/>
                                                       </div>
                                                       <div class="card-stacked">
                                                         <div class="card-content">
                                                          <h2>{{$content->content_title}}</h2>
                                                         </div>
                                                         <div class="card-action">
                                                          <a href="{{url('/content/'.$content->category_title.'/'.$content->id)}}">อ่านเนื้อหา</a>
                                                        </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                 </div>


                                                @endif

                                            </div>

                                            <div class="card-action" style="border: none;">
                                                
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
                        <!--End timeline mypost-->
                        <div class="section"></div>
                        <!--timeline friend post-->



                    </div>
                </div>
                <!--End timeline-->

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
                            <div class="modal-close close-mbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div><br>
                            <p style="color: #8a8787;">คุณสามารถแก้ไขภาพ เปลี่ยนคำบรรยายภาพ หรือลบรูปภาพได้ในส่วนนี้</p>
                            </li>
                        </ul>
                        <div class="row pic-rspace">
                            <div class="col s12 m7 l4 pic-col">
                                <div class="hovereffect">
                                    <img src="img/bike.jpg" style="width:100%;">
                                    <div class="overlay">
                                    <a class="info modal-trigger" href="#pic-edit">แก้ไข</a>
                                    <a class="info" href="#">ลบ</a>
                                    </div>
                                    <div class="divider"></div>
                                </div>
                            </div>
                            <div class="col s12 m7 l4 pic-col">
                                <div class="hovereffect">
                                    <img src="img/wf.jpg" style="width:100%;">
                                    <div class="overlay">
                                    <a class="info modal-trigger" href="#pic-edit">แก้ไข</a>
                                    <a class="info" href="#">ลบ</a>
                                    </div>
                                    <div class="divider"></div>
                                </div>
                            </div>
                            <div class="col s12 m7 l4 pic-col">
                                <div class="hovereffect">
                                    <img src="img/cover.jpg" style="width:100%;">
                                    <div class="overlay">
                                    <a class="info modal-trigger" href="#pic-edit">แก้ไข</a>
                                    <a class="info" href="#">ลบ</a>
                                    </div>
                                    <div class="divider"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row pic-rspace">
                            <div class="col s12 m7 l4 pic-col">
                                <div class="hovereffect">
                                    <img src="img/bike.jpg" style="width:100%;">
                                    <div class="overlay">
                                    <a class="info modal-trigger" href="#pic-edit">แก้ไข</a>
                                    <a class="info" href="#">ลบ</a>
                                    </div>
                                    <div class="divider"></div>
                                </div>
                            </div>
                            <div class="col s12 m7 l4 pic-col">
                                <div class="hovereffect">
                                    <img src="img/wf.jpg" style="width:100%;">
                                    <div class="overlay">
                                    <a class="info modal-trigger" href="#pic-edit">แก้ไข</a>
                                    <a class="info" href="#">ลบ</a>
                                    </div>
                                    <div class="divider"></div>
                                </div>
                            </div>
                            <div class="col s12 m7 l4 pic-col">
                                <div class="hovereffect">
                                    <img src="img/cover.jpg" style="width:100%;">
                                    <div class="overlay">
                                    <a class="info modal-trigger" href="#pic-edit">แก้ไข</a>
                                    <a class="info" href="#">ลบ</a>
                                    </div>
                                    <div class="divider"></div>
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

@stop
