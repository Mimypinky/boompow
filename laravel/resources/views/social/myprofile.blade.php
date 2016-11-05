@extends('site.layout')
@section('maincontent')
<script type="text/javascript">
    function myprofile() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '.myprofile1',
            intro: "คลิกที่นี้เพื่อ <b>แก้ไขข้อมูลส่วนตัว</b> และ <b>รูปภาพประจำตัว</b> ของคุณ",
            position: 'bottom'
        },
        {
            element: '#meme',
            intro: "คุณสามารถ <b>แก้ไขรูปภาพประจำตัว และ ข้อมูลส่วนตัว</b> ได้ในส่วนนี้",
            position: 'bottom'
        },
        {
            element: '#myprofile2',
            intro: "ส่วนนี้บอก <b>จำนวนเพื่อนทั้งหมด</b> ที่คุณมี คุณสามารถคลิกที่นี้เพื่อ <b>ดูรายชื่อเพื่อนของคุณ</b>",
            position: 'bottom'
        },

        {
            element: '#myprofile3',
            intro: "ส่วนนี้บอก <b>จำนวนโพสต์ทั้งหมด</b> ที่คุณมีบนหน้าโปรไฟล์ของคุณ",
            position: 'bottom'
        },
        {
            element: '#myprofile4',
            intro: "ส่วนนี้จะแสดง <b>จำรวนรูปภาพ</b> ที่คุณเคยโพสต์ไว้บนหน้าโปรไฟล์ของคุณ โดยคุณสามารถคลิกที่นี้เพื่อ <b>ดูรูปภาพทั้งหมด</b>",
            position: 'bottom'
        },
        {
            element: '#myprofile5',
            intro: "คุณสามารถทำการ <b>โพสต์ข้อความของคุณ</b> ลงบนโปรไฟล์ของคุณได้ที่นี้ บอกสิ่งดีๆวันนี้ให้เพื่อนคุณรู้สิ!!",
            position: 'bottom'
        },
        {
            element: '#myprofile6',
            intro: "คุณสามารถ <b>อัพโหลดรูปภาพ</b> ของคุณได้ที่นี้ โชว์อะไรสวยๆให้เพื่อนคุณดูหน่อยสิ!!",
            position: 'bottom'
        },
        {
            element: '#myprofile7',
            intro: "คลิกที่นี้เพื่อ <b>โพสต์</b> ข้อความของคุณ",
            position: 'bottom'
        },
        ]
    });

intro.onchange(function(targetElement) {
        if($(targetElement).attr("id") == $('#meme').attr('id')) {
           $('#profile-edit').openModal();
        }
        else{
            $('#profile-edit').closeModal();
        }
    });


    /*intro.start().oncomplete(function() { $('#profile-edit').hide();
    }).onexit(function(){ $('#profile-edit').hide();
    }).onchange(function(targetElement) {


        // and show modal on Step 4
        if($(targetElement).attr("id") == $('#profile-edit').attr('id')) {

            $('#profile-edit').show();


        }
        // don't forget to hide modal on other steps
        if($(targetElement).attr("id") != $('#profile-edit').attr('id')) {
            $('#profile-edit').hide();
        }


    });*/
    intro.onafterchange(function(targetElement) {
      console.log(targetElement.id);
      switch (targetElement.id){
        case "myprofile5":
            $('.introjs-helperLayer').css({width:'517px'})
            break;
        case "myprofile6":
            $('.introjs-helperLayer').css({width:'190px'})
            break;
        case "myprofile7":
            $('.introjs-helperLayer').css({width:'94px'})
            break;
        case "namecomment":
            $('.introjs-helperLayer').css({width:'209px'})
            break;
        case "myprofile9":
            $('.introjs-helperLayer').css({left:'480px'})
            break;
      }
    });
    intro.start()
}
if((RegExp('profilestart', 'gi').test(window.location.search))){
    
   setTimeout( "myprofile()", 1500);
}

