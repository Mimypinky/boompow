@extends('site.layout')
@section('maincontent')
<script type="text/javascript">
  function newsfeed() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#newsfeed1',
            intro: "ในส่วนนี้จะแสดง <b>ข้อมูลส่วนตัวของคุณ</b>",
            position: 'right'
        },
        {
            element: '#newsfeed2',
            intro: "คุณสามารถ <b>อัพเดตข่าวของคุณ</b> บนหน้ากระดานข่าวได้ โดยอัพเดตของคุณจะไปแสดงที่หน้า <b>โปรไฟล์ของคุณ</b> เช่นกัน",
            position: 'bottom'
        },
        {
            element: '#newsfeed3',
            intro: "คุณสามารถ <b>อัพโหลดรูปภาพ</b> ได้ที่นี้",
            position: 'bottom'
        },
        {
            element: '#newsfeed4',
            intro: "คลิกที่นี้เพื่อ <b>โพสต์ข้อความ</b> ของคุณ",
            position: 'bottom'
        },
        {
            element: '#newsfeed5',
            intro: "ในส่วนนี้จะเป็นส่วนของโพสต์อัพเดต <b>ข่าวสารจากเพื่อนของคุณ</b> ทั้งหมด",
            position: 'right'
        },
        {
            element: '#newsfeed6',
            intro: "คุณสามารถ <b>ถูกใจ</b> โพสต์ได้ที่นี้",
            position: 'right'
        },
        {
            element: '#newsfeed7',
            intro: "คุณสามารถ <b>แสดงความคิดเห็น</b> ให้กับโพสต์ได้ในส่วนนี้",
            position: 'right'
        },
        {
            element: '#newsfeed8',
            intro: "ระบบจะทำการ <b>แนะนำเพื่อนใหม่</b> ประจำวันให้กับคุณ เพื่อช่วยให้คุณมีสังคมที่กว้างขึ้น โดยคุณสามารถเลือก <b>เพิ่มเป็นเพื่อน</b> ได้ในส่วนนี้",
            position: 'left'
        },
        {
            element: '#newsfeed9',
            intro: "คุณสามารถ <b>เพิ่มเป็นเพื่อน</b> โดยคลิกที่ปุ่มนี้",
            position: 'bottom'
        },


        ]
    });

    intro.onafterchange(function(targetElement) {
      console.log(targetElement.id);
      switch (targetElement.id){

        case "newsfeed2":
            $('.introjs-helperLayer').css({width:'494px'})
            break;

        case "newsfeed3":
              $('.introjs-helperLayer').css({width:'184px'})
              break;

        case "newsfeed4":
              $('.introjs-helperLayer').css({width:'91px'})
              break;
        case "newsfeed6":
            $('.introjs-helperLayer').css({left:'298px'})
            break;


      }
    });
    intro.start()
  }
  if((RegExp('newsfeedstart', 'gi').test(window.location.search))){

   setTimeout( "newsfeed()", 1500);
}
</script>
<div class="container" style="width: 90%;">
    <div class="row">
        <div class="col s8" style="margin-top: 15%;">
            <div id="newsfeed1" class="card pro-upstatus-feed">
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
              <div class="row" >
                            <div class="col s12">
                                <div class="card" style="box-shadow:none; background-color: transparent;">
                                    <div class="card-content black-text" >
                                        <div class="input-field col s3 img-position-res">
                                             <img src="{{url('/img/uploads/avatars/'.$info->avatar)}}" alt="" class="postbox-pic media-object img-circle imgthumb"> <!-- notice the "circle" class -->
                                        </div>
                                        <div class="input-field col s8 upsta-line">
                                          <form action="{{url('/post')}}" method="post" enctype="multipart/form-data">
                                          <div id="newsfeed2">
                                            <textarea style="margin-left: 20px;" id="textarea1" class="materialize-textarea" name="post_message"></textarea>
                                            <label style="margin-left: 20px;" for="textarea1">บอกสิ่งดีๆวันนี้ให้เพื่อนคุณรู้สิ!!</label></div>
                                            <div class="card-action" style="border: none;">
                                              <div class="file-field input-field">
                                                  <div id="newsfeed3" class="btn prouppic-btn black-text">
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
                                                    <button id="newsfeed4" type="submit" name="action" class="proupsta-btn waves-effect waves-light btn">
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
            <div id="newsfeed8" class="col s4 suggestF-sec">
                <div class="card pro-upstatus-feed">
                    <ul class="collection with-header f-modal">
                        <li class="collection-header transper suggest-label"><i style="line-height: 1.3;" class="fa fa-user-plus fa-2x left" aria-hidden="true"></i>
                        <h5>แนะนำเพื่อนใหม่</h5>
                        </li>
                    </ul>
                    <div id="test">

                        <div class="card-content black-text">
                           <ul class="collection" style="margin-top: -15px;">

                             @foreach($fof as $f)
                             <?php
                             $f_status = DB::table('friends')->select('status')->where([['from_user_id','=',Auth::user()->id],['to_user_id','=',$f->id]])->first();
                             ?>
                             @if(in_array($f->id,$f_all)AND !in_array($f->id,$myfriend) AND ($f->id!=Auth::user()->id))


                            <li class="collection-item avatar">
                                <img src="{{url('img/uploads/avatars/'.$f->avatar)}}" alt="" class="circle pic-border">
                                <h5 class="title">{{$f->first_name.' '.$f->last_name}}</h5>
                                @if($f_status->status =='pending')
                                <a href="{{ url('/dP/'.$f->username)}}">
                                  <button class="btn red waves-effect waves-light "  type="button" name="action" >ลบคำขอ</button>
                                </a>
                                @else
                                <form action="{{url('/pending')}}" method='post'>
                                  {{ csrf_field() }}
                                <input type='hidden' value='{{$f->id}}' name='aid'>
                              <button id="newsfeed9" class="btn  waves-effect waves-light "  type="submit" name="action" >เพิ่มเป็นเพื่อน</button>
                              </form>
                              @endif


                            </li>
                            @endif
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Suggest Friend Part-->

        <!--Start newsfeed section-->
        <div id="newsfeed5" class="col s8 pro-upstatus pro-feed">
        <ul class="collection with-header f-modal">
            <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-rss-square fa-3x left" aria-hidden="true"></i><h4>มีอะไรใหม่วันนี้</h4>
            </li>
        </ul>

    @foreach($posts as $key=>$post)
    @if(in_array($post->id,$all_posts))
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
                                    <a href="{{url('/friend/'.$post->username)}}"><span id="namecomment">{{$post->first_name.' '.$post->last_name}}</span></a>
                                    <div class="row">
                                    <div class="edit-cmt-sec">
                                      @if($post->user_id==$user->id)
                                      <a class="black-text edit-btn-2 waves-effect waves-light btn modal-trigger" href="#post-edit{{$key}}"
                                      style="background-color: #ebeef1"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>
                                      <div id="post-edit{{$key}}" class="modal" style="width: 500px;">
                                          <ul class="collection with-header f-modal">
                                              <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-pencil-square-o fa-lg left" aria-hidden="true"></i><h4>แก้ไขโพสต์</h4>
                                                  <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>

                                              <li class="transper collection-item avatar">
                                                  <img src="{{url('img/uploads/avatars/'.$post->avatar)}}" alt="" class="circle">
                                                  <span class="title title-name">{{$post->first_name.' '.$post->last_name}}</span>
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
                                      <a href="#deletePost{{$key}}" class="modal-trigger black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1">
                                        <i class="fa fa-trash-o"></i> ลบ</a>

                                        <div id="deletePost{{$key}}" class="modal" style="width: 500px;">
                                          <div class="modal-content" >

                                                <p>คุณต้องการจะลบโพสต์นี้ใช่หรือไม่</p>
                                              </div>
                                              <div class="modal-footer">
                                                <a  class=" modal-close modal-action waves-effect waves-green btn-flat">ยกเลิก</a>
                                                 <a href="{{url('/delete/'.$post->id)}}" class="modal-action waves-effect waves-green btn-flat ">ตกลง</a>
                                              </div>
                                        </div>
                                          @endif

                                          </div>
                                        </div>
                                    <p class="time-of-post" id="datecomment2">{{$post->created_at}}</p>
                                </div>
                                <div class="status-post2 col s12">
                                    <p>{{$post->post_message}}</p>
                                    <br>
                                    @if($post->content_id!=null)
                                    <?php $content = DB::table('contents')->join('category','category.id','=','contents.cate_id')->select('category.id as cgid','category.category_title','contents.*')->where('contents.id','=',$post->content_id)->first();?>

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
                                    @if($post->image!=null)
                                    <div class="card-image">
                                        <img class="materialboxed " src="img/uploads/posts/{{$post->image}}" style="width:60%">
                                    </div>
                                    @endif
                                </div>
                                <div class="card-action" style="border: none;">
                                  <?php $count_likes = DB::table('likes')->where('post_id','=',$post->id)->count();
                                      $likes = DB::table('likes')->join('accounts','likes.liked_by','=','accounts.id')->join('profiles','accounts.profile_id','=','profiles.id')
                                      ->where('post_id',$post->id)->select('likes.*','accounts.username','accounts.first_name','accounts.last_name','accounts.id','profiles.avatar')->orderBy('created_at', 'desc')->get();
                                      $uid = Auth::user()->id;
                                      $liked= DB::table('likes')->select('id')->where([['post_id','=',$post->id],['liked_by','=',$uid]])->first();
                                          ?>
                                    <div class="row wholike-sec">
