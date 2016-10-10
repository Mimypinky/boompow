@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%;">
    <div class="row">
        <div class="col s12" style="margin-top: 12%;">
            <div class="row">
                <!--Pro pic-->

                <div class="row">
                    <div style="text-align: center;">
                        <img class="pro-pic media-object dp img-circle" src="img/uploads/avatars/{{$info->avatar}}">

                    </div>
                </div>
                <!--End Pro pic-->
                <!--Pro head-->
                <div class="row">
                    <div class="col s8 offset-s2 pro-detail w-profile">
                        <a class="modal-trigger black-text edit-btn waves-effect waves-light btn" href="#profile-edit" style="background-color: #ebeef1"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>
                        <div id="proname">
                            <h2>{{ Auth::user()->first_name.'  '.Auth::user()->last_name }}</h2>
                        </div>
                        <div id="prodetail">
                            <p>
                              {{$info->bio}}<br />

                            </p>
                        </div>
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
                <!--Update status-->
                <div class="row" style="margin-top: 11%;">
                    <div class="col s8 offset-s2 pro-upstatus w-profile">
                        <div class="row" style="">
                            <div class="col s12">
                                <div class="card" style="box-shadow:none; background-color: transparent;">
                                    <div class="card-content black-text" >
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="img/uploads/avatars/{{$info->avatar}}" alt="" class="postbox-pic media-object img-circle imgthumb"> <!-- notice the "circle" class -->
                                             <span class="posbadge me badge">ฉัน</span>
                                        </div>
                                        <div class="input-field col s8 upsta-line">
                                          <form enctype="multipart/form-data" action="/post" method="post">
                                            <textarea style="margin-left: 20px;" id="textarea1" name="post_message" class="materialize-textarea"></textarea>

                                            <label style="margin-left: 20px;" for="textarea1">บอกสิ่งดีๆวันนี้ให้เพื่อนคุณรู้สิ!!</label>
                                            <div class="card-action" style="border: none;">

                                                    <div class="file-field input-field">
                                                        <div class="btn prouppic-btn black-text">
                                                        <span style="font-size: 14pt;">
                                                            <i class="fa fa-camera"></i>&nbspอัพโหลดรูปภาพ
                                                            <input type="file" name="uploadImage" id="uploadImage"></span>
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" id="myfile-path">
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
                                                    </div>
                                                    <button name="action" type="submit" class="proupsta-btn waves-effect waves-light btn">
                                                    โพสต์</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end Update status-->
                <!--timeline-->
                <div class="row" style="margin-top: 11%;">
                    <div class="col s8 offset-s2 pro-upstatus w-profile">
                        <!--timeline mypost-->
                        @foreach($posts as $key=>$post)
                        <div class="row" >
                            <div class="col s12">
                                <div class="card" style="box-shadow:none; background-color: transparent;">
                                    <div class="card-content black-text" >

                                      @if($user->id==$post->user_id)
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="img/uploads/avatars/{{$info->avatar}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge me badge">ฉัน</span>
                                              <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s9 upsta-line">
                                        @else
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="img/uploads/avatars/{{$post->avatar}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge me badge f">{{$post->first_name}}</span>
                                              <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s9 upsta-line-f">
                                        @endif

                                            <div class="col s12" id="commenthead">
                                                <span id="namecomment">{{$post->first_name.' '.$post->last_name}}
                                                </span>
                                                <div class="w-edit">
                                                  @if($post->user_id==$user->id)
                                                  <a class="black-text edit-btn-2 waves-effect waves-light btn modal-trigger" href="#post-edit{{$key}}"
                                                  style="background-color: #ebeef1"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>

                                                  <a href="#deletePost{{$key}}" class="modal-trigger black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1">
                                                    <i class="fa fa-trash-o"></i> ลบ</a>
                                                    @else
                                                    <a href="#deletePost{{$key}}" class="modal-trigger black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1;margin-right:73%">
                                                      <i class="fa fa-trash-o"></i> ลบ</a>
                                                      @endif

                                                </div>
                                                <div id="post-edit{{$key}}" class="modal" style="width: 500px;">
                                                    <ul class="collection with-header f-modal">
                                                        <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-pencil-square-o fa-lg left" aria-hidden="true"></i><h4>แก้ไขโพสต์</h4>
                                                        <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>

                                                        <li class="transper collection-item avatar">
                                                            <img src="{{url('img/uploads/avatar/'.$post->avatar)}}" alt="" class="circle">


                                                            <span class="title title-name">{{$user->first_name.' '.$user->last_name}}</span>
                                                            <form action="{{url('/post/'.$post->id.'/edit')}}" method="get" enctype="multipart/form-data">
                                                                <div class="file-field input-field" style="margin-top: -5%;">
                                                                    <div class="input-field col s12">
                                                                        <textarea id="textarea1" class="materialize-textarea" name="post_message" >{{$post->post_message}}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            <button name="action" type="submit"  class="modal-close waves-effect waves-light btn right">ตกลง</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="deletePost{{$key}}" class="modal">
                                                  <div class="modal-content">

                                                        <p>คุณต้องการจะลบโพสต์นี้ใช่หรือไม่</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <a  class=" modal-close modal-action waves-effect waves-green btn-flat">ยกเลิก</a>
                                                         <a href="{{url('/delete/'.$post->id)}}" class="modal-action waves-effect waves-green btn-flat ">ตกลง</a>
                                                      </div>
                                                </div>
                                                <p id="datecomment">{{$post->created_at}}
                                                </p>
                                            </div>
                                            <div class="status-post2 col s12">
                                                <p>{{$post->post_message}}</p>

                                                @if($post->image!=null)
                                                <div class="card-image">
                                                    <img class="materialboxed " src="img/uploads/posts/{{$post->image}}" style="width:60%">
                                                </div>
                                                @endif
                                            </div>
                                            <div class="card-action" style="border: none;">
                                              <?php $count_likes = DB::table('likes')->where('post_id','=',$post->id)->count();
                                                  $likes = DB::table('likes')->join('accounts','likes.liked_by','=','accounts.id')->join('profiles','accounts.profile_id','=','profiles.id')
                                                  ->where('post_id',$post->id)->select('likes.*','accounts.first_name','accounts.last_name','accounts.id','profiles.avatar')->orderBy('created_at', 'desc')->get();
                                                  $uid = Auth::user()->id;

                                                      ?>
                                                <div class="row wholike-sec">
                                                    <div class="col s1 like-section">


                                                        <a class="tooltipped" href="{{url('/like/'.$post->id)}}" data-position="bottom" data-delay="50" data-tooltip="ถูกใจ">
                                                          <img class="heart-i" src="{{url('img/heart-like.png')}}">
                                                        </a>

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
                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="{{$like->first_name.' '.$like->last_name}}" href="{{url('/friend/'.$like->liked_by)}}">
                                                              <img class="pic-wholike " src="{{url('img/uploads/avatars/'.$like->avatar)}}"></a>
                                                              @endforeach

                                                        </div>
                                                    </div>
                                               </div>


                                               <div class="divider"></div>
                                               <div>
                                                   <div class="row">
                                                   <form action="{{url('/comment/'.$post->id)}}" method="post">
                                                       <div class="input-field cmt-coll-space">

                                                       <div class="input-field w-cmt">

                                                            <div class="input-field col s12">
                                                                <textarea id="textarea1" class="materialize-textarea" name="comment_message"></textarea>
                                                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                <label style="font-size: 13pt;" for="textarea1">แสดงความคิดเห็น</label>
                                                            </div>
                                                            <button type="submit" name="action"class="comment-btn-feed waves-effect waves-light btn">ตกลง</button>

                                                        </div>

                                                    </form>
                                                   </div>

                                                   <div class="comment-section">
                                                       <ul class="cmt-coll w-cmt collapsible" data-collapsible="accordion">
                                                            <li>
                                                              <?php $comments = DB::table('comments')->join('accounts','comments.user_id','=','accounts.id')
                                                              ->join('profiles','accounts.profile_id','=','profiles.id')->select('accounts.id','accounts.first_name','accounts.last_name','profiles.avatar','comments.*')
                                                              ->where('post_id',$post->id)->get();
                                                              $count_comments = DB::table('comments')->where('post_id',$post->id)->count();

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
                                                                    <a href="{{url('/friend/$comment->id')}}"><img src="img/uploads/avatars/{{$comment->avatar}}" alt="" class="circle">
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
                        <div class="section"></div>
                      </div>
                    </div>
                        @endforeach
                        <!--End timeline mypost-->



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


                    <!--profile-edit-->
                    <div id="profile-edit" class="modal" style="width: 500px;">
                        <ul class="collection with-header f-modal">
                            <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-pencil-square-o fa-lg left" aria-hidden="true"></i><h4>แก้ไขข้อมูลส่วนตัว</h4>
                            <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>

                            <li>
                                <div class="row" style="margin-top: 5%;">

                                        <div class="row">
                                          <div style="text-align: center;">
                                              <img class="pro-pic media-object dp img-circle" id="avatar"style="width:150px;height:150px;" src="img/uploads/avatars/{{$info->avatar}}">

                                          </div>
                                          <form enctype="multipart/form-data" action="/profile" id="updateInfo"  method="post">
                                              <div class="file-field input-field">
                                                  <span class="cam-input tooltipped" data-position="right" data-delay="50" data-tooltip="เปลี่ยนภาพประจำตัว">
                                                  <i class="cam-icon fa fa-camera" ></i>
                                                  <input type="file" id="files" name="avatar" class="inputFile">
                                                  <input type="hidden" name="_token" value="{{csrf_token()}}">

                                              </div>
                                              <script>
                                              document.getElementById("files").onchange = function () {
                                                  var reader = new FileReader();

                                                  reader.onload = function (e) {
                                                      // get loaded data and render thumbnail.
                                                      document.getElementById("avatar").src = e.target.result;
                                                  };

                                                  // read the image file as a data URL.
                                                  reader.readAsDataURL(this.files[0]);
                                              };
                                              </script>

                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                              <input id="name-pro" type="text" class="validate" name="first_name" value="{{$user->first_name}}">
                                              <label for="name-pro"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                              <input id="name-pro" type="text" class="validate" name="last_name" value="{{$user->last_name}}">
                                              <label for="name-pro"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                              <input id="detail-pro" type="text" class="validate" name="bio" value="{{$info->bio}}">
                                              <label for="detail-pro"></label>
                                            </div>
                                        </div>
                                        <button type="submit" name="action" class="waves-effect waves-light btn right">ตกลง</button>
                                    </form>
                                </div>

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
<script type="text/javascript">
    $(document).ready(function(){
      var comment = $('.comment').val(); // your comment text box
      $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function(data) {

          $('.commentbox').append("</br>"+comment); // list of comments. its inserting your last comment at the end of line.

        }
      });
    });
</script>
@stop
