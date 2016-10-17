@extends('site.layout')
@section('maincontent')
<meta charset="utf-8">
<div class="container chat-container" style="width: 90%;"> <!--Chat is extending from css/chat.css-->

 <div class="row">
   <!--People List-->

   <div class="col m4 l3 ">
     <div class="row chatOption">
       <div class="col s12" style="background: #eceff1;">
         <ul class="tabs" style="overflow: hidden;">
        <li class="tab col s3"><a href="#friendList">เพื่อนของฉัน</a></li>
        <li class="tab col s3"><a class="active" href="#recentMessage">ข้อความใหม่ <span class="new badge b-space">4</span></a></li>
        </ul>

       </div>
       <div id="friendList" class="col s12">
         <div class="people-list" id="people-list">
           <ul class="list" style="margin-top: 1px">
             @foreach($account1 as $acc)
             <a href="#">
               <li class="clearfix">
                 <img class="circle" src="img/mim_tn.jpg"/>
                 <div class="about">
                  <a href="{{url('chatHistory/'.$acc->id)}}"> <div class="name">{{$acc->first_name}}  {{$acc->last_name}}</div>
                 </div>
               </li>
             </a>
               @endforeach
               @foreach($account2 as $acc)
                 <li class="clearfix">
                   <img class="circle" src="img/mim_tn.jpg"/>
                   <div class="about">
                     <a href="{{url('chatHistory/'.$acc->id)}}"><div class="name">{{$acc->first_name}}  {{$acc->last_name}}</div></a>
                   </div>
                 </li>
                 @endforeach
           </ul>
         </div>
       </div>

       <div id="recentMessage" class="tab col s12">
         <div class="people-list" id="people-list">
           <ul class="list" style="margin-top: 1px">

               <li class="clearfix">
                 <img class="circle" src="img/mim_tn.jpg"/>
                 <div class="about">
                   <div class="name">สุนิสา ปานหิบ (4)</div>

                 </div>
               </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">สุธีร์ แก้วตาหวาน (88)</div>

               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่สอง</div>

               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่สาม</div>

               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่สี่</div>

               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่ห้า</div>

               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่หก</div>

               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่เจ็ด</div>

               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่แปด</div>

               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่เก้า</div>

               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่สิบ</div>

               </div>
             </li>
           </ul>
         </div>
       </div>


     </div>
   </div>
   <!--End People List-->

   <!--Chat-->
   <div class="col m8 l9">
     <div class="chat">
       <div class="chat-header clearfix white">
         <div class="chat-about">
           <div class="chat-with">
               <span><i class="fa fa-comment left i-color" aria-hidden="true"></i>สุนิสา ปานหิบ</span>
           </div>
         </div>
       </div> <!-- end chat-header -->

       <div class="chat-history">
         <ul>
           <!--<li class="clearfix">
             <div class="message-data align-right">
               <span class="message-data-time" >วันนี้ 10:10น.</span> &nbsp; &nbsp;
               <span class="message-data-name" >พรทิพย์</span>

             </div>
             <div class="message other-message float-right">
               <p>สุนิสา ไปกินซูชิกันมั้ย? ช่วงนี้ซื้อ 1 ฟรี 1 นะ ฉันกะจะกินเพิ่มน้ำหนักซะหน่อย ไปด้วยกันนะ</p>
             </div>
           </li>

           <li>
             <div class="message-data">
               <span class="message-data-name">สุนิสา</span>
               <span class="message-data-time">วันนี้ 10:12น.</span>
             </div>
             <div class="message my-message">
               <p>โปรดรักษากำหนดนี้เป็นความลับ</p>
             </div>
           </li>

           <li class="clearfix">
             <div class="message-data align-right">
               <span class="message-data-time" >วันนี้ 10:14น.</span> &nbsp; &nbsp;
               <span class="message-data-name" >พรทิพย์</span>

             </div>
             <div class="message other-message float-right">
               <p>สังคมหรือประเทศที่มีประชากรอายุ60ปีขึ้นไป มากกว่าร้อยละ20 ของประชากรทั้งประเทศหรือมีประชากรอายุตั้งแต่ 65 ปี</p>
             </div>
           </li>

           <li>
             <div class="message-data">
               <span class="message-data-name">สุนิสา</span>
               <span class="message-data-time">วันนี้ 10:20น.</span>
             </div>
             <div class="message my-message">
               <p>แต่ละประเทศจะเข้าสู่สังคมผู้สูงอายุแตกต่างกันไปตามสภาพแวดล้อมของแต่ละประเทศ เช่น ความเจริญเติบโตทางเศรษฐกิจ การพัฒนาทางด้านการแพทย์ การโภชนาอาหาร</p>
             </div>
           </li>-->


         </ul>

       </div> <!-- end chat-history -->

       <div class="chat-message clearfix" style="">
         <div class="input-field col s12">

           <textarea id="textarea1" class="materialize-textarea"></textarea>
           <label for="textarea1">เขียนข้อความของคุณที่นี่</label>
         </div>

         <a class="waves-effect waves-light btn sendmsg-btn"><i class="material-icons right">send</i> ส่งข้อความ</a></div></div>
       </div>
       <!--End Chat-->

       <!--Sticker List-->

       <!--End Sticker List-->
     </div>

     <script type="text/javascript">
     $(document).ready(function(){
  $('ul.tabs').tabs();
});
     </script>
     @stop
