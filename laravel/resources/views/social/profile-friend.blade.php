@extends('site.layout')
@section('maincontent')
        <div class="col s12" style="margin-top: 12%;">
            <div class="row">
                <!--Pro pic-->

                <div class="row">
                    <div style="text-align: center;">
                        <img class="pro-pic media-object dp img-circle" src="{{url('img/uploads/avatars/'.$f_info->avatar)}}"
                        >


                    </div>
                </div>
                <!--End Pro pic-->
                <!--Pro head-->
                <div class="row">
                    <div class="col s8 offset-s2 pro-detail">
                        <!-- <a class="modal-trigger black-text edit-btn waves-effect waves-light btn" href="#profile-edit" style="background-color: #ebeef1"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>
                      -->  <div id="proname" style="margin-top:15%">
                            <h2>{{$account->first_name}}  {{$account->last_name}}</h2>
                        </div>

                        <div id="prodetail">
                            <p>
                              {{$f_info->bio}}
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
                        $status=DB::table('friends')->select('status')->where([['from_user_id',$user],['to_user_id',$friend]])->first();
                        ?>


                        <div class="center"  id="friendRequest" style="margin-bottom:1.5em;margin-top:-3.5em">
                          <form action='{{url('Pending')}}' method='post'>
                            {{ csrf_field() }}

                            @if($friend_status=='pending')
                            <a href="{{ url('/dP/'.$account->username)}}"><button class="btn red waves-effect waves-light "  type="button" name="action" >ลบคำขอ</button>
                              @elseif($friend_status=='notfriend')
                              <input type='hidden' value='{{$account->id}}' name='aid'>
                            <button class="btn red waves-effect waves-light "  type="submit" name="action" >เพิ่มเป็นเพื่อน</button>
                            @elseif($friend_status=='friend')
                            <a href="#"><button class="btn red waves-effect waves-light "  type="button">เพื่อน</button></a>
                            @endif

                        </form>
                          </div>

                      </div>
                    </div>
                <!--End Pro head-->

                <!--timeline-->
                @if(!isset($posts))
                <div id="prodetail">
                    <p> {{$msg}}</p>
                </div>
                @else

                <div class="row" style="margin-top: 11%;">
                    <div class="col s8 offset-s2 pro-upstatus w-profile">
                        <div class="row" style="">
                            <div class="col s12">
                                <div class="card" style="box-shadow:none; background-color: transparent;">
                                    <div class="card-content black-text" >
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="{{url('img/uploads/avatars/'.$info->avatar)}}" alt="" class="postbox-pic media-object img-circle imgthumb"> <!-- notice the "circle" class -->
                                             <span class="posbadge me badge f">ฉัน</span>
                                        </div>
                                        <div class="input-field col s8 upsta-line-f">
                                          <form enctype="multipart/form-data" action="{{url('/postfriend/'.$account->id)}}" method="post">
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

                <div class="row" style="margin-top: 11%;">
                    <div class="col s8 offset-s2 pro-upstatus">
                        <!--timeline mypost-->
                          @foreach($posts as $key=>$post)
                        <div class="row" style="">
                            <div class="col s12">
                                <div class="card" style="box-shadow:none; background-color: transparent;">

                                    <div class="card-content black-text" >
                                      @if($post->user_id != Auth::user()->id)
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="{{url('img/uploads/avatars/'.$post->avatar)}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge me badge">{{$account->first_name}}</span>
                                              <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s9 upsta-line">
                                        @else
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="{{url('img/uploads/avatars/'.$post->avatar)}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge me badge f">ฉัน</span>
                                              <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s9 upsta-line-f">
                                        @endif


                                            <div class="col s12" id="commenthead">
                                                <span id="namecomment">{{$post->first_name.' '.$post->last_name}}
                                                </span>


                                                <p id="datecomment">{{$post->updated_at}}
                                                </p>
                                            </div>
                                            <div class="status-post2 col s12">
                                                <p>{{$post->post_message}}</p><br>
                                                @if($post->image!=null)
                                                  <div class="card-image">
                                                      <img class="materialboxed " src="{{url('img/uploads/posts/'.$post->image)}}" style="width:70%">
                                                  </div>
                                                  @endif
                                                  <br>
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

                                                              <button type="submit" name="action"class="comment-btn-feed waves-effect waves-light btn" style="margin-top:-14%">ตกลง</button>



                                                          </div>

                                                      </form>
                                                   </div>

                                                   <div class="comment-section">
                                                       <ul class="cmt-coll cmt-coll-space collapsible" data-collapsible="accordion">
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
                                                                  <a href="{{url('/friend/$comment->id')}}"><img src="{{url('img/uploads/avatars/'.$info->avatar)}}" alt="" class="circle">
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
                        <!--End timeline mypost-->
                        <div class="section"></div>

@endforeach

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
                </div>
            </div>
        </div>
      </div>
@stop
