@extends('site.layout')
@section('maincontent')
<script type="text/javascript">
  function message() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#chat1',
            intro: "ในหน้านี้คุณสามารถ <b>ส่งข้อความ</b> หาเพื่อนคุณได้",
            position: 'left'
        },
        {
            element: '#chat2',
            intro: "ในส่วนนี้จะแสดง <b>รายชื่อเพื่อนของคุณ</b> ทั้งหมด",
            position: 'bottom'
        },
        {
            element: '#friendList',
            intro: "<b>รายชื่อเพื่อนทั้งหมด</b> ที่คุณมี",
            position: 'right'
        },
        {
            element: '#chat4',
            intro: "ในส่วนนี้จะแสดง <b>แจ้งเตือนข้อความใหม่</b> ที่เพื่อนส่งมาให้คุณ",
            position: 'bottom'
        },
        {
            element: '#recentMessage',
            intro: "รายชื่อเพื่อนที่ส่ง <b>ข้อความใหม่</b> มาหาคุณ",
            position: 'right'
        },
        {
            element: '#chat5',
            intro: "คลิกที่รายชื่อเพื่อนของคุณเพื่อเริ่มต้น <b>ส่งข้อความ</b> สนทนา",
            position: 'top'
        },
        
        ]
    });

  intro.onchange(function(targetElement) {
        if($(targetElement).attr("id") == $('#chat2').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'friendList');
        }
        if($(targetElement).attr("id") == $('#chat4').attr('id')) {
           $('ul.tabs').tabs('select_tab', 'recentMessage');
        }

    });
  intro.start()
}

if((RegExp('msgstart', 'gi').test(window.location.search))){
    
   setTimeout( "message()", 1500);
}

</script>
<meta charset="utf-8">
<div class="container chat-container" style="width: 90%;"> <!--Chat is extending from css/chat.css-->

 <div class="row">
   <!--People List-->

   <div class="col m4 l3 ">
     <div class="row chatOption">
       <div class="col s12" style="background: #eceff1;">
         <ul class="tabs" style="overflow: hidden;">
        <li id="chat2" class="tab col s3"><a href="#friendList">เพื่อนของฉัน</a></li>
        <li id="chat4" class="tab col s3"><a class="active" href="#recentMessage">ข้อความใหม่ <span class="new badge b-space">4</span></a></li>
        </ul>

       </div>
       <div id="friendList" class="col s12">
         <div class="people-list" id="people-list">
           <ul class="list" style="margin-top: 1px">
             @foreach($account1 as $acc)
             <a href="#">
               <li class="clearfix">
                 <img class="circle" src="{{url('img/uploads/avatars/'.$acc->avatar)}}"/>
                 <div class="about">
                  <a href="{{url('chatHistory/'.$acc->id)}}"> <div class="name">{{$acc->first_name}}  {{$acc->last_name}}</div>
                 </div>
               </li>
             </a>
               @endforeach
               @foreach($account2 as $acc)
                 <li class="clearfix">
                   <img class="circle" src="{{url('img/uploads/avatars/'.$acc->avatar)}}"/>
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
                 <!--<img class="circle" src="img/mim_tn.jpg"/>
                 <div class="about">
                   <div class="name">สุนิสา ปานหิบ (4)</div>

                 </div>-->
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