<<<<<<< HEAD
=======

>>>>>>> 75bd266a6b4c3ac05b16e183e03593fcb80fd469
                                      <div class="col s2" style="margin-top: 20px;">
                                        @if($liked == null)
                                        <button type="submit" id="canLike" class="tooltipped like-btn" data-position="bottom" data-delay="50" data-tooltip="ถูกใจ">
                                          <img id="likeMe" class="heart-i" src="{{url('img/heart-default-like.png')}}">
                                        </button>
                                        @else
                                        <button type="submit" id="canUnlike" class="tooltipped like-btn" data-position="bottom" data-delay="50" data-tooltip="เลิกถูกใจ">
                                          <img id="likeMe" class="heart-i" src="{{url('img/heart-like.png')}}">
                                        </button>
                                        @endif
<<<<<<< HEAD
=======

>>>>>>> 75bd266a6b4c3ac05b16e183e03593fcb80fd469
                                            </div>


                                        <div class="col s2">
                                            <div class="likecount">
                                                <a href="#wholike" id="show_total" class="modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูเพื่อนที่ถูกใจโพสต์นี้" href="" style="color: black;">{{$count_likes}}</a>
                                            </div>
                                        </div>

                                        <div id="wholike" class="modal" style="width: 500px;">
                                            <ul class="collection with-header f-modal">
                                                <li class="collection-header transper"><i style="line-height: 1;" class="fa fa-heart fa-lg left" aria-hidden="true"></i><h4>เพื่อนที่ถูกใจโพสต์นี้</h4>
                                                    <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>
                                                    @foreach($likes as $like)
                                                <li class="collection-item avatar transper">
                                                    <img src="{{url('img/uploads/avatars/'.$like->avatar)}}" alt="" class="circle">
                                                    <p>{{$like->first_name.'  '.$like->last_name}}</p>
                                                    <a href="{{url('/friend/'.$like->username)}}" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="col s2">
                                            <div class="wholike" id="wholiked">
                                              @foreach($likes as $like)
