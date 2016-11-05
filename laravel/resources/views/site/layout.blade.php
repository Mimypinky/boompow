<!DOCTYPE html>
<html>
  <head>
  <!--<meta name="viewport" content="width=device-width,initial-scale=1">-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('materialize/css/materialize.min.css')}}"  media="screen,projection"/>



    <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/mycss.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/newsfeed.css')}}">
  <!--  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/mycss2.css')}}">
-->

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/friend.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/secnav-scroll.css')}}">


  <!--  <link rel="stylesheet" type="text/css" href="{{url::asset('css/event.css')}}">-->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/chat-v2.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/notificationcss.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url::asset('css/profile-v2.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url::asset('css/cover-head.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url::asset('css/setting-profile.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/overlay-hover.css')}}">


    <!--Import bootstrap.css

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--materialize javaScript-->

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!--script type="text/javascript" src="{{ URL::asset('jquery-cookie.js')}}"></script-->
    <script type="text/javascript" src="{{URL::asset('js/secnav-scroll.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('materialize/js/materialize.min.js')}}"></script>
    <!--<script type="text/javascript" src="{{ URL::asset('js/picker.date.js')}}"></script>-->
    <script type="text/javascript" src="{{ URL::asset('js/intro.js')}}"></script>
<<<<<<< HEAD

=======
    <script type="text/javascript" src="{{ URL::asset('js/moment-with-locales.js')}}"></script>
>>>>>>> 340a36ccf41452fa5a4b7f5cca909d0d927c5896
    <script type="text/javascript" src="{{ URL::asset('js/resizetext.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/introjs.css')}}">


  <script type="text/javascript">
        $( document ).ready(function(){
         $(".button-collapse2").sideNav();
         $(".button-collapse").sideNav();
     });
     $(document).ready(function () {
         $('.modal-trigger').leanModal();
         $('#loginform').openModal();
         $('#loginform').closeModal();
     });
     $('.datepicker').pickadate({
       selectYears: true,
       selectMonths: true,
       labelMonthNext: 'เดือนถัดไป',
       labelMonthPrev: 'เดือนก่อนหน้า',
       labelMonthSelect: 'เลือกเดือน',
       labelYearSelect: 'เลือกปี',
       monthsFull: [ 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม' ],
       monthsShort: [ 'ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.' ],
       weekdaysFull: [ 'วันอาทิตย์', 'วันจันทร์', 'วันอังคาร', 'วันพุธ', 'วันพฤหัสบดี', 'วันศุกร์', 'วันเสาร์' ],
       weekdaysShort: [ 'อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.' ],
       weekdaysLetter: [ 'อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.' ],
       today: 'วันนี้',
       clear: 'ล้าง',
       close: 'ปิด',
       format: 'dddd dd mmmm yyyy',
       formatSubmit: 'yyyy-mm-dd',
       hiddenName: true,
       min: [1930,1,01],
       max: [2000,06,06],
       selectYears: 65,
     });
     $(document).ready(function() {
       $('select').material_select();
     });
   function goBack() {
       window.history.back();
   }

   function beginerGuest() {
    var intro = introJs();
    /*intro.setOption('doneLabel', 'หน้าต่อไป').start().oncomplete(function() {
          window.location.href = 'register';
        });*/
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#beginer1',
            intro: "คุณสามารถเรียกดูใช้ <b>ผู้ช่วย</b> เพื่อแนะนำการใช้งานเว็บไซต์ให้กับคุณได้ที่ปุ่มนี้",
            position: 'bottom'
        },
        {
            element: '#beginer2',
            intro: "คุณสามารถ <b>ค้นหา</b> เพื่อน หรือ บทความต่างๆได้ในส่วนนี้",
            position: 'bottom'
        },
        {
            element: '#beginer3',
            intro: "คุณสามารถ <b>คลิกที่โลโก้เว็บไซต์</b> เพื่อกลับสู่หน้าแรกได้เสมอ",
            position: 'bottom'
        },
        {
            element: '#register1',
            intro: "อยากพบปะผู้คนใหม่ๆใช่ไหม? คลิกที่นี้เพื่อ <b>สมัครสมาชิก</b> กับเรา!!",
            position: 'left'
        },
        {
            element: '#login1',
            intro: "สมัครสมาชิกแล้วใช่ไหม? ถึงเวลาพบปะผู้คนใหม่ๆแล้ว! คลิกที่นี้เพื่อทำการ <b>เข้าสู่ระบบ</b>",
            position: 'left'
        },
        {
            element: '#beginer6',
            intro: "ในส่วนนี้จะแสดงกลุ่มของ <b>บทความต่างๆ</b> ซึ่งคุณสามารถเลือกอ่านบทความต่างๆบนเว็บไซต์ได้ในส่วนนี้",
            position: 'bottom'
        },
        {
            element: '#beginer7',
            intro: "ตัวหนังสือเล็กเกินไปใช่ไหม? คุณสามารถเลือก <b>ปรับขนาดตัวอักษร</b> ได้ที่ส่วนนี้",
            position: 'left'
        },
        {
            element: '#beginer8',
            intro: "คุณสามารถ <b>ย้อนกลับไป</b> หน้าก่อน ได้ที่ส่วนนี้",
            position: 'right'
        },
        ]
    });


    /*intro.onafterchange(function(targetElement) {
      console.log(targetElement.id);
      switch (targetElement.id){
        case "beginer5":
            $('.introjs-helperLayer').css({height:'68px',top:'304px'})
            break;

      }
    });*/


    intro.start();
}