function mypost() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#namecomment',
            intro: "ส่วนนี้จะแสดง <b>ชื่อของเจ้าของโพสต์</b> คุณสามารถ คลิกที่ชื่อเพื่อ <b>เข้าดูหน้าโปรไฟล์ของเพื่อน</b> ได้ที่นี่",
            position: 'bottom'
        },
        {
            element: '#datecomment2',
            intro: "ส่วนนี้จะแสดง <b>วัน และ เวลา</b> ที่เจ้าของโพสต์ได้ทำการโพสต์",
            position: 'bottom'
        },
        {
            element: '#likeMe2',
            intro: "คุณสามารถ <b>ถูกใจ</b> โพสต์ได้ที่นี้",
            position: 'bottom'
        },
        

        ]
    });

    intro.onafterchange(function(targetElement) {
      console.log(targetElement.id);
      switch (targetElement.id){

        case "namecomment":
            $('.introjs-helperLayer').css({width:'209px'})
            break;
        case "datecomment":
            $('.introjs-helperLayer').css({width:'180px'})
            break;
        case "likeMe2":
            $('.introjs-helperLayer').css({left:'488px'})
            break;
        
        
      }
    });
    intro.start()
}
if((RegExp('mypoststart', 'gi').test(window.location.search))){
    
   setTimeout( "mypost()", 1500);
}

function mngpost() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#mngpost1',
            intro: "คลิกที่นี้เพื่อ <b>แก้ไขโพสต์</b> ของคุณ",
            position: 'bottom'
        },
        {
            element: '#mngpost2',
            intro: "คลิกที่นี้เพื่อ <b>ลบโพสต์</b> ของคุณ",
            position: 'bottom'
        },
        ]
    });

    intro.onafterchange(function(targetElement) {
      console.log(targetElement.id);
      switch (targetElement.id){

        case "mngpost1":
            $('.introjs-helperLayer').css({width:'115px'})
            break;
        case "mngpost2":
            $('.introjs-helperLayer').css({width:'100px'})
            break;
      }
    });
    intro.start()
}
if((RegExp('mngpoststart', 'gi').test(window.location.search))){
    
   setTimeout( "mngpost()", 1500);
}