<<<<<<< HEAD
                                                  <a class="tooltipped" id="userLiked" data-position="bottom" data-delay="50" data-tooltip="{{$like->first_name.' '.$like->last_name}}" href="{{url('/friend/'.$like->username)}}">
                                                    <img  id="newsfeed7" class="pic-wholike " src="{{url('img/uploads/avatars/'.$like->avatar)}}"/>
                                                  </a>
=======

                                                  <a class="tooltipped" id="userLiked" data-position="bottom" data-delay="50" data-tooltip="{{$like->first_name.' '.$like->last_name}}" href="{{url('/friend/'.$like->username)}}">
                                                    <img  id="newsfeed7" class="pic-wholike " src="{{url('img/uploads/avatars/'.$like->avatar)}}"/>
                                                  </a>

>>>>>>> 75bd266a6b4c3ac05b16e183e03593fcb80fd469

                                                  @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div>
                                        <div class="row">
                                          <form>
                                              <div class="input-field cmt-coll-space">

                                              <div id="newsfeed7" class="input-field w-cmt">

                                                   <div class="input-field col s12">
                                                       <textarea id="newComment" class="newComment materialize-textarea" name="comment_message"></textarea>
                                                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                       <label style="font-size: 13pt;" for="newComment">แสดงความคิดเห็น</label>
                                                   </div>




                                                   <input  id="newsfeed9" type="button" class="btn-comment comment-btn-feed waves-effect waves-light btn" name="name" value="ตกลง">
                                             </div>



                                           </form>
                                        </div>
                                        <div class="comment-section">
                                            <ul class="cmt-coll cmt-coll-space collapsible" data-collapsible="accordion">

                                                  <li class="commentboxs">
                                                    <input type="hidden" value="{{$post->id}}" class="idofpost" />
                                                    <?php $comments = DB::table('comments')->join('accounts','comments.user_id','=','accounts.id')
                                                    ->join('profiles','accounts.profile_id','=','profiles.id')->select('accounts.id','accounts.username','accounts.first_name','accounts.last_name','profiles.avatar','comments.*')
                                                    ->where('post_id',$post->id)->get();
                                                    $count_comments = DB::table('comments')->where('post_id',$post->id)->count();

                                                    ?>
                                                    @if($count_comments !=null)
                                                      <div class="collapsible-header cmt-coll-head active">
                                                          <i class="material-icons">keyboard_arrow_up</i>ความคิดเห็นเพิ่มเติม
                                                      </div>
                                                    @endif
                                                      @foreach($comments as $key=>$comment)
                                                      <div class="collapsible-body nonborder">
                                                          <ul class="col s12 collection cmt-box">

                                                          <li class="transper collection-item avatar">
                                                          <a href="{{url('/friend/'.$comment->username)}}"><img src="img/uploads/avatars/{{$comment->avatar}}" alt="" class="circle">
                                                              <span class="title title-name">{{$comment->first_name.' '.$comment->last_name}}</span></a>