function beginerUser() {
    var intro = introJs();
    /*intro.setOption('doneLabel', 'หน้าต่อไป').start().oncomplete(function() {
          window.location.href = 'register';
        });*/
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#beginer1',
            intro: "คุณสามารถเรียกดูใช้ <b>ผู้ช่วย</b> เพื่อแนะนำการใช้งานเว็บไซต์ให้กับคุณได้ที่ปุ่มนี้",
            position: 'bottom'
        },
        {
            element: '#beginer2',
            intro: "คุณสามารถ <b>ค้นหา</b> เพื่อน หรือ บทความต่างๆได้ในส่วนนี้",
            position: 'bottom'
        },
        {
            element: '#beginer3',
            intro: "คุณสามารถ <b>คลิกที่โลโก้เว็บไซต์</b> เพื่อกลับสู่หน้าแรกได้เสมอ",
            position: 'bottom'
        },
        {
            element: '#beginerU4',
            intro: "คุณสามารถคลิกที่นี้เพื่อไปยัง <b>หน้าโปรไฟล์ของคุณ</b> หรือวางเมาส์ไว้ที่นี้เพื่อเลือกที่จะ <b>ตั้งค่าโปรไฟล์</b> หรือ <b>ออกจากระบบ</b> ได้ในส่วนนี้",
            position: 'left'
        },
        {
            element: '#beginerU5',
            intro: "เมื่อคุณกดที่ <b>สังคมของฉัน</b> จะแสดงเมนูทาง <b>ด้านซ้านมือ</b> ซึ่งคุณสามาถเลือกที่จะเข้าไปดูในส่วนของ <b>กระดานข่าว</b> <b>เพื่อน</b> <b>รายการโปรด</b> <b>กิจกรรม</b> และ <b>ข้อความ</b> ได้ในเมนูทางซ้าย",
            position: 'left'
        },
        {
            element: '#beginerU5',
            intro: "ตัวเลขจะแสดง <b>แจ้งเตือนทั้งหมด</b> ในสังคมของคุณที่เกิดขึ้นระหว่างคุณกับเพื่อนของคุณ",
            position: 'left'
        },

        {
            element: '#beginerU6',
            intro: "คุณสามารถคลิกที่ <b>ข้อความ</b> เพื่อเริ่มต้นส่งข้อความสนทนากับเพื่อนของคุณ",
            position: 'left'
        },
        {
            element: '#beginerU6',
            intro: "ตัวเลขจะแสดง <b>แจ้งเตือนข้อความทั้งหมด</b> ที่เพื่อนส่งหาคุณ",
            position: 'left'
        },
        {
            element: '#beginer6',
            intro: "ในส่วนนี้จะแสดงกลุ่มของ <b>บทความต่างๆ</b> ซึ่งคุณสามารถเลือกอ่านบทความต่างๆบนเว็บไซต์ได้ในส่วนนี้",
            position: 'bottom'
        },
        {
            element: '#beginer7',
            intro: "ตัวหนังสือเล็กเกินไปใช่ไหม? คุณสามารถเลือก <b>ปรับขนาดตัวอักษร</b> ได้ที่ส่วนนี้",
            position: 'left'
        },
        {
            element: '#beginer8',
            intro: "คุณสามารถ <b>ย้อนกลับไป</b> หน้าก่อน ได้ที่ส่วนนี้",
            position: 'right'
        },
        ]
    });

    intro.onchange(function(targetElement) {
        if($(targetElement).attr("id") == $('#beginerU5').attr('id')) {
           $('.button-collapse2').sideNav('show');
        }
        if($(targetElement).attr("id") != $('#beginerU5').attr('id')) {
            $('.button-collapse2').sideNav('hide');
        }
    });

    /*intro.onafterchange(function(targetElement) {
      console.log(targetElement.id);
      switch (targetElement.id){
        case "u5":
            $('.introjs-tooltip').css({left: '503px !important'});

      }
    });*/


    intro.start();
}