function comment() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#comment1',
            intro: "คุณสามารถ <b>แสดงความคิดเห็น</b> บนโพสต์ได้ที่นี้",
            position: 'bottom'
        },

        ]
    });

    intro.start()
  }
  if((RegExp('commentstart', 'gi').test(window.location.search))){
    
   setTimeout( "comment()", 1500);
}
</script>
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
                    <div class="col s8 offset-s2 w-profile pro-detail">
                        <a id="show-popup-button" class="myprofile1 modal-trigger black-text edit-btn waves-effect waves-light btn" href="#profile-edit" style="background-color: #ebeef1"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>
                        <div id="proname">
                            <h2>{{ Auth::user()->first_name.'  '.Auth::user()->last_name }}</h2>
                        </div>
                        <div id="prodetail">
                            <p>
                              {{$info->bio}}<br />

                            </p>
                        </div>
                        <div style="font-size: 14pt; text-align: center;">

                            <a id="myprofile2" href="#whofriend" class="modal-trigger"><span class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูเพื่อนของฉัน"><i class="fa fa-users" aria-hidden="true"></i><span>&nbsp{{$sumfriend}}</span><span>&nbspเพื่อน</span></span></a>
                            <span class="border-divi"></span>
                            <span id="myprofile3"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>&nbsp{{$sumpost}}</span><span>&nbspโพสต์</span></span>
                            <span class="border-divi"></span>
                            <a id="myprofile4" href="#picstore" class="modal-trigger"><span class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูรูปภาพที่เคยโพสต์"><i class="fa fa-picture-o" aria-hidden="true"></i><span>&nbsp{{$sumpicpost}}</span><span>&nbspรูปภาพ</span></span></a>

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
                                          <div id="myprofile5">
                                            <textarea style="margin-left: 20px;" id="textarea1" name="post_message" class="materialize-textarea"></textarea>

                                            <label style="margin-left: 20px;" for="textarea1">บอกสิ่งดีๆวันนี้ให้เพื่อนคุณรู้สิ!!</label></div>
                                            <div class="card-action" style="border: none;">

                                                    <div class="file-field input-field">
                                                        <div id="myprofile6" class="btn prouppic-btn black-text">
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
                                                    <button id="myprofile7" name="action" type="submit" class="proupsta-btn waves-effect waves-light btn">
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
                @if(isset($posts))
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

                                        </div>
                                        <div class="input-field col s9 upsta-line">

                                        @else
                                        <div class="input-field col s3" style="padding-left: 35px;">
                                             <img src="img/uploads/avatars/{{$post->avatar}}" alt="" class="postbox-pic media-object img-circle imgthumb">
                                             <span class="posbadge me badge f">{{$post->first_name}}</span>

                                        </div>
                                        <div class="input-field col s9 upsta-line-f">

                                        @endif

                                            <div class="col s12" id="commenthead">
                                                <a href="{{url('/friend/'.$post->username)}}"><span id="namecomment">{{$post->first_name.' '.$post->last_name}}</span></a>
                                                <div class="row">
                                                <div class="w-edit">
                                                  @if($post->user_id==$user->id)
                                                  <a id="mngpost1" class="black-text edit-btn-2 waves-effect waves-light btn modal-trigger" href="#post-edit{{$key}}"
                                                  style="background-color: #ebeef1"><i class="fa fa-pencil-square-o"></i> แก้ไข</a>

                                                  <a id="mngpost2" href="#deletePost{{$key}}" class="modal-trigger black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1">
                                                    <i class="fa fa-trash-o"></i> ลบ</a>
                                                    @else
                                                    <a href="#deletePost{{$key}}" class="modal-trigger black-text del-btn waves-effect waves-light btn" style="background-color: #ebeef1; margin-left: 95px;">
                                                      <i class="fa fa-trash-o"></i> ลบ</a>
                                                      @endif

                                                </div>
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

                                                <div id="deletePost{{$key}}" class="modal" style="width: 500px;">
                                                  <div class="modal-content" >

                                                        <p>คุณต้องการจะลบโพสต์นี้ใช่หรือไม่</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <a  class=" modal-close modal-action waves-effect waves-green btn-flat">ยกเลิก</a>
                                                         <a href="{{url('/delete/'.$post->id)}}" class="modal-action waves-effect waves-green btn-flat ">ตกลง</a>
                                                      </div>
                                                </div>
                                                <p id="datecomment2">{{$post->created_at}}
                                                </p>
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
                                                  ->where('post_id',$post->id)->select('likes.*','accounts.first_name','accounts.last_name','accounts.id','profiles.avatar','accounts.username')->orderBy('created_at', 'desc')->get();
                                                  $uid = Auth::user()->id;

                                                  $liked= DB::table('likes')->select('id')->where([['post_id','=',$post->id],['liked_by','=',$uid]])->first();

                                                      ?>
                                                <div class="row wholike-sec">
                                                    <div class="col s1 like-section">
                                                      @if($liked == null)
                                                      <button type="submit" id="canLike" class="tooltipped like-btn" data-position="bottom" data-delay="50" data-tooltip="ถูกใจ">
                                                        <img id="likeMe" class="heart-i" src="{{url('img/heart-default-like.png')}}">
<<<<<<< HEAD
                                                      </button> -->

                                                    @if($liked!=null)
                                                        <a href="{{url('/unlike/'.$liked->id)}}" onclick="unlikeFunction()">
                                                          <button class="tooltipped like-btn"  data-position="bottom" data-delay="50" data-tooltip="เลิกถูกใจ">
                                                            <img id="likeMe" class="heart-i" src="{{url('img/heart-default-like.png')}}">
                                                          </button>
                                                        </a>
                                                        @else

                                                        <a href="{{url('/like/'.$post->id)}}" onclick="likeFunction()">
                                                          <button class="tooltipped like-btn" data-position="bottom" data-delay="50" data-tooltip="ถูกใจ">
                                                            <img id="likeMe2" id="likeMe" class="heart-i" src="{{url('img/heart-like.png')}}">
                                                          </button>

                                                        </a>
                                                        @endif
