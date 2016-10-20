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
      doneLabel: "เสร็จ",
        steps: [
        {
            element: '#chat1',
            intro: "ในหน้านี้คุณสามารถ <b>ส่งข้อความ</b> หาเพื่อนคุณได้",
            position: 'left'
        },
        {
            element: '#chat2',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        {
            element: '#friendList',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'right'
        },
        {
            element: '#chat4',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        {
            element: '#recentMessage',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'right'
        },
        {
            element: '#chat5',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'top'
        },
        {
            element: '#sendmsg',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'left'
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
               <span><i class="fa fa-comment left i-color" aria-hidden="true"></i>{{ $friendAccount->first_name}} {{$friendAccount->last_name}}</span>
           </div>
         </div>
       </div> <!-- end chat-header -->
       <input type="hidden" id="userId1" value="{{$friendAccount->id}}">
        <input type="hidden" id="userId2" value="{{$myAccount->id}}">
        <input type="hidden" id="username1" value="{{$friendAccount->first_name}}">
         <input type="hidden" id="username2" value="{{$myAccount->first_name}}">
       <div class="chat-history">
         <ul id="chatul">
           <!--
           <li class="clearfix">
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
           </li>

-->
         </ul>

       </div> <!-- end chat-history -->

       <div id="chat5" class="chat-message clearfix" style="">
         <div  class="input-field col s12">

           <textarea id="chat-text" class="materialize-textarea"></textarea>
           <label for="chat-text">เขียนข้อความของคุณที่นี่</label>
         </div>

         <a id='sendmsg' class="waves-effect waves-light btn sendmsg-btn"><i class="material-icons right">send</i> ส่งข้อความ</a></div></div>
       </div>
       <!--End Chat-->

       <!--Sticker List-->

       <!--End Sticker List-->
     </div>
     <script type="text/javascript" src="{{ URL::asset('js/firebase.js')}}"></script>
     <script type="text/javascript">
     $(document).ready(function(){
  $('ul.tabs').tabs();
});
     </script>
     <script>
     $(function () {
         var input = $('#chat-text');
         var btn = $('#sendmsg');
         var ul = $('#chatul');
         var id1 = $('#userId1');
         var id2 = $('#userId2');
         var firebaseUrl = 'https://boompow-8ed97.firebaseio.com/';
         var uid = parseInt(id1.val());
         var uid2 = parseInt(id2.val());
         if (uid > uid2){
             var uid3 = uid;
             uid = uid2;
             uid2 = uid3;
         }

        var Connection = new Firebase(firebaseUrl).child(uid+'chatwith'+uid2);
        queryChat();




        btn.click(function(){
              var text = input.val();
              var sender = $('#username2').val();
              var reciever = $('#username1').val();
              input.val('');
             var msg = {
                sender : sender ,
                message : text,
                reciever : reciever,
                time : 'send at '+new Date()
             };
             Connection.push(msg);

        });
        function queryChat(){
            Connection.on('value' , function(snapshot){
                var msg = snapshot.val();
                console.log(msg);
               ul.empty();
              $.each(msg , function(index , c){
                    addToChatBox(c);
                });
           });

        }

           function addToChatBox(text) {
             var li ='';
             var msg = text.sender;
             if(msg==($('#username1').val())){
               li = '<li><div class="message-data"><span class="message-data-name">'+text.sender+'</span>'+
                   '<span class="message-data-time">'+text.time+'</span>'+
                 '</div>'+
                 '<div class="message my-message">'+
                   '<p>'+text.message+'</p>'+
                 '</div>'+
               '</li>' ;

          }else{
            li = '<li class="clearfix">'+
              '<div class="message-data align-right">'+
                '<span class="message-data-time" >'+text.time+'</span> &nbsp; &nbsp;'+
                '<span class="message-data-name" >'+text.sender+'</span>'+

              '</div>'+
              '<div class="message other-message float-right">'+
                '<p>'+text.message+'</p>'+
              '</div>'+
            '</li>' ;
          }
            ul.append(li);
}

      });

     </script>
     @stop