function register() {
   var intro = introJs();
   intro.setOptions({
    showStepNumbers: false,
    doneLabel: "สมัครสมาชิก",
    steps: [
    {
        element: '#register1',
        intro: "อยากพบปะผู้คนใหม่ๆใช่ไหม? คลิกที่นี้เพื่อ <b>สมัครสมาชิก</b> กับเรา!!",
        position: 'bottom'
    },


    ]
   });

  intro.start().oncomplete(function() {
      window.location.href = 'register?regismultipage=true';
  });
}

function profilesetting() {
   var intro = introJs();
   intro.setOptions({
    showStepNumbers: false,
    doneLabel: "ตั้งค่าข้อมูลส่วนตัว",
    steps: [
    {
        element: '#beginerU4',
        intro: "วางเมาส์ของคุณไว้ที่นี้จากนั้นเลือก <b>ตั้งค่าข้อมูลส่วนตัว</b>",
        position: 'left'
    },


    ]
   });

  intro.start().oncomplete(function() {
      window.location.href = 'setting?prosetmultipage=true';
  });
}

function message() {
   var intro = introJs();
   intro.setOptions({
    showStepNumbers: false,
    doneLabel: "เข้าใจแล้ว",
    steps: [
    {
        element: '#beginerU6',
        intro: "คลิกที่นี้เพื่อเริ่มต้น <b>ส่งข้อความ</b> สนทนากับเพื่อนของคุณ",
        position: 'left'
    },


    ]
   });
}

   function login() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าสู่ระบบ",
        steps: [
        {
            element: '#login1',
            intro: "สมัครสมาชิกแล้วใช่ไหม? ถึงเวลาพบปะผู้คนใหม่ๆแล้ว! คลิกที่นี้เพื่อทำการ <b>เข้าสู่ระบบ</b>",
            position: 'left'
        },
        
        ]
    });

     intro.start().oncomplete(function() {
      window.location.href = 'login?loginmultipage=true';
  });


}

function logout() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เข้าใจแล้ว",
        steps: [
        {
            element: '#beginerU4',
            intro: "วางเมาส์ของคุณไว้ที่นี้จากนั้นเลือก <b>ออกจากระบบ</b>",
            position: 'left'
        },


        ]
    });

  intro.start()
}

function goto(page) {
  var location = window.location.pathname;

  switch(page){
      case 'content':
          if(location =="/content" || location =="/"){
              content();
          }else{
              window.location.href ='content?contentstart=true';
          }
          break;
    
      case 'pinfav':
          if(location =="/content" || location =="/"){
              pinfav();
          }else{
              window.location.href ='content?pinfavstart=true';
          }
          break;
  
      case 'myprofile':
          if(location =="/profile"){
              myprofile();
          }else{
              window.location.href ='profile?profilestart=true';
          }
          break;

      case 'mypost':
          if(location =="/profile"){
              mypost();
          }else{
              window.location.href ='profile?mypoststart=true';
          }
          break;

      case 'mngpost':
          if(location =="/profile"){
              mngpost();
          }else{
              window.location.href ='profile?mngpoststart=true';
          }
          break;

      case 'comment':
          if(location =="/profile"){
              comment();
          }else{
              window.location.href ='profile?commentstart=true';
          }
          break;

      case 'newsfeed':
          if(location =="/newsfeed"){
              newsfeed();
          }else{
              window.location.href ='newsfeed?newsfeedstart=true';
          }
          break;

      case 'friend':
          if(location =="/friends"){
              friend();
          }else{
              window.location.href ='friends?friendstart=true';
          }
          break;

      case 'favourite':
          if(location =="/favourite"){
              favorite();
          }else{
              window.location.href ='favourite?favoritestart=true';
          }
          break;

      case 'notification':
          if(location =="/notification"){
              notification();
          }else{
              window.location.href ='notification?notistart=true';
          }
          break;

      case 'event':
          if(location =="/event"){
              eventuser();
          }else{
              window.location.href ='event?eventstart=true';
          }
          break;

      case 'eventmng':
          if(location =="/event"){
              eventmng();
          }else{
              window.location.href ='event?eventmngstart=true';
          }
          break;

      case 'eventboard':
          if(location =="/event"){
              eventboard();

          }else{
              window.location.href ='event?eventboardstart=true';
          }
          break;

      case 'message':   
          if(location =="/message_box" ){
              message();
          }else{
              window.location.href ='message_box?msgstart=true';
          }
          break;
  }
}
            

 </script>

 <style>
 button.like-btn:focus{
   background-color: transparent;
   border-color: transparent;
 }
 button.like-btn{
   background-color: transparent;
   border-color: transparent;
 }