=======
                                                      </button>
                                                      @else
                                                      <button type="submit" id="canUnlike" class="tooltipped like-btn" data-position="bottom" data-delay="50" data-tooltip="เลิกถูกใจ">
                                                        <img id="likeMe" class="heart-i" src="{{url('img/heart-like.png')}}">
                                                      </button>
                                                      @endif
>>>>>>> 340a36ccf41452fa5a4b7f5cca909d0d927c5896
                                                    </div>

                                                    <div class="col s2">
                                                        <div class="likecount">
<<<<<<< HEAD
                                                            <a href="#wholike" class="modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูเพื่อนที่ถูกใจโพสต์นี้" href="" style="color: black;">{{$count_likes}}</a>
=======
                                                            <a href="#wholike{{$key}}" class="modal-trigger tooltipped" data-position="bottom" data-delay="50" data-tooltip="ดูเพื่อนที่ถูกใจโพสต์นี้" href="" style="color: black;" id="show_total">{{$count_likes}}</a>
>>>>>>> 340a36ccf41452fa5a4b7f5cca909d0d927c5896
                                                        </div>
                                                    </div>
                                                    @foreach($likes as $like)
                                                    <div id="wholike" class="modal" style="width: 500px;">
                                                        <ul class="collection with-header f-modal">
                                                            <li class="collection-header transper"><i style="line-height: 1;" class="fa fa-heart fa-lg left" aria-hidden="true"></i><h4>เพื่อนที่ถูกใจโพสต์นี้</h4>
                                                            <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>
                                                            <li class="collection-item avatar transper">
                                                                <img src="{{url('img/uploads/avatars/'.$like->avatar)}}" alt="" class="circle">
                                                                <p>{{$like->first_name.' '.$like->last_name}}</p>
                                                                <a href="{{url('/friend/'.$like->username)}}" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    @endforeach
                                                    <div class="col s2">
                                                        <div class="wholike" id="wholiked">

                                                          @foreach($likes as $like)
<<<<<<< HEAD

                                                          @if($like->liked_by!=$user->id)
                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="{{$like->first_name.' '.$like->last_name}}" href="{{url('/friend/'.$like->username)}}">
                                                              <img class="pic-wholike " src="{{url('img/uploads/avatars/'.$like->avatar)}}"/>
                                                            </a>
                                                          @else
                                                            <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="{{$like->first_name.' '.$like->last_name}}" href="{{url('/profile')}}">
                                                              <img class="pic-wholike " src="{{url('img/uploads/avatars/'.$like->avatar)}}"/>
                                                            </a>
                                                          @endif

=======
                                                          <a class="tooltipped" id="userLiked" data-position="bottom" data-delay="50" data-tooltip="{{$like->first_name.' '.$like->last_name}}" href="{{url('/friend/'.$like->username)}}">
                                                            <img  id="mypost4" class="pic-wholike " src="{{url('img/uploads/avatars/'.$like->avatar)}}"/>
                                                          </a>
>>>>>>> e0984f897f67bce31bf303825324d8ff340a7f86
                                                          @endforeach


                                                        </div>
                                                    </div>
                                               </div>


                                               <div class="divider"></div>

                                                   <div class="row">

                                                   <form>
                                                       <div class="input-field cmt-coll-space">

                                                       <div id="comment1" class="input-field w-cmt">


                                                            <div class="input-field col s12">
                                                                <textarea id="newComment" class="materialize-textarea newComment" name="comment_message"></textarea>

                                                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                <label style="font-size: 13pt;" for="newComment">แสดงความคิดเห็น</label>
                                                            </div>