<<<<<<< HEAD
                                                              <p class="time-of-comment" id="datecomment">{{$comment->created_at}}</p>
=======
                                                                @if($comment->user_id == $uid )
                                                              <a class="tooltipped modal-trigger" id="delcom" href="#deletecom{{$key}}" data-position="bottom" data-delay="50" data-tooltip="ลบความคิดเห็น">
                                                                <i class="fa fa-times" aria-hidden="true"></i> </a>
                                                                @endif
                                                              <p id="datecomment">{{$comment->created_at}}</p>
>>>>>>> 75bd266a6b4c3ac05b16e183e03593fcb80fd469
                                                              <p class="space-cmt">{{$comment->message}}<br></p>

                                                          </li>

                                                      </ul>
                                                      </div>

                                                      <div id="deletecom{{$key}}" class="modal " style="width: 500px;">
                                                        <div class="modal-content" >

                                                              <p>คุณต้องการจะลบความคิดเห็นนี้ใช่หรือไม่</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                              <a  class=" modal-close modal-action waves-effect waves-green btn-flat">ยกเลิก</a>
                                                               <a href="{{url('/comment/delete/'.$comment->id)}}" class="modal-action waves-effect waves-green btn-flat ">ตกลง</a>
                                                            </div>
                                                      </div>


                                                        <script></script>
                                                      @endforeach

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                  @endif
    @endforeach
                </div>
            </div>

            <div class="section"></div>

            <!--End timeline mypost-->

        </div>
        <!--End newsfeed section-->
    </div>


    <!--Modal Structure-->
    <!--post-edit-->

    <!--wholike-->

    <script type="text/javascript">
<<<<<<< HEAD
    $(".time-of-post").html(function(index, value) {
      moment.locale('th');
      return moment(value).calendar();
    });

    $(".time-of-comment").html(function(index, value) {
      moment.locale('th');
      return moment(value).calendar();
    });
