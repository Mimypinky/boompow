@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%;">
    <div class="row">
        <div class="col s8" style="margin-top: 15%;">
            <div class="card pro-upstatus-feed">
                <div class="card-image">
                    <img class="feed-picBg" src="img/bgpro.png">
                    <span class="card-title" style="top: 21px; left: 36%;">
                        <img class="feed-picPro circle feed-resPic" src="{{url('img/uploads/avatars/'.$info->avatar)}}"></span>
                    </div>
                    <div class="card-action">
                        <a href="{{url('/profile')}}" class="prolink-btn waves-effect waves-light btn "><i class="fa fa-user left" aria-hidden="true"></i>ไปที่หน้าของฉัน</a>
                        <h5 style="margin-top: -4%; color:#0d47a1;">{{$user->first_name.' '.$user->last_name}}  </h5>
                        <p class="feed-pro-detail"><i class="fa fa-user" aria-hidden="true"></i> {{$info->bio}}</p>
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
                                             <img src="{{url('/img/uploads/avatars/'.$info->avatar)}}" alt="" class="postbox-pic media-object img-circle imgthumb"> <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s8 upsta-line">
                                          <form action="{{url('/post')}}" method="post" enctype="multipart/form-data">
                                            <textarea style="margin-left: 20px;" id="textarea1" class="materialize-textarea" name="post_message"></textarea>
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
                                                    <button type="submit" name="action" class="proupsta-btn waves-effect waves-light btn">
                                                    โพสต์</button>
                                                </form>

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
  @foreach($posts as $key=>$post)
            <div class="row" style="">
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
                                    <span id="namecomment">{{$post->first_name.' '.$post->last_name}}</span>
                                    <div class="row">
                                    <div class="edit-cmt-sec">
                                      @if($post->user_id==$user->id)
                                      <a class="black-text edit-btn-2 waves-effect waves-light btn modal-trigger" href="#post-edit{{$key}}"
                                      style="background-color: #ebeef1"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>

                                      <a href="#deletePost{{$key}}" class="modal-trigger black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1">
                                        <i class="fa fa-trash-o"></i> ลบ</a>
                                        @else
                                        <a href="#deletePost{{$key}}" class="modal-trigger black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1;margin-right:205px">
                                          <i class="fa fa-trash-o"></i> ลบ</a>
                                          @endif

                                          </div>
                                        </div>
                                    <p id="datecomment2">{{$post->created_at}}</p>
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
            @endforeach
            <!--End timeline mypost-->

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