<<<<<<< HEAD
                                                             <input  id="comment2" type="button" class="btn-comment comment-btn-feed waves-effect waves-light btn" name="name" value="ตกลง">



=======
                                                             <input type="button" class="btn-comment comment-btn-feed waves-effect waves-light btn" name="name" value="ตกลง">
>>>>>>> 340a36ccf41452fa5a4b7f5cca909d0d927c5896

                                                        </div>


                                                   </div>
                                                   </form>

                                                   <div class="comment-section">
                                                       <ul class="cmt-coll w-cmt collapsible" data-collapsible="accordion">
                                                            <li id="commentboxs" class="commentboxs">
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

                                                                @foreach($comments as $comment)
                                                                <div class="collapsible-body nonborder">
                                                                    <ul class="col s12 collection cmt-box">
                                                                    <li class="transper collection-item avatar">
                                                                    <a href="{{url('/friend/'.$comment->username)}}"><img src="img/uploads/avatars/{{$comment->avatar}}" alt="" class="circle">
                                                                        <span class="title title-name">{{$comment->first_name.' '.$comment->last_name}}</span></a>
                                                                        @if($comment->user_id == $uid )
                                                                      <a class="tooltipped modal-trigger" href="#deletecom{{$key}}" data-position="bottom" data-delay="50" data-tooltip="ลบความคิดเห็น">
                                                                        <i class="fa fa-times" aria-hidden="true"></i> </a>
                                                                        @endif
                                                                        <p id="datecomment">{{$comment->created_at}}</p>
                                                                        <p class="space-cmt">{{$comment->message}}<br></p>
                                                                    </li>

                                                                </ul>
