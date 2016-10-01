@extends('site.layout')
@section('maincontent')
<meta charset="utf-8">
<div class="container chat-container" style="width: 90%;"> <!--Chat is extending from css/chat.css-->

 <div class="row">
   <!--People List-->

   <div class="col m4 l3 ">
     <div class="row chatOption">
       <div class="col s12" style="background: #eceff1;">

         <ul class="tabs tab-set" >
           <li class="tab col s3"><a class="active" href="#friendList">เพื่อนของฉัน</a></li>
           <li class="tab col s3"><a class="" href="#recentMessage">ข้อความใหม่<span class="new badge b-space">4</span></a></li>
         </ul>

       </div>
       <div id="friendList" class="col s12">
         <div class="people-list" id="people-list">
           <ul class="list" style="margin-top: 1px">

               <li class="clearfix">
                 <img class="circle" src="img/mim_tn.jpg"/>
                 <div class="about">
                   <div class="name">สุนิสา ปานหิบ</div>
                   <div class="status">
                     <i class="fa fa-circle online"></i> ออนไลน์
                   </div>
                 </div>
               </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">สุธีร์ แก้วตาหวาน</div>
                 <div class="status">
                   <i class="fa fa-circle offline"></i> ออฟไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่สอง</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่สาม</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่สี่</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่ห้า</div>
                 <div class="status">
                   <i class="fa fa-circle offline"></i> ออฟไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่หก</div>
                 <div class="status">
                   <i class="fa fa-circle offline"></i> ออฟไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่เจ็ด</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่แปด</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่เก้า</div>
                 <div class="status">
                   <i class="fa fa-circle offline"></i> ออฟไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่สิบ</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>
           </ul>
         </div>
       </div>

       <div id="recentMessage" class="col s12">
         <div class="people-list" id="people-list">
           <ul class="list" style="margin-top: 1px">

               <li class="clearfix">
                 <img class="circle" src="img/mim_tn.jpg"/>
                 <div class="about">
                   <div class="name">สุนิสา ปานหิบ (4)</div>
                   <div class="status">
                     <i class="fa fa-circle online"></i> ออนไลน์
                   </div>
                 </div>
               </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">สุธีร์ แก้วตาหวาน (88)</div>
                 <div class="status">
                   <i class="fa fa-circle offline"></i> ออฟไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่สอง</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่สาม</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่สี่</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่ห้า</div>
                 <div class="status">
                   <i class="fa fa-circle offline"></i> ออฟไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่หก</div>
                 <div class="status">
                   <i class="fa fa-circle offline"></i> ออฟไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่เจ็ด</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่แปด</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่เก้า</div>
                 <div class="status">
                   <i class="fa fa-circle offline"></i> ออฟไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่สิบ</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
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
         <ul id="chat-window">
           <li class="clearfix">
             <div class="message-data align-right">
               <span class="message-data-time" >วันนี้ 10:10น.</span> &nbsp; &nbsp;
               <span class="message-data-name" >{{Auth::user()->username}}</span> <i class="fa fa-circle me"></i>

             </div>
             <div class="message other-message float-right">
               <p>สุนิสา ไปกินซูชิกันมั้ย? ช่วงนี้ซื้อ 1 ฟรี 1 </p>
             </div>
           </li>

           <li class="clearfix">
             <div class="message-data">
               <span class="message-data-name"><i class="fa fa-circle online"></i> สุนิสา</span>
               <span class="message-data-time">วันนี้ 10:12น.</span>
             </div>
             <div class="message my-message">
               <p>โปรดรักษากำหนดนี้เป็นความลับ</p>
             </div>
           </li>

           <li class="clearfix">
             <div class="message-data align-right">
               <span class="message-data-time" >วันนี้ 10:14น.</span> &nbsp; &nbsp;
               <span class="message-data-name" >{{Auth::user()->username}}</span> <i class="fa fa-circle me"></i>

             </div>
             <div class="message other-message float-right">
               <p>สังคมหรือประเทศที่มีประชากรอายุ60ปีขึ้นไป มากกว่าร้อยละ20 ของประชากรทั้งประเทศหรือมีประชากรอายุตั้งแต่ 65 ปี</p>
             </div>
           </li>

           <li>
             <div class="message-data">
               <span class="message-data-name"><i class="fa fa-circle online"></i> สุนิสา</span>
               <span class="message-data-time">วันนี้ 10:20น.</span>
             </div>
             <div class="message my-message">
               <p>แต่ละประเทศจะเข้าสู่สังคมผู้สูงอายุแตกต่างกันไปตามสภาพแวดล้อมของแต่ละประเทศ เช่น ความเจริญเติบโตทางเศรษฐกิจ การพัฒนาทางด้านการแพทย์ การโภชนาอาหาร</p>
             </div>
           </li>


         </ul>

       </div> <!-- end chat-history -->

       <div class="chat-message" style="">
           <form action="{{url('sendMessage')}}" method="POST">
             {{csrf_field()}}
             <div class="input-field col s12">
             <input type="text" id="text" name="text">
             <label for="text">เขียนข้อความของคุณที่นี่</label>
             <input type="submit" name="send" value="ส่งข้อความ">
           </div>
           <!--<a class="waves-effect waves-light btn sendmsg-btn" type="submit"><i class="material-icons right">send</i> ส่งข้อความ</a></div></div>-->

           </form>
       </div>
       <!--End Chat-->

       <!--Sticker List-->

       <!--End Sticker List-->
     </div>
     <script type="text/javascript">
         function sendMessage(){
           var text = $('#text').val();
           if(text.length > 0)
           {
             $.ajax({
               type: 'POST',
               url: 'sendMessage',
               data: {text: text},
               success: function(data){
                 $('ul#chat-window').append('<li><div style="text-align: right">'+text+'</div><li>');
                 $('#text').val('');
               }
             });
           }
         }

         function retrieveChatMessages()
         {
           $.ajax({
             type: 'GET',
             url: 'retrieveChatMessages',
             data: {text: text},
             success: function(data){
               if(data.length > 0)
                $('ul#chat-window').append('<li class="clearfix"><div style="text-align: right">'+text+'</div><li>');
             }
           });
         }
     </script>
     @stop
