@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%; margin-top: 160px"> <!--Chat is extending from css/chat.css-->

 <div class="row">
   <!--People List-->

   <div class="col m3 l3 ">
     <div class="row chatOption">
       <div class="col s12">
         <ul class="tabs tab-set" >
           <li class="tab col s3"><a class="active" href="#recentMessage">ล่าสุด</a></li>
           <li class="tab col s3"><a class="" href="#friendList">เพื่อนๆ</a></li>
           <li class="tab col s3"><a class="" href="#groupList">กลุ่ม</a></li>
         </ul>
       </div>
       <div id="recentMessage" class="col s12">
         <div class="people-list" id="people-list" style="width: 270px">
           <ul class="list" style="margin-top: 1px">
             <a href="">
               <li class="clearfix">
                 <img class="circle" src="img/mim_tn.jpg"/>
                 <div class="about">
                   <div class="name">สุนิสา ปานหิบ (4)</div>
                   <div class="status">
                     <i class="fa fa-circle online"></i> ออนไลน์
                   </div>
                 </div>
               </li>
             </a>
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
       <div id="friendList" class="col s12">
         <div class="people-list" id="people-list" style="width: 270px">
           <ul class="list" style="margin-top: 1px">
             <a href="">
               <li class="clearfix">
                 <img class="circle" src="img/mim_tn.jpg"/>
                 <div class="about">
                   <div class="name">สุนิสา ปานหิบ</div>
                   <div class="status">
                     <i class="fa fa-circle online"></i> ออนไลน์
                   </div>
                 </div>
               </li>
             </a>
             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">กล้วย ใบที่หนึ่ง</div>
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
       <div id="groupList" class="col s12">

        <ul class="collapsible" data-collapsible="accordion" style="box-shadow: none;">
         <li>
           <div class="collapsible-header white-text " style="background-color: #EE6E74"><i class="fa fa-plus" aria-hidden="true"></i>สร้างกลุ่มใหม่</div>
           <div class="collapsible-body" style="height: auto;">
           <form action="#">
             <table>
               <tbody>
                 <tr>
                   <td><div class="input-field col s12">
                     <i class="fa fa-users prefix" aria-hidden="true"></i>
                     <input id="gname" type="text" class="validate">
                     <label class="active" for="gname">ชื่อกลุ่ม</label>
                   </div></td>
                 </tr>
                 <tr>
                   <td><div class="input-field col s12">
                     <select class="icons">
                       <option value="" data-icon="img/sea.jpg" class="left circle">ทะเล</option>
                       <option value="" data-icon="img/forest.jpg" class="left circle">ป่าเขา</option>
                       <option value="" data-icon="img/wf.jpg" class="left circle">น้ำตก</option>
                     </select>
                     <label>เลือกรูปประจำกลุ่ม</label>
                   </div></td>
                 </tr>

                 <tr>
                   <td><div class="input-field col s12">
                     <i class="fa fa-search prefix" aria-hidden="true"></i>
                     <input id="finds" type="search"  style="padding-left: 0px;">
                     <label class="active" for="finds">ค้นหาเพื่อนที่นี่</label>
                   </div></td>
                 </tr>
                 <tr>
                   <td><div class="input-field col s12">
                     <select multiple class="icons">
                       <option value="" disabled selected>เลือกเพื่อน</option>
                       <option value="1" data-icon="img/pic2.jpg" class="left circle">สมัคร ยังมีรักแท้</option>
                       <option value="2" data-icon="img/pic4.jpg" class="left circle">สมัย สมร</option>
                       <option value="3" data-icon="img/pic5.jpg" class="left circle">ละม้าย ซ่า</option>
                     </select>
                     <label>เลือกเพื่อน</label>
                   </div></td>
                 </tr>
                 <tr>
                   <td><a class="waves-effect waves-light btn right">ตกลง</a></td>
                 </tr>
               </tbody>
             </table>
             </form>
           </div>
         </li>
       </ul>





         <div class="people-list" id="people-list" style="width: 270px">

           <ul class="list" style="margin-top: 1px">

             <li class="clearfix" style="margin-top: 10px">
               <img class="circle" src="img/mim_tn.jpg"/>
               <div class="about">
                 <div class="name">รักษ์โลก</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>
             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">นั่งไปวันๆ</div>
                 <div class="status">
                   <i class="fa fa-circle online"></i> ออนไลน์
                 </div>
               </div>
             </li>

             <li class="clearfix">
               <img class="circle" src="img/ball_tn.jpg"/>
               <div class="about">
                 <div class="name">ธรรมมะใสๆ</div>
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
   <div class="col m5 l6">
     <div class="chat">
       <div class="chat-header clearfix grey lighten-4">
         <img src="img/mim_tn.jpg" class="circle" style="width: 50px;" />

         <div class="chat-about">
           <div class="chat-with" style="color: #424242;">สุนิสา ปานหิบ</div>
           <div class="chat-num-messages" style="color: #616161;">ทั้งหมด 896 ข้อความ</div>
         </div>
         <i class="fa fa-star" style="color: #f57f17;"></i>
       </div> <!-- end chat-header -->

       <div class="chat-history">
         <ul>
           <li class="clearfix">
             <div class="message-data align-right">
               <span class="message-data-time" >วันนี้ 10:10น.</span> &nbsp; &nbsp;
               <span class="message-data-name" >พรทิพย์</span> <i class="fa fa-circle me"></i>

             </div>
             <div class="message other-message float-right">
               สุนิสา ไปกินซูชิกันมั้ย? ช่วงนี้ซื้อ 1 ฟรี 1 นะ ฉันกะจะกินเพิ่มน้ำหนักซะหน่อย ไปด้วยกันนะ
             </div>
           </li>

           <li>
             <div class="message-data">
               <span class="message-data-name"><i class="fa fa-circle online"></i> สุนิสา</span>
               <span class="message-data-time">วันนี้ 10:12น.</span>
             </div>
             <div class="message my-message">
               โปรดรักษากำหนดนี้เป็นความลับ
             </div>
           </li>

           <li class="clearfix">
             <div class="message-data align-right">
               <span class="message-data-time" >วันนี้ 10:14น.</span> &nbsp; &nbsp;
               <span class="message-data-name" >พรทิพย์</span> <i class="fa fa-circle me"></i>

             </div>
             <div class="message other-message float-right">
               สังคมหรือประเทศที่มีประชากรอายุ60ปีขึ้นไป มากกว่าร้อยละ20 ของประชากรทั้งประเทศหรือมีประชากรอายุตั้งแต่ 65 ปี
             </div>
           </li>

           <li>
             <div class="message-data">
               <span class="message-data-name"><i class="fa fa-circle online"></i> สุนิสา</span>
               <span class="message-data-time">วันนี้ 10:20น.</span>
             </div>
             <div class="message my-message">
               แต่ละประเทศจะเข้าสู่สังคมผู้สูงอายุแตกต่างกันไปตามสภาพแวดล้อมของแต่ละประเทศ เช่น ความเจริญเติบโตทางเศรษฐกิจ การพัฒนาทางด้านการแพทย์ การโภชนาอาหาร
             </div>
           </li>

           <li>
             <div class="message-data">
               <span class="message-data-name"><i class="fa fa-circle online"></i> สุนิสา</span>
               <span class="message-data-time">วันนี้ 10:31น.</span>
             </div>
             <i class="fa fa-circle online"></i>
             <i class="fa fa-circle online" style="color: #AED2A6"></i>
             <i class="fa fa-circle online" style="color:#DAE9DA"></i>
           </li>
         </ul>

       </div> <!-- end chat-history -->

       <div class="chat-message clearfix orange lighten-3" style="">
         <div class="input-field col s12">
           <i class="fa fa-comment prefix" aria-hidden="true"></i>
           <textarea id="textarea1" class="materialize-textarea"></textarea>
           <label for="textarea1">ส่งข้อความ</label>
         </div>

         <a style="left: 66.5%" class="waves-effect waves-light btn"><i class="material-icons right">send</i> ส่งข้อความ</a></div></div>
       </div>
       <!--End Chat-->

       <!--Sticker List-->
       <div class="col m3 l3">
         <a class="waves-effect waves-light btn" style="margin-bottom: 10px;width: 100%;"><i class="fa fa-cog" aria-hidden="true"></i>  ตั้งค่า</a>
         <ul class="collapsible" data-collapsible="accordion">
           <li>
             <div class="collapsible-header active"><i class="fa fa-smile-o" aria-hidden="true"></i>หมีพาเขิน</div>
             <div class="collapsible-body"><p><img style="width: 100%" src="img/stickers_bear.jpg"></p></div>
           </li>
           <li>
             <div class="collapsible-header"><i class="fa fa-smile-o" aria-hidden="true"></i>สาวแก่แดด</div>
             <div class="collapsible-body"><p><img style="width: 100%" src="img/stickers_bitch.jpg"></p></div>
           </li>
           <li>
             <div class="collapsible-header"><i class="fa fa-smile-o" aria-hidden="true"></i>สาวน้อย</div>
             <div class="collapsible-body"><p><img style="width: 100%" src="img/stickers_woman.jpg"></p></div>
           </li>
         </ul>

       </div>
       <!--End Sticker List-->
     </div>
     @stop