.wordwrap{
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  line-height: 1.5;
  max-height: 75px;
  text-align: left;
  font-size: 14pt;

  color: #454545;

    /*font-size: 12px;*/
}
 </style>


    <title>{{$title}}</title>
  </head>

  <body style="background-color: #eceff1;">
    <nav style="box-shadow: none;" id="main-nav">
        <div class="nav-wrapper white">
            <a href="{{url('/')}}" class="brand-logo center"><img id="beginer3" class="mylogo" src="{{url('img/logo_boom2.png')}}"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse" style="margin-left: 28px;">
                <i style="color: #e53935" class="material-icons">menu</i>
            </a>
            <ul class="left hide-on-med-and-down">
                <li id="beginer1" style="background-color: #e53935;" ><a style="font-size: 14pt;" class="dropdown-button" href="#!" data-activates="dropdownhelp" data-constrainwidth="false" data-beloworigin="true"><i class="fa fa-info-circle fa-2x left" aria-hidden="true"></i>ผู้ช่วย</a></li>

                <li id="beginer2">
                    <nav class="white" style="box-shadow: none;" >
                      <div class="nav-wrapper">
                        <form action="{{url('/search')}}" method="get" enctype="text/plain">
                          <div class="input-field">
                            <input class="inputsearch" id="search" type="search" name="value" required placeholder="ค้นหาบทความ เพื่อน หรือกิจกรรม">


                            <label for="search"><i style="color: #212121;" class="fa fa-search fa-2x" aria-hidden="true"></i></label>
                        </div>
                    </form>
                </div>
            </nav>
        </li>
    </ul>

  <ul class="right hide-on-med-and-down">
      @if(Auth::guest())
          <li id="register1"><a class="navlink" href="{{url('/register')}}"><i style="margin-top: 6px;" class="material-icons left">person_add</i>
          <strong>สมัครสมาชิก</strong></a></li>
          <li id="login1"><a class="navlink modal-trigger" href="{{url('login')}}"><i style="margin-top: 6px;" class="material-icons left">input</i>เข้าสู่ระบบ</a></li>
      @else

      <li id="beginerU4"><a class="dropdown-button navlink" href="{{url('/profile')}}" data-activates="dropdownprofile" data-constrainwidth="false" data-beloworigin="true" data-hover="true"><i style="margin-top: 6px;" class="material-icons left">person</i>{{ Auth::user()->username }}</a></li>
      <li id="beginerU5">
        <a class="button-collapse2 navlink" data-activates="slide-out" >
          <i style="margin-top: 6px;" class="material-icons left">people</i>
        <span class="mynoti noti-right">7</span><span class="rps-bar">สังคมของฉัน</span>
      </a>
    </li>
    <li id="beginerU6"><a class="navlink" href="{{url('/message_box')}}"><i style="margin-top: 6px;" class="material-icons left">question_answer</i>
      <span class="mynoti">2</span><span class="rps-bar">ข้อความ</span></a></li>


      @endif


    </ul>

    <!--Slidenav mobile-->
@if(Auth::guest())
<ul id="mobile-demo" class="side-nav" style="width: 248px;">
<li style="height: 100px; background-color: #EE6E73;"><div class="userView">
  <center><span class="white-text name mob-menu">เมนู</span></center>
</div>
</li>

  <li style="border-bottom: 2px solid #e4e4e4;">
    <nav class="white" style="box-shadow: none;">
      <div class="nav-wrapper">
        <form action="{{url('/search')}}" method="get" enctype="text/plain">
          <div class="input-field">
            <input class="inputsearch" id="search" type="search" name="value" required placeholder="ค้นหาบทความ เพื่อน หรือกิจกรรม">


            <label for="search"><i style="color: #212121;" class="fa fa-search fa-2x" aria-hidden="true"></i></label>
        </div>
    </form>
      </div>
    </nav>
  </li>

  <li>
    <a href="{{url('/register')}}">สมัครสมาชิก</a>
  </li>
  <li>
    <a href="{{url('/login')}}">เข้าสู่ระบบ</a>
  </li>
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header">สาระน่ารู้<i class="material-icons">library_books</i><i class="material-icons right">keyboard_arrow_down</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="{{url('/')}}">หน้าแรก</a></li>
                  <ul class="collapsible collapsible-accordion">
                    <li>
                      <a class="collapsible-header" href="#">ตำรับอาหาร<i class="material-icons right">keyboard_arrow_down</i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a class="mob-submenu" href="{{url('/')}}">ของคาว</a></li>
                          <li><a class="mob-submenu" href="{{url('/')}}">ของหวาน</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                  <ul class="collapsible collapsible-accordion">
                    <li>
                      <a class="collapsible-header" href="#">บันเทิง<i class="material-icons right">keyboard_arrow_down</i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a class="mob-submenu" href="{{url('/')}}">วิทยุ</a></li>
                          <li><a class="mob-submenu" href="{{url('/')}}">ดูหนัง</a></li>
                          <li><a class="mob-submenu" href="{{url('/')}}">ฟังเพลง</a></li>
                          <li><a class="mob-submenu" href="{{url('/')}}">ธรรมมะ</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                  <li><a href="{{url('/')}}">ครัวเรือน</a></li>
                  <ul class="collapsible collapsible-accordion">
                    <li>
                      <a class="collapsible-header" href="#">ห้องข่าว<i class="material-icons right">keyboard_arrow_down</i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a class="mob-submenu" href="{{url('/')}}">ข่าวบันเทิง</a></li>
                          <li><a class="mob-submenu" href="{{url('/')}}">ข่าวกีฬา</a></li>
                          <li><a class="mob-submenu" href="{{url('/')}}">ข่าวเศรษฐกิจ</a></li>
                          <li><a class="mob-submenu" href="{{url('/')}}">ข่าวการเมือง</a></li>
                          <li><a class="mob-submenu" href="{{url('/')}}">สิทธิประโยชน์</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                  <li><a href="{{url('/')}}">งานประดิษฐ์</a></li>
                </ul>
              </div>
            </li>
          </ul>
      </ul>