=======
>>>>>>> 75bd266a6b4c3ac05b16e183e03593fcb80fd469
      var $self;
      $('.btn-comment').click(function(){
        $self = $(this);
        var id = $self.parent().parent().parent().parent().parent().find('.idofpost').val();
        console.log(id);
<<<<<<< HEAD
        if($self.parent().parent().find('.newComment').val() != ''){
          $.ajax({ url: "{{url('/comment/')}}"+"/"+id,
          type : "POST",
          data : {comment_message: $(this).parent().parent().find('.newComment').val()},
          headers : { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
          })
          .done(function(html) {
            // console.log($(this).parent().parent().parent().parent().parent().find('#commentboxs').html());
            console.log(html);
            $self.parent().parent().parent().parent().parent().find('.commentboxs').append(html);
            Materialize.toast('คุณได้แสดงความคิดเห็นแล้ว', 5000);
            $self.parent().parent().find('.newComment').val('');
          })
          .fail(function(){
            alert('เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง');
          })
        }
        else {
          Materialize.toast('คุณยังไม่กรอกความเห็น', 5000);
        }

      });
    </script>

    <script type="text/javascript">
    $('.like-btn').click(function(){
      $self = $(this);
      var id = $self.parent().parent().parent().find('.idofpost').val();
      // var checkLiked = $self.find('#likeMe');
      if($self.attr("id") == "canLike"){
        $.ajax({
          type: "POST",
          url: "{{url('/like/')}}"+"/"+id,
          data: {
            liked_by: '{{Auth::user()->id}}'
          },
          headers : { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
        })
        .done(function(data){
          console.log(data);
          var json = $.parseJSON(data);
          console.log(json['count']);
          console.log('like');
          $self.attr("id","canUnlike");
          $self.find('#likeMe').attr("src","{{url('img/heart-like.png')}}");
          $self.parent().parent().find('#show_total').html(json['count']);
          $self.parent().parent().find('#wholiked').append(json['html']);
        })
        .fail(function(data){
          console.log('like failed');
        });
      }
      else if($self.attr("id") == "canUnlike"){
        $.ajax({
          type: "POST",
          url: "{{url('/unlike/')}}"+"/"+id,
          data: {
            liked_by: '{{Auth::user()->id}}',
            post_id: id
          },
          headers : { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
        })
        .done(function(data){
          console.log('unlike');
          $self.attr("id","canLike");
          $self.find('#likeMe').attr("src","{{url('img/heart-default-like.png')}}");
          $self.parent().parent().find('#userLiked').remove();
          $self.parent().parent().find('#show_total').html(data);


        })
        .fail(function(data){
          console.log('unlike failed : ');
        });
      }
=======
        var addingComment = $.ajax({ url: "{{url('/comment/')}}"+"/"+id,
        type : "POST",
        data : {comment_message: $(this).parent().parent().find('.newComment').val()},
        headers : { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
        })
        .done(function(html) {
          // console.log($(this).parent().parent().parent().parent().parent().find('#commentboxs').html());
          console.log(html);
          $self.parent().parent().parent().parent().parent().find('.commentboxs').append(html);
        })
        .fail(function(){
          alert('เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง');
        })
      });



    </script>

    <script type="text/javascript">
    $('.like-btn').click(function(){
      $self = $(this);
      var id = $self.parent().parent().parent().find('.idofpost').val();
      // var checkLiked = $self.find('#likeMe');
      if($self.attr("id") == "canLike"){
        $.ajax({
          type: "POST",
          url: "{{url('/like/')}}"+"/"+id,
          data: {
            liked_by: '{{Auth::user()->id}}'
          },
          headers : { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
        })
        .done(function(data){
          console.log(data);
          var json = $.parseJSON(data);
          console.log(json['count']);
          console.log('like');
          $self.attr("id","canUnlike");
          $self.find('#likeMe').attr("src","{{url('img/heart-like.png')}}");
          $self.parent().parent().find('#show_total').html(json['count']);
          $self.parent().parent().find('#wholiked').append(json['html']);
        })
        .fail(function(data){
          console.log('like failed');
        });
      }
      else if($self.attr("id") == "canUnlike"){
        $.ajax({
          type: "POST",
          url: "{{url('/unlike/')}}"+"/"+id,
          data: {
            liked_by: '{{Auth::user()->id}}',
            post_id: id
          },
          headers : { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
        })
        .done(function(data){
          console.log('unlike');
          $self.attr("id","canLike");
          $self.find('#likeMe').attr("src","{{url('img/heart-default-like.png')}}");
          $self.parent().parent().find('#userLiked').remove();
          $self.parent().parent().find('#show_total').html(data);


        })
        .fail(function(data){
          console.log('unlike failed : ');
        });
      }
>>>>>>> 75bd266a6b4c3ac05b16e183e03593fcb80fd469

    });
    </script>

@stop
