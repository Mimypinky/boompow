@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%; margin-top: 160px;min-height: 600px;">
  <div class="row">
 <div class="col s12">
   <ul class="tabs" style="overflow: hidden;">
     <li class="tab col s3"><a class="active" href="#allNotify"><span>แจ้งเตือนทั้งหมด <span class="new badge">7</span></a></li>
     <li class="tab col s3"><a href="#friendNotify">เพื่อน <span class="new badge">1</span></a></li>
     <li class="tab col s3"><a href="#chatNotify">ข้อความ <span class="new badge">2</span></a></li>
     <li class="tab col s3"><a href="#eventNotify">กิจกรรม <span class="new badge">1</span></a></li>
     <li class="tab col s3"><a href="#statusNotify">สถานะ <span class="new badge">3</span></a></li>
   </ul>
 </div>


 <div id="allNotify" class="col s12">
   <div class="collection">
     <a href="AllChat.html" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/mim_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุนิสา ปานหิบ</span> <span class="description"> ส่ง 1 ข้อความถึงคุณ</span>
         </div>
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
           <span>สุธีร์ แก้วตาหวาน และเพื่อนอีก 7,890 คน</span> <span class="description">ได้ถูกใจสถานะของคุณ</span>
         </div>
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
         <div class="col s1 m10 l10">
           <i class="material-icons left">chat_bubble</i><span class="time"> 4 ชั่วโมงที่แล้ว</span>
         </div>
       </div>
     </a>
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/mim_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุนิสา, สมมะเขือ และเพื่อนอีก 9 คน</span> <span class="description">ได้ติดตามคุณแล้ว</span>
         </div>
         <div class="col s1 m10 l10">
           <i class="material-icons left">person_add</i> <span class="time"> 7 ชั่วโมงที่แล้ว</span>
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
         <div class="col s10 m10 l10">
           <i class="fa fa-heart fa-lg"></i><span class="time"> 51 นาทีที่แล้ว</span>
         </div>
       </div>
     </a>
   </div>




 </div>
 <div id="friendNotify" class="col s8 offset-s1">
   <div class="collection">
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/mim_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุนิสา, สมมะเขือ และเพื่อนอีก 9 คน</span> <span class="description">ได้ติดตามคุณแล้ว</span>
         </div>
         <div class="col s1 m10 l10">
           <i class="material-icons left">person_add</i> <span class="time"> 7 ชั่วโมงที่แล้ว</span>
         </div>
       </div>
     </a>

   </div>
 </div>
 <div id="chatNotify" class="col s8 offset-s2">
   <div class="collection">
     <a href="AllChat.html" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/mim_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุนิสา ปานหิบ</span> <span class="description"> ส่ง 1 ข้อความถึงคุณ</span>
         </div>
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
         <div class="col s1 m10 l10">
           <i class="material-icons left">chat_bubble</i><span class="time"> 4 ชั่วโมงที่แล้ว</span>
         </div>
       </div>
     </a>
   </div>
 </div>
 <div id="eventNotify" class="col s8 offset-s3">
   <div class="collection">
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/ball_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุธีร์ แก้วตาหวาน และ สุนิสา ปานหิบ</span> <span class="description">ได้เข้าร่วมกิจกรรมของคุณ</span>
         </div>
         <div class="col s10 m10 l10">
           <i class="material-icons left">insert_invitation</i><span class="time"> 56 นาทีที่แล้ว</span>
         </div>
       </div>
     </a>

   </div>
 </div>
 <div id="statusNotify" class="col s8 offset-s4">
   <div class="collection">
     <a href="#!" class="collection-item">
       <div class="row">
         <div class="col col-thumbnail">
           <img class="who circle" src="img/ball_tn.jpg">
         </div>
         <div class="col s9 m10 l10">
           <span>สุธีร์ แก้วตาหวาน และเพื่อนอีก 7,890 คน</span> <span class="description">ได้ถูกใจสถานะของคุณ</span>
         </div>
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