</ul>
@else

    <ul id="mobile-demo" class="side-nav" style="width: 248px;">
    <li style="height: 100px; background-color: #EE6E73;"><div class="userView">
      <center><span class="white-text name mob-menu">เมนู</span></center>
    </div>
    </li>

      <li style="border-bottom: 2px solid #e4e4e4;">
        <nav class="white" style="box-shadow: none;">
          <div class="nav-wrapper">
            <form action="{{url('/search')}}" method="get" enctype="text/plain">
              <div class="input-field">
                <input class="inputsearch" id="search" type="search" name="value" required placeholder="ค้นหาบทความ เพื่อน หรือกิจกรรม">


                <label for="search"><i style="color: #212121;" class="fa fa-search fa-2x" aria-hidden="true"></i></label>
            </div>
        </form>
          </div>
        </nav>
      </li>

        <ul class="collapsible collapsible-accordion">
          <li>
              <a class="collapsible-header" href="{{url('/')}}">หน้าแรก</a>
          </li>
          <li>
            <a class="collapsible-header">{{Auth::user()->username}}
              <i class="material-icons">perm_identity</i>
              <i class="material-icons right">keyboard_arrow_down</i>
            </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a class="mob-submenu" href="{{url('/profile')}}">หน้าโปรไฟล์ของคุณ</a>
                  </li>
                  <li>
                    <a class="mob-submenu" href="{{url('/logout')}}">ออกจากระบบ</a>
                  </li>
                </ul>
              </div>
          </li>

          <li>
            <a class="collapsible-header">สังคมของฉัน
                <i style="margin-top: 6px;" class="material-icons left">people</i>
              <i class="material-icons right">keyboard_arrow_down</i>
            </a>
            <div class="collapsible-body">
              <ul>
                <li>
                  <a class="mob-submenu" href="{{url('/newsfeed')}}">กระดานข่าว</a>
                </li>
                <li>
                  <a class="mob-submenu" href="{{url('/friends')}}">เพื่อน</a>
                </li>
                <li>
                  <a class="mob-submenu" href="{{url('/favourite')}}">รายการโปรด</a>
                </li>
                <li>
                  <a class="mob-submenu" href="{{url('/event')}}">กิจกรรม</a>
                </li>
                <li>
                  <a class="mob-submenu" href="{{url('/notification')}}">แจ้งเตือน</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="{{url('/message_box')}}"class="collapsible-header">ข้อความ
            <i style="margin-top: 6px;" class="material-icons left">question_answer</i>

            </a>
          </li>
          <li>

            <a class="collapsible-header">สาระน่ารู้<i class="material-icons">library_books</i><i class="material-icons right">keyboard_arrow_down</i></a>
            <div class="collapsible-body">
              <ul>

                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header" href="#">ตำรับอาหาร<i class="material-icons right">keyboard_arrow_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a class="mob-submenu" href="{{url('/')}}">ของคาว</a></li>
                        <li><a class="mob-submenu" href="{{url('/')}}">ของหวาน</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header" href="#">บันเทิง<i class="material-icons right">keyboard_arrow_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a class="mob-submenu" href="{{url('/')}}">วิทยุ</a></li>
                        <li><a class="mob-submenu" href="{{url('/')}}">ดูหนัง</a></li>
                        <li><a class="mob-submenu" href="{{url('/')}}">ฟังเพลง</a></li>
                        <li><a class="mob-submenu" href="{{url('/')}}">ธรรมมะ</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
                <li><a href="{{url('/')}}">ครัวเรือน</a></li>
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header" href="#">ห้องข่าว<i class="material-icons right">keyboard_arrow_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a class="mob-submenu" href="{{url('/')}}">ข่าวบันเทิง</a></li>
                        <li><a class="mob-submenu" href="{{url('/')}}">ข่าวกีฬา</a></li>
                        <li><a class="mob-submenu" href="{{url('/')}}">ข่าวเศรษฐกิจ</a></li>
                        <li><a class="mob-submenu" href="{{url('/')}}">ข่าวการเมือง</a></li>
                        <li><a class="mob-submenu" href="{{url('/')}}">สิทธิประโยชน์</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
                <li><a href="{{url('/')}}">งานประดิษฐ์</a></li>
              </ul>
            </div>
          </li>
        </ul>
    </ul>
    @endif
    <!--End Slidenav mobile-->

    </div>

    <!-- Dropdownhelp Structure -->
    <ul id="dropdownhelp" class="dropdown-content">
    @if(Auth::guest())
      <div class="row">
        <div class="col s12">
          <li class="dis"><a class="myheader"><i class="material-icons left">help</i>เริ่มต้นใช้งาน</a></li>
          <li class="divider"></li>
          <li><a href="javascript:void(0);" onclick="beginerGuest()">เริ่มต้นการใช้งาน</a></li>
          <li><a href="javascript:void(0);" onclick="register()">สมัครสมาชิก</a></li>
          <li><a href="javascript:void(0);" onclick="login()">เข้าสู่ระบบ</a></li>
          <li><a href="javascript:void(0);" onclick="goto('content')">สาระน่ารู้</a></li>
        </div>
      </div>
    @else
    <div class="row">
        <div class="col s4">
          <li class="dis"><a class="myheader"><i class="material-icons left">help</i>เริ่มต้นใช้งาน</a></li>
          <li class="divider"></li>
          <li><a href="javascript:void(0);" onclick="beginerUser()">เริ่มต้นการใช้งาน</a></li>
          <li><a href="javascript:void(0);" onclick="logout()">ออกจากระบบ</a></li>
          <li><a href="javascript:void(0);" onclick="goto('content')">สาระน่ารู้</a></li>
          <li><a href="javascript:void(0);" onclick="goto('pinfav')">ปักหมุดและบันทึกบทความ</a></li>
        </div>
        <div class="col s4">
          <li class="dis"><a class="myheader"><i class="material-icons left">person</i> โปรไฟล์ของฉัน</a></li>
          <li class="divider"></li>
          <li><a href="javascript:void(0);" onclick="goto('myprofile')">โปรไฟล์ของฉัน</a></li>
          <li><a href="javascript:void(0);" onclick="profilesetting()">ตั้งค่าโปรไฟล์</a></li>
          <li><a href="javascript:void(0);" onclick="goto('mypost')">โพสต์ของฉัน</a></li>
          <li><a href="javascript:void(0);" onclick="goto('mngpost')">จัดการโพสต์</a></li>
          <li><a href="javascript:void(0);" onclick="goto('comment')">แสดงความคิดเห็น</a></li>
        </div>
        <div class="col s4">
          <li class="dis"><a class="myheader"><i class="material-icons left">people</i>สังคมของฉัน</a></li>
          <li class="divider"></li>
          <li><a href="javascript:void(0);" onclick="goto('newsfeed')">กระดานข่าว</a></li>
          <li><a href="javascript:void(0);" onclick="goto('friend')">เพื่อน</a></li>
          <li><a href="javascript:void(0);" onclick="goto('favourite')">รายการโปรด</a></li>
          <li><a href="javascript:void(0);" onclick="goto('notification')">แจ้งเตือน</a></li>
          <li><a href="javascript:void(0);" onclick="goto('event')">กิจกรรม</a></li>
          <li><a href="javascript:void(0);" onclick="goto('eventmng')">จัดการกิจกรรม</a></li>
          <li><a href="javascript:void(0);" onclick="goto('eventboard')">กระดานกิจกรรม</a></li>
          <li><a href="javascript:void(0);" onclick="goto('message')">ข้อความ</a></li>
        </div>
      </div>
