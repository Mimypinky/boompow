@extends('site.layout')
@section('maincontent')
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
            element: '#notiintro',
            intro: "คุณสามารถดูการแจ้งเตืองทั้งหมดของคุณได้ในหน้านี้"
            
        },
        {
            element: '#noti1',
            intro: "คลิกที่นี้เพื่อดูการแจ้งเตือนทั้งหมดที่คุณมี",
            position: 'bottom'
        },
        {
            element: '#noti2',
            intro: "คลิกที่นี้เพื่อดูการแจ้งเตือนที่มีระหว่างคุณกับเพื่อนของคุณ",
            position: 'bottom'
        },
        {
            element: '#noti3',
            intro: "คลิกที่นี้เพื่อดูการแจ้งเตือนข้อความระหว่างคุณและเพื่อน",
            position: 'bottom'
        },
        {
            element: '#noti4',
            intro: "คลิกที่นี้เพื่อดูการแจ้งเตือนเกี่ยวกับกิจกรรมที่คุณมีส่วนร่วม",
            position: 'bottom'
        },
        {
            element: '#noti5',
            intro: "คลิกที่นี้เพื่อดูการแจ้งเตือนเกี่ยวกับสถานะของคุณที่ได้ทำการโพสต์ไว้บนไทม์ไลน์",
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
     <li id="noti1" class="tab col s3"><a class="active nt-tabfont" href="#allNotify"><span>แจ้งเตือนทั้งหมด <span class="noti-badge new badge">{{$all}}</span></a></li>

     <li id="noti2" class="tab col s3"><a href="#friendNotify" class="nt-tabfont">เพื่อน <span class="noti-badge new badge">{{$freq}}</span></a></li>
     <li id="noti3" class="tab col s3"><a href="#chatNotify" class="nt-tabfont">ข้อความ <span class="noti-badge new badge">{{$mes}}</span></a></li>
     <li id="noti4" class="tab col s3"><a href="#eventNotify" class="nt-tabfont">กิจกรรม <span class="noti-badge new badge">{{$eve}}</span></a></li>
     <li id="noti5" class="tab col s3"><a href="#statusNotify" class="nt-tabfont">สถานะ <span class="noti-badge new badge">{{$post}}</span></a></li>
   </ul>
 </div>


 <div id="allNotify" class="col s12 nt-collection">
   <div class="collection">
     <a href="AllChat.html" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/mim_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>กี๋ ก๋า</span> <span class="description"> ได้ส่งคำขอถึงคุณ</span>
         </div>
         <div class="section"></div>
         <div class="col s1 m10 l10">
           <i class="material-icons left">person_add</i> <span class="time"> 3 นาทีที่แล้ว</span>
         </div>
       </div>
     </a>
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/ball_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุธีร์ แก้วตาหวาน และเพื่อนอีก 7,890 คน</span> <span class="description">ได้ถูกใจสถานะของคุณ</span>
         </div>
         <div class="section"></div>
         <div class="col s10 m10 l10">
           <i class="fa fa-heart fa-lg"></i><span class="time"> 32 นาทีที่แล้ว</span>
         </div>
       </div>
     </a>
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/mim_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุนิสา ปานหิบ และเพื่อนอีก 3 คน</span> <span class="description">ได้แสดงความคิดบนสถานะของคุณ</span>
         </div>
         <div class="section"></div>
         <div class="col s10 m10 l10">
           <i class="material-icons left">insert_comment</i> <span class="time"> 44 นาทีที่แล้ว</span>
         </div>
       </div>
     </a>
     <a href="event_activity_owner.html" class="collection-item">
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
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/ball_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุธีร์ แก้วตาหวาน</span> <span class="description">ส่ง 88 ข้อความถึงคุณ</span>
         </div>
         <div class="section"></div>
         <div class="col s1 m10 l10">
           <i class="material-icons left">chat_bubble</i><span class="time"> 4 ชั่วโมงที่แล้ว</span>
         </div>
       </div>
     </a>
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/ball_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>JJ JJ</span> <span class="description">ส่ง 88 ข้อความถึงคุณ</span>
         </div>
         <div class="section"></div>
         <div class="col s1 m10 l10">
           <i class="material-icons left">chat_bubble</i><span class="time"> 4 ชั่วโมงที่แล้ว</span>
         </div>
       </div>
     </a>
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/ball_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุนิสา และเพื่อนอีก 190,890 คน</span> <span class="description">ได้ถูกใจสถานะของคุณ</span>
         </div>
         <div class="section"></div>
         <div class="col s10 m10 l10">
           <i class="fa fa-heart fa-lg"></i><span class="time"> 51 นาทีที่แล้ว</span>
         </div>
       </div>
     </a>
   </div>




 </div>
 <div id="friendNotify" class="col s8 offset-s1 nt-collection">
   <div class="collection">
    @foreach($accounts as $key=>$person)
 <div href="{{$key}}" class="collection-item">
       <div class="row">

         <div class="col col-thumbnail">
           <img class="who circle" src="img/mim_tn.jpg">
         </div>
         <div class="col s10 m10 l10" style="margin-top:1em">
           <span style="color:#26a69a">{{$person->first_name.' '.$person->last_name}}</span> <span class="description">ได้ส่งคำขอเป็นเพื่อน</span>
            <a href="{{url('acceptFriend/'.$person->id)}}"class="btn waves-effects  waves-light teal lighten-2 right "  >ยอมรับคำขอ</a><br/><br/>
            <a href="{{url('deleteFriendReq/'.$person->username)}}"class="btn waves-effects waves-light  red lighten-1 right" style="margin-right:1em" >ลบคำขอ</a>
         </div>
         <div class="section"></div>
         <div class="col s1 m10 l10">
           <i class="material-icons left">person_add</i> <span class="time"> 7 ชั่วโมงที่แล้ว</span>

         </div>
       </div>
       </div>

     @endforeach
   </div>
 </div>
 <div id="chatNotify" class="col s8 offset-s2 nt-collection">
   <div class="collection">
     <a href="AllChat.html" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/mim_tn.jpg">
         </div>
         <div id="noti3" class="col s9 m10 l10">
           <span>สุนิสา ปานหิบ</span> <span class="description"> ส่ง 1 ข้อความถึงคุณ</span>
         </div>
         <div class="section"></div>
         <div class="col s1 m10 l10">
           <i class="material-icons left">chat_bubble</i> <span class="time"> 3 นาทีที่แล้ว</span>
         </div>
       </div>
     </a>
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/ball_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุธีร์ แก้วตาหวาน</span> <span class="description">ส่ง 88 ข้อความถึงคุณ</span>
         </div>
         <div class="section"></div>
         <div class="col s1 m10 l10">
           <i class="material-icons left">chat_bubble</i><span class="time"> 4 ชั่วโมงที่แล้ว</span>
         </div>
       </div>
     </a>
   </div>
 </div>
 <div id="eventNotify" class="col s8 offset-s3 nt-collection">
   <div class="collection">
     <a href="#!" class="collection-item">
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
 <div id="statusNotify" class="col s8 offset-s4 nt-collection">
   <div class="collection">
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/ball_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุธีร์ แก้วตาหวาน และเพื่อนอีก 7,890 คน</span> <span class="description">ได้ถูกใจสถานะของคุณ</span>
         </div>
         <div class="section"></div>
         <div class="col s10 m10 l10">
           <i class="fa fa-heart fa-lg"></i><span class="time"> 32 นาทีที่แล้ว</span>
         </div>
       </div>
     </a>
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/mim_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุนิสา ปานหิบ และเพื่อนอีก 3 คน</span> <span class="description">ได้แสดงความคิดบนสถานะของคุณ</span>
         </div>
         <div class="section"></div>
         <div class="col s10 m10 l10">
           <i class="material-icons left">insert_comment</i> <span class="time"> 44 นาทีที่แล้ว</span>
         </div>
       </div>
     </a>
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/ball_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุนิสา และเพื่อนอีก 190,890 คน</span> <span class="description">ได้ถูกใจสถานะของคุณ</span>
         </div>
         <div class="section"></div>
         <div class="col s10 m10 l10">
           <i class="material-icons left">star</i><span class="time"> 51 นาทีที่แล้ว</span>
         </div>
       </div>
     </a>
   </div>
 </div>
</div>

</div>
@stop