<<<<<<< HEAD


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

                                                                <script type="text/javascript">
                                                                    $('.btn-comment').click(function(){
                                                                      var addingComment = $.ajax({ url: "{{url('/comment/')}}"+"/"+"{{$post->id}}",
                                                                      type : "POST",
                                                                      data : {comment_message: $(this).parent().parent().find('.newComment').val()},
                                                                      headers : { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
                                                                    })
                                                                      .done(function(html) {
                                                                        console.log('{{$post->id}}');
                                                                        $(this).parent().parent().parent().find('#commentboxs').append(html);
                                                                      })
                                                                      .fail(function(){
                                                                        alert('เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง');
                                                                      })
                                                                    });
                                                                </script>






=======

                                                              </div>
>>>>>>> 340a36ccf41452fa5a4b7f5cca909d0d927c5896
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
                      </div>
                    </div>
<<<<<<< HEAD








=======
                    </div>
>>>>>>> 340a36ccf41452fa5a4b7f5cca909d0d927c5896
                    </div>
                </div>
                @endif
                <!--End timeline-->

                <!-- Modal Structure -->

                    <!--whofriend-->
                    <div id="whofriend" class="modal" style="width: 500px;">
                        <ul class="collection with-header f-modal">
                            <li class="collection-header transper"><i style="line-height: 1;" class="fa fa-users fa-lg left" aria-hidden="true"></i><h4>เพื่อนของฉัน</h4>
                            <div class="modal-close close-fmbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div></li>
                            @foreach($allfriend as $myfriend)
                            <li class="collection-item avatar transper">
                                <img src="{{url('/img/uploads/avatars/'.$myfriend->avatar)}}" alt="" class="circle">
                                <p>{{$myfriend->first_name.' '.$myfriend->last_name}}</p>
                                <a href="{{url('/friend/'.$myfriend->username)}}" class="secondary-content btn waves-effect waves-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;ดูหน้าของเพื่อน</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--picstore-->
                    <div id="picstore" class="pic-modal modal" style="width: 950px;">
                        <ul class="collection with-header f-modal">
                            <li class="collection-header transper"><i style="line-height: 1;" class="fa fa-picture-o fa-lg left" aria-hidden="true"></i><h4>รูปภาพของฉัน</h4>
                            <div class="modal-close close-mbtn" align="right"><p><i class="fa fa-times" aria-hidden="true"></i></p></div><br>
                            <p style="color: #8a8787;">คุณดูรูปภาพที่โพสต์ได้</p>
                            </li>
                        </ul>
                        <div class="row pic-rspace">
                          @foreach($pic_post as $key=> $pic)

                           <div class="col s12 l4 pic-col">
                               <div class="hovereffect">
                                   <img src="{{url('/img/uploads/posts/'.$pic->image)}}" style="width:100%;">
                                   <div class="overlay">

                                   <a class="info  modal-trigger" href="#delPicPost{{$key}}">ลบ</a>


                               </div>
                           </div>
                         </div>

                            @endforeach

                    </div>
                  </div>
                    <!--profile-edit-->
                    <div id="profile-edit" class="modal" style="width: 500px;" data-backdrop="static">
                    <div  class="modal-content">
                        <ul class="collection with-header f-modal">
                            <li class="collection-header transper"><i style="line-height: 1.2;" class="fa fa-pencil-square-o fa-lg left" aria-hidden="true"></i><h4>แก้ไขข้อมูลส่วนตัว</h4>
                            <div class="modal-close close-fmbtn" align="right"><a id="close-modal-button" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></a></div></li>

                            <li>

<<<<<<< HEAD
<
                                <div class="row col s10" style="margin-top: 5%; margin-left: 42px;">

=======
                                <div class="row col s10" style="margin-top: 5%; margin-left: 42px">
>>>>>>> 340a36ccf41452fa5a4b7f5cca909d0d927c5896

                                        <div class="row">
                                          <div style="text-align: center;">
                                              <img class="pro-pic media-object dp img-circle" id="avatar" style="width:150px;height:150px;" src="img/uploads/avatars/{{$info->avatar}}">

                                          </div>
                                          <form enctype="multipart/form-data" action="/profile" id="updateInfo"  method="post">
                                              <div class="file-field input-field">

                                                  <span style="margin-top: -15%;" class="cam-input tooltipped" data-position="right" data-delay="50" data-tooltip="เปลี่ยนภาพประจำตัว">
<<<<<<< HEAD

=======
>>>>>>> 340a36ccf41452fa5a4b7f5cca909d0d927c5896

                                                  <i class="cam-icon fa fa-camera" ></i>
                                                  <input type="file" id="files" name="avatar" class="inputFile">
                                                  <input type="hidden" name="_token" value="{{csrf_token()}}"></span>

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
                                              <label for="name-pro">ชื่อ</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                              <input id="name-pro" type="text" class="validate" name="last_name" value="{{$user->last_name}}">
                                              <label for="name-pro">นามสกุล</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                              <input id="detail-pro" type="text" class="validate" name="bio" value="{{$info->bio}}">
                                              <label for="detail-pro">เกี่ยวกับฉัน</label>
                                            </div>
                                        </div>
                                        <button type="submit" name="action" class="waves-effect waves-light btn right">ตกลง</button>
                                    </form>
                                </div>

                            </li>
                        </ul>
                        </div>
                    </div>
                    <!--wholike-->

                    @if(!isset($key))
                    <div class="section"></div>
                    @else
                    <div id="delPicPost{{$key}}" class="modal" style="width: 500px;">
                       <div class="modal-content">
                         <h4>ยืนยันการลบรูปภาพ</h4>
                       </div>
                       <div class="modal-footer">
                         <a href="{{url('/delPic/'.$post->id)}}" class=" modal-action modal-close waves-effect waves-green btn-flat">ยืนยัน</a>
                       </div>
                     </div>
                     @endif
                    <!-- End Modal Structure -->


            </div>
        </div>

<script type="text/javascript">
  var $self;
  $('.btn-comment').click(function(){
    $self = $(this);
    var id = $self.parent().parent().parent().parent().parent().find('.idofpost').val();
    console.log(id);
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

});
</script>
@stop