@endif
    </ul>

    <ul id="dropdownprofile" class="dropdown-content">
        <li><a href="{{url('/setting')}}">ตั้งค่าข้อมูลส่วนตัว</a></li>
        @if(Auth::check() and Auth::user()->admin_status=="admin")
          <li><a href="{{url('/administator')}}">หน้า Admin</a></li>
        @endif
        <li><a href="{{url('/logout')}}">ออกจากระบบ</a></li>
    </ul>
    <!--slidenav-->
    <span id="u5">
    <ul id="slide-out" class="side-nav" style="width: 248px;">
      <li style="height: 105px; background-color: #EE6E73;"><div class="userView">
        <center><span class="white-text name slideo-menu">สังคมของฉัน</span></center>
      </div>
      </li>
        <li ><a href="{{url('/newsfeed')}}"><i class="fa fa-rss" aria-hidden="true"></i> กระดานข่าว</a></li>
        <li><a href="{{url('/friends')}}"><i class="fa fa-users" aria-hidden="true"></i> เพื่อน</a></li>
        <li><a href="{{url('/favourite')}}"><i class="fa fa-star" aria-hidden="true"></i> รายการโปรด</a></li>
        <li><a href="{{url('/event')}}"><i class="fa fa-smile-o" aria-hidden="true"></i> กิจกรรม <span class="new badge">3</span></a></li>
        <!-- <li><a href="{{url('/message_box')}}"><i class="fa fa-comments-o" aria-hidden="true"></i> ข้อความ <span class="new badge">2</span></a></li> -->
        <li><a href="{{url('/notification')}}"><i class="fa fa-bell" aria-hidden="true"></i> แจ้งเตือน <span class="new badge">7</span></a></li>
    </ul></span>

    <!--Second Nav-->
    <header id="beginer6" class="nav-down second-nav nav-wrapper" style="background-color: #EE6E73; z-index: -99; height: 59px;">
        <ul class="secnav hide-on-med-and-down center">

            <li><a href="/"><i id="secnav-icon" class="fa fa-home fa-lg left" aria-hidden="true"></i><span class="nav-resize">หน้าแรก</span></a></li>
                <!--Slide nav menu
                <li><a class="button-collapse2" data-activates="slide-out" href="sass.html"><i class="fa fa-medkit fa-lg left" aria-hidden="true"></i>สุขภาพ</a></li>
            -->
            <li><a href="{{ url('content/health') }}"><i id="secnav-icon" class="fa fa-medkit fa-lg left" aria-hidden="true"></i><span class="nav-resize">สุขภาพ</span></a></li>
            <li><a href="{{url('content/')}}" class="dropdown-button" href="#" data-activates="dropdownfood" data-constrainwidth="false" data-beloworigin="true" data-hover="true">
              <i id="secnav-icon" class="fa fa-cutlery fa-lg left" aria-hidden="true"></i><span class="nav-resize">ตำรับอาหาร</span><i class="drop-i material-icons right">keyboard_arrow_down</i></a></li>
            <li><a class="dropdown-button" href="{{url('content/entertainment')}}" data-activates="dropdownent" data-constrainwidth="false" data-beloworigin="true" data-hover="true">
              <i id="secnav-icon" class="fa fa-smile-o fa-lg left" aria-hidden="true"></i><span class="nav-resize">บันเทิง</span><i class="drop-i material-icons right">keyboard_arrow_down</i></a></li>
            <li><a href="{{url('content/family')}}"><img class="myicon left" src="{{url('img/fam.png')}}"><span class="nav-resize">ครัวเรือน</span></a></li>
            <li><a class="dropdown-button" href="#" data-activates="dropdownnews" data-constrainwidth="false" data-beloworigin="true" data-hover="true"><i id="secnav-icon" class="fa fa-newspaper-o fa-lg left" aria-hidden="true"></i><span class="nav-resize">ห้องข่าว</span><i class="drop-i material-icons right">keyboard_arrow_down</i></a></li>
            <!--<li><a href="{{url('content/elder_promotion')}}"><i id="secnav-icon" class="fa fa-gift fa-lg left" aria-hidden="true"></i>สิทธิประโยชน์</a></li>-->
            <li><a href="{{url('content/diy')}}"><i id="secnav-icon" class="fa fa-lightbulb-o fa-lg left" aria-hidden="true"></i><span class="nav-resize">งานประดิษฐ์</span></a></li>
        </ul>
        </header>


            <!--Slide nav menu
            <li><a class="button-collapse2" data-activates="slide-out" href="sass.html"><i class="fa fa-medkit fa-lg left" aria-hidden="true"></i>สุขภาพ</a></li>
        -->

    </ul>

    <!--Slidenav -->

        <!--End Slidenav -->
    </div>
    </nav>
    <!-- Dropdownhealth Structure -->
    <ul id="dropdownfood" class="dropdown-content">
        <li><a href="{{url('content/sweets')}}">ของหวาน</a></li>
        <li><a href="{{url('content/foods')}}">ของคาว</a></li>
    </ul>

    <!-- Dropdownent Structure -->
    <ul id="dropdownent" class="dropdown-content">
        <li><a href="{{url('content/radio')}}">วิทยุ</a></li>
        <li><a href="{{url('content/movie')}}">ดูหนัง</a></li>
        <li><a href="{{url('content/music')}}">ฟังเพลง</a></li>
        <li><a href="{{url('content/dhamma')}}">ธรรมมะ</a></li>
    </ul>

    <!-- Dropdownnews Structure -->
    <ul id="dropdownnews" class="dropdown-content">
        <li><a href="{{url('content/entertain_news')}}">ข่าวบันเทิง</a></li>
        <li><a href="{{url('content/sport_news')}}">ข่าวกีฬา</a></li>
        <li><a href="{{url('content/scnomic_news')}}">ข่าวเศรษฐกิจ</a></li>
        <li><a href="{{url('content/politics_news')}}">ข่าวการเมือง</a></li>
        <li><a href="{{url('content/elder_promotion')}}">สิทธิประโยชน์</a></li>

    </ul>

    </nav>

