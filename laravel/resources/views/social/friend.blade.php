@extends('site.layout')
@section('maincontent')
<div class="container" style="width:100%; margin-top: 150px;min-height: 600px;">
  <div class="row">
   <div class="col s12">
     <ul class="tabs">
       <li class="tab col s3"><a class="active" href="#follower"><span>เพื่อนทั้งหมด <span class="friend badge">7</span></a></li>
       <li class="tab col s3"><a href="#following">คำขอเป็นเพื่อน <span class="friend badge">6</span></a></li>
     </ul>
   </div>

 </div>
 <div class="row" id="follower">
   <div class="col s12 m4 l4">
 <div class="card white">
   <div class="card-content white-text">
     <span>
       <img class="circle following" src="img/user.jpg">
     </span>
    <a href=""> <span class="card-title align-friend-name">สุนิสา  ปานหิบ</span></a>
     <span class="follow-status">ไบโอ</span>
   </div>
   <div class="card-action" align="center">
     <a class="waves-effect waves-light btn-large sent-to-friend"><span>ส่งข้อความถึง</span></a>
     <a class="waves-effect waves-light btn-large "><span>เพื่อน</span></a>
   </div>
 </div>
</div>

<div class="col s12 m4 l4">
 <div class="card white">
   <div class="card-content white-text">
     <span>
       <img class="circle following" src="img/pic.jpg">
     </span>
       <a href=""> <span class="card-title align-friend-name">ญาญ่า สาหร่าย</span></a>

     <span class="follow-status">ไบโอ</span>
   </div>
   <div class="card-action" align="center">
     <a class="waves-effect waves-light btn-large sent-to-friend"><span>ส่งข้อความถึง</span></a>
     <a class="waves-effect waves-light btn-large "><span>เพื่อน</span></a>
   </div>
 </div>
</div>

<div class="col s12 m4 l4">
 <div class="card white">
   <div class="card-content white-text">
     <span>
       <img class="circle following" src="img/pic3.jpg">
     </span>
       <a href=""> <span class="card-title align-friend-name">ญาญ่า สาหร่าย</span></a>
     <span class="follow-status">ไบโอ</span>
   </div>
   <div class="card-action" align="center">
     <a class="waves-effect waves-light btn-large sent-to-friend"><span>ส่งข้อความถึง</span></a>
     <a class="waves-effect waves-light btn-large "><span>เพื่อน</span></a>
   </div>
 </div>
</div>
</div>




<!-- Following Section -->


<div class="row" id="following">
<div class="col s12 m4 l4">
 <div class="card white">
   <div class="card-content white-text">
     <span>
       <img class="circle following" src="img/mim_tn.jpg">
     </span>
    <a href="">    <span class="card-title align-friend-name">สุนิสา  ปานหิบ</span></a>
     <span class="follow-status">ไบโอ</span>
   </div>
   <div class="card-action" align="center">
     <a class="waves-effect waves-light btn-large sent-to-friend"><span>ส่งข้อความถึง</span></a>
     <a class="waves-effect waves-light btn-large "><span>ยอมรับคำขอ</span></a>
   </div>
 </div>
</div>

<div class="col s12 m4 l4">
 <div class="card white">
   <div class="card-content white-text">
     <span>
       <img class="circle following" src="img/friends/ner_tn.jpg">
     </span>
       <a href=""> <span class="card-title align-friend-name">สุจี  สุขสกาวราวดีราวตากผ้าราวกับว่ากำลังจะดี</span></a>
     <span class="follow-status">ไบโอ</span>
   </div>
   <div class="card-action" align="center">
     <a class="waves-effect waves-light btn-large sent-to-friend"><span>ส่งข้อความถึง</span></a>
     <a class="waves-effect waves-light btn-large "><span>ยอมรับคำขอ</span></a>
   </div>
 </div>
</div>
<div class="col s12 m4 l4">
 <div class="card white">
   <div class="card-content white-text">
     <span>
       <img class="circle following" src="img/friends/ner_tn.jpg">
     </span>
       <a href=""> <span class="card-title align-friend-name">สุจี  สุขสกาวราวดีราวตากผ้าราวกับว่ากำลังจะดี</span></a>
     <span class="follow-status">ไบโอ</span>
   </div>
   <div class="card-action" align="center">
     <a class="waves-effect waves-light btn-large sent-to-friend"><span>ส่งข้อความถึง</span></a>
     <a class="waves-effect waves-light btn-large "><span>ยอมรับคำขอ</span></a>
   </div>
 </div>
</div>


</div>
</div>




@stop
