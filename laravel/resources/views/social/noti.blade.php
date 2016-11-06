@extends('site.layout')
@section('maincontent')
<?php
use Carbon\Carbon;
 ?>
<script type="text/javascript">


  function notification() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เสร็จ",
        steps: [
        {
            element: '#noti2',
            intro: "ในส่วนนี้จะแสดง <b>คำขอเป็นเพื่อน</b> ที่ส่งมาให้กับคุณ",
            position: 'bottom'
        },
       
        {
            element: '#noti4',
            intro: "คลิกที่นี้เพื่อดู <b>การแจ้งเตือนกิจกรรม</b> ที่คุณมีส่วนร่วมได้ที่นี้",
            position: 'bottom'
        },
        {
            element: '#noti5',
            intro: "คลิกที่นี้เพื่อดู <b>การแจ้งเตือนเกี่ยวกับสถานะของคุณ</b> ที่ได้ทำการโพสต์ไว้บนหน้าโปรไฟล์",
            position: 'bottom'
        },
        ]
    });

    /*intro.onafterchange(function(targetElement) {
      console.log(targetElement.id);
      switch (targetElement.id){

        case "comment2":
            $('.introjs-helperLayer').css({width:'127px'})
            break;
      }
    });*/

    intro.onchange(function(targetElement) {
        if($(targetElement).attr("id") == $('#noti1').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'allNotify');
        }
        if($(targetElement).attr("id") == $('#noti2').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'friendNotify');
        }
        if($(targetElement).attr("id") == $('#noti3').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'chatNotify');
        }
        if($(targetElement).attr("id") == $('#noti4').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'eventNotify');
        }
        if($(targetElement).attr("id") == $('#noti5').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'statusNotify');
        }
    });

    intro.start()
  }

  if((RegExp('notistart', 'gi').test(window.location.search))){
    
   setTimeout( "notification()", 1500);
}
</script>
<div class="container" style="width: 90%; margin-top: 160px;min-height: 600px;">
  <div class="row">
 <div class="col s12">
   <ul class="tabs nt-tabhead">
     <?php
     $user = Auth::user()->id;
     $freq = DB::table('friends')->where([['to_user_id',$user],['status','=','pending']])->count();
     $mes= 2;
     $eve=1;
     $post=3;
     $all = $freq+$mes+$eve+$post;
      ?>
     <li id="noti2" class="tab col s3"><a href="#friendNotify" class="nt-tabfont">เพื่อน <span class="noti-badge new badge person" data-badge-caption="คน">{{$freq}}</span></a></li>
     <li id="noti4" class="tab col s3"><a href="#eventNotify" class="nt-tabfont">กิจกรรม <span class="noti-badge new badge">{{$eve}}</span></a></li>
     <li id="noti5" class="tab col s3"><a href="#statusNotify" class="nt-tabfont">โพสต์ของคุณ <span class="noti-badge new badge">{{$post}}</span></a></li>
     <li id="noti6" class="tab col s3"><a href="#otherStatusNotify" class="nt-tabfont">โพสต์ของเพื่อน <span class="noti-badge new badge">{{$post}}</span></a></li>

   </ul>
 </div>

 <div id="friendNotify" class="col s12 nt-collection">
   <div class="collection">
    @foreach($friendReqNoti as $key=>$person)
 <div href="{{$key}}" class="collection-item">
       <div class="row">

         <div class="col col-thumbnail">
           <img class="who circle" src="{{url('img/uploads/avatars/'.$person->avatar)}}">
         </div>
         <div class="col s10 m10 l10" style="margin-top:1em">
           <span style="color:#26a69a">{{$person->first_name.' '.$person->last_name}}</span> <span class="description">ได้ส่งคำขอเป็นเพื่อน</span>
            <a href="{{url('acceptFriend/'.$person->id)}}"class="btn waves-effects  waves-light teal lighten-2 right "  >ยอมรับคำขอ</a><br/><br/>
            <a href="{{url('deleteFriendReq/'.$person->username)}}"class="btn waves-effects waves-light  red lighten-1 right" style="margin-right:1em" >ลบคำขอ</a>
         </div>
         <div class="section"></div>
         <div class="col s1 m10 l10">
           <i class="material-icons left">person_add</i> <span class="time"> {{$person->created_at}}</span>

         </div>
       </div>
       </div>

     @endforeach
   </div>
 </div>
 <div id="eventNotify" class="col s12 nt-collection">
   <div class="collection">
     <a href="#!" class="collection-item" target="_blank">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/ball_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุธีร์ แก้วตาหวาน และ สุนิสา ปานหิบ</span> <span class="description">ได้เข้าร่วมกิจกรรมของคุณ</span>
         </div>
         <div class="section"></div>
         <div class="col s10 m10 l10">
           <i class="material-icons left">insert_invitation</i><span class="time"> 56 นาทีที่แล้ว</span>
         </div>
       </div>
     </a>

   </div>
 </div>
 <div id="statusNotify" class="col s12 nt-collection">
   <div class="collection">

     @foreach($ownPostNoti as $comment)

     <a href="{{url('/post/'.$comment->post_id)}}" class="collection-item" target="_blank">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="{{url('img/uploads/avatars/'.$comment->avatar)}}">
         </div>
         <div class="col s9 m10 l10">
            <span class="description">{{$comment->description}}</span>
         </div>
         <div class="section"></div>
         <div class="col s10 m10 l10">
           <i class="material-icons left">insert_comment</i><span class="time entry-time">{{$comment->created_at}}</span>
         </div>
       </div>
     </a>
     @endforeach

   </div>
 </div>

 <div id="otherStatusNotify" class="col s12 nt-collection">
   <div class="collection">
     @foreach($otherPostNoti as $comment)

     <a href="{{url('/post/'.$comment->post_id)}}" class="collection-item" target="_blank">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="{{url('img/uploads/avatars/'.$comment->avatar)}}">
         </div>
         <div class="col s9 m10 l10">
            <span class="description">{{$comment->description}}</span>
         </div>
         <div class="section"></div>
         <div class="col s10 m10 l10">
           <i class="material-icons left">insert_comment</i><span class="time entry-time">{{$comment->created_at}}</span>
         </div>
       </div>
     </a>
     @endforeach

   </div>
 </div>
</div>

</div>

@stop