<section id="main">

@yield('maincontent')

</section>
<!---if user isn't member-->
<div id="loginform" class="modal" style="width: 480px;">
    <div class="modal-content" >
        <form action="{{url('/handleLogin')}}" method="POST">
           {{ csrf_field() }}
            <div class="modal-close" align="right" ><a href="#!" style="font-size: 20px">ปิด</a></div>
            <h4 class="center">เข้าสู่ระบบ</h4>
            <div class="row">
                <div class="input-field col s8 offset-s2">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="inputUsername" type="text" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="กรอกชื่อผู้ใช้" name="username" value="{{ old('username') }}" onchange="allowLogin()" onmouseleave="allowLogin()">
                   
                    <label for="inputUsername">เข้าสู่ระบบ</label>
                </div>

                <div class="input-field col s8 offset-s2">
                    <i class="material-icons prefix">https</i>
                    <input id="inputPassword" type="password" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="กรอกรหัสผ่าน" name="password" onchange="allowLogin()" onmouseleave="allowLogin()">
                    <label for="inputPassword">รหัสผ่าน</label>
                </div>
            </div>
            <div class="modal-footer" align="center">
                <span>
                    <input type="checkbox" class="filled-in" id="filled-in-box" name="remember"/>
                    <label for="filled-in-box">ให้ฉันอยู่ในระบบต่อไป</label>
                    หรือ <a href="#">ลืมรหัสผ่าน</a></span>
                </div>
                <div align="center" style="margin-bottom: 10px">
                    <button id="loginBtn" class="btn waves-effect waves-light" type="submit" name="action" disabled>ลงชื่อเข้าใช้</button>
                </div>
                <script type="text/javascript">
                  function allowLogin(){
                    var inputUsername = document.getElementById('inputUsername');
                    var inputPassword = document.getElementById('inputPassword');
                    var loginBtn = document.getElementById('loginBtn');
                      if(inputUsername.value.length > 0 && inputPassword.value.length > 0) {
                        loginBtn.disabled = false;
                        console.log('yes');
                      }
                      else{
                        loginBtn.disabled = true;
                        console.log('no');
                      }
                  }
                </script>
            </form>
        </div>
    </div>






        <!-- FOOTER PART SINCE HERE!!!!!-->
        <!--Resize Button-->
        <div id="beginer7" class="fixed-action-btn" style="position: fixed;">
            <a class="btn-floating btn-large red tooltipped" data-position="left" data-delay="50" data-tooltip="ปรับขนาดตัวอักษร" ><img src="{{url('img/retext-icon.png')}}" width="35" style="padding-top: 7px;"></a>
            <ul class="resizer">
                <li id="large"><a class="large btn-floating red tooltipped " data-position="left" data-delay="50" data-tooltip="ตัวอักษรขนาดใหญ่">
                    <img src="{{url('img/ismall.png')}}" style="margin: 8px"></a>
                </li>
                <li id="medium"><a class="medium btn-floating blue tooltipped " data-position="left" data-delay="50" data-tooltip="ตัวอักษรขนาดกลาง"> <img src="{{url('img/ismall.png')}}" style="margin: 11px; width: 14px"></a>
                </li>
                <li id="normal"><a class="large btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="ตัวอักษรปกติ"><img src="{{url('img/ismall.png')}}" style="margin: 12px; width: 11px"></a>
                </li>
            </ul>
        </div>
        <!--Endd Resize Button-->

        <!--Back btn-->
        <div id="beginer8" class="fixed-action-btn goback-btn" style="position: fixed;">
            <a class="btn-floating btn-large tooltipped" data-position="right" data-delay="50" data-tooltip="กลับ"
            onclick="goBack()"><i class="material-icons">chevron_left</i></a>
        </div>
        <!--End Back btn-->

        <!--Footer-->
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text for-footer">Senior Project</h5>
                        <p class="grey-text text-lighten-4 for-footer">งานนี้เป็นส่วนหนึ่งของวิชา INT450 IT Project</p>
                    </div>
                    <div class="col l6 s12">
                        <h5 class="white-text for-footer">ติดต่อเรา</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3 for-footer" href="#!">กุนนี่ คอนพานี</a></li>
                            <li><a class="grey-text text-lighten-3 for-footer" href="#!">สุนิสา อินดัสทรี่</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2016 Copyright SIT KMUTT IT#19
                    <a class="grey-text text-lighten-4 right" href="#!"></a>
                </div>
            </div>
        </footer>

        <a href="#" class="back-to-top tooltipped" style="display: inline;" data-position="left" data-delay="50" data-tooltip="กลับขึ้นไปด้านบน">
            <i class="material-icons left back-icon">keyboard_arrow_up</i></a>

        <!--UP BUTTON JS-->
        <script type="text/javascript" src="{{URL::asset('js/btt.js')}}"></script>

  </body>
</html>
