<!DOCTYPE html>
<html>
  <head>

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
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/profile-v2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/chat.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/notificationcss.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url::asset('css/profile-v2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url::asset('css/cover-head.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url::asset('css/setting-profile.css')}}">


    <!--Import bootstrap.css

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--materialize javaScript-->

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('jquery-cookie.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('js/secnav-scroll.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('materialize/js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/intro.js')}}"></script>
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
       selectMonths: true,
       selectYears: 15
     });
      $(document).ready(function() {
     $('select').material_select();
   });
   function goBack() {
       window.history.back();
   }
 </script>

 <style>
.wordwrap{
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  line-height: 1.5;
  max-height: 70px;
  text-align: left;

  color: #454545;
  font-size: 15px;

    /*font-size: 12px;*/
}
 </style>


    <title>{{$title}}</title>
  </head>
  <body style="background-color: #eceff1;">
    <nav style="box-shadow: none;" id="main-nav">
        <div class="nav-wrapper white">
            <a href="{{url('/')}}" class="brand-logo center"><img class="mylogo" src="{{url('img/logo_boom2.png')}}"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse" style="margin-left: 28px;">
                <i style="color: #e53935" class="material-icons">menu</i>
            </a>
            <ul class="left hide-on-med-and-down">
                <li style="background-color: #e53935;" ><a style="font-size: 14pt;" class="dropdown-button" href="#!" data-activates="dropdownhelp" data-constrainwidth="false" data-beloworigin="true"><i class="fa fa-info-circle fa-2x left" aria-hidden="true"></i>ผู้ช่วย</a></li>
                <li>
                    <nav class="white" style="box-shadow: none;" >
                      <div class="nav-wrapper">
                        <form>
                          <div class="input-field">
                            <input class="inputsearch" id="search" type="search" required placeholder="ค้นหาเพื่อนและกิจกรรม">
                            <label for="search"><i style="color: #212121;" class="fa fa-search fa-2x" aria-hidden="true"></i></label>
                        </div>
                    </form>
                </div>
            </nav>
        </li>
    </ul>

  <ul class="right hide-on-med-and-down">
      @if(Auth::guest())
          <li data-step="1" data-intro="Ok, wasn't that fun?" data-position='left'><a class="navlink" href="{{url('/register')}}"><i style="margin-top: 6px;" class="material-icons left">person_add</i>
          <strong>สมัครสมาชิก</strong></a></li>
          <li data-step="2" data-intro="Ok, wasn't that fun?" data-position='left'><a class="navlink modal-trigger" href="#loginform"><i style="margin-top: 6px;" class="material-icons left">input</i>เข้าสู่ระบบ</a></li>
      @else

      <li data-step="1" data-intro="Ok, wasn't that fun?" data-position='left'><a class="dropdown-button navlink" href="{{url('/profile')}}" data-activates="dropdownprofile" data-constrainwidth="false" data-beloworigin="true" data-hover="true"><i style="margin-top: 6px;" class="material-icons left">person</i>{{ Auth::user()->username }}</a></li>
      <li data-step="2" data-intro="Ok, wasn't that fun?" data-position='left'>
        <a class="button-collapse2 navlink" data-activates="slide-out" >
          <i style="margin-top: 6px;" class="material-icons left">people</i>
        <span class="mynoti noti-right">7</span><span class="rps-bar">สังคมของฉัน</span>
      </a>
    </li>

    <li><a class="navlink" href="#"><i style="margin-top: 6px;" class="material-icons left">question_answer</i>
      <span class="mynoti">2</span><span class="rps-bar">ข้อความ</span></a></li>


      @endif


    </ul>

    <!--Slidenav mobile-->
    <ul id="mobile-demo" class="side-nav" >

        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">ข้อมูลส่วนตัว<i class="material-icons">person</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{url('/setting')}}">ตั้งค่าข้อมูลส่วนตัว</a></li>
                <li><a href="{{url('/logout')}}">ออกจากระบบ</a></li>
              </ul>
            </div>
          </li>
        </ul>


        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header"><i class="material-icons">people</i>สังคมของฉัน<span class="new badge">7</span></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{url('/newsfeed')}}">กระดานข่าว </a></li>
                <li><a href="{{url('/friends')}}">เพื่อน</a></li>

                <li><a href="{{url('/favourite')}}">รายการโปรด</a></li>
                <li><a href="{{url('/event')}}">กิจกรรม <span class="new badge">4</span></a></li>
                <li><a href="{{url('/chat')}}">ข้อความ <span class="new badge">2</span></a></li>
                <li><a href="{{url('/notificate')}}">แจ้งเตือน <span class="new badge">7</span></a></li>
              </ul>
            </div>
          </li>
        </ul>

        <li><a href="#"><i class="small material-icons left">question_answer</i>ข้อความ<span class="new badge">4</span></a></li>



        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">สาระน่ารู้<i class="material-icons">library_books</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{url('/')}}">หน้าแรก</a></li>
                <li><a href="{{url('/')}}">ตำรับอาหาร</a></li>
                <li><a href="{{url('/')}}">บันเทิง</a></li>
                <li><a href="{{url('/')}}">ครัวเรือน</a></li>
                <li><a href="{{url('/')}}">ห้องข่าว</a></li>
                <li><a href="{{url('/')}}">สิทธิประโยชน์</a></li>
                <li><a href="{{url('/')}}">งานประดิษฐ์</a></li>
              </ul>
            </div>
          </li>
        </ul>
    </ul>
    <!--End Slidenav mobile-->

    </div>

    <!-- Dropdownhelp Structure -->
    <ul id="dropdownhelp" class="dropdown-content">
      <ul id="dropdownhelp" class="dropdown-content">
          <li><a href="javascript:void(0);" onclick="javascript:introJs().start();">เริ่มต้นการใช้งาน</a></li>
          <li><a href="#!">สมัครสมาชิก</a></li>
          <li><a href="#!">เข้าสู่ระบบ</a></li>
      </ul>


    <!-- ถ้าอยู่หน้าไหนให้ไปตามหน้านั้น-->
    </ul>

    <ul id="dropdownprofile" class="dropdown-content">
        <li><a href="{{url('/setting')}}">ตั้งค่าข้อมูลส่วนตัว</a></li>
        <li><a href="{{url('/logout')}}">ออกจากระบบ</a></li>

    </ul>
    <!--slidenav-->
    <ul id="slide-out" class="side-nav">
        <li><a href="{{url('/newsfeed')}}"><i class="fa fa-rss" aria-hidden="true"></i> กระดานข่าว</a></li>
        <li><a href="{{url('/friends')}}"><i class="fa fa-users" aria-hidden="true"></i> เพื่อน</a></li>
        <li><a href="{{url('/favourite')}}"><i class="fa fa-star" aria-hidden="true"></i> รายการโปรด</a></li>
        <li><a href="{{url('/event')}}"><i class="fa fa-smile-o" aria-hidden="true"></i> กิจกรรม <span class="new badge">4</span></a></li>
        <li><a href="{{url('/chat')}}"><i class="fa fa-comments-o" aria-hidden="true"></i> ข้อความ <span class="new badge">4</span></a></li>
        <li><a href="{{url('/notification')}}"><i class="fa fa-bell" aria-hidden="true"></i> แจ้งเตือน <span class="new badge">4</span></a></li>
    </ul>

    <!--Second Nav-->
    <header class="nav-down second-nav nav-wrapper" style="background-color: #EE6E73; z-index: -99; height: 59px;" data-step="3" data-intro="Ok, wasn't that fun?" data-position='bottom'>
        <ul class="secnav hide-on-med-and-down center">

            <li><a href="/"><i id="secnav-icon" class="fa fa-home fa-lg left" aria-hidden="true"></i>หน้าแรก</a></li>
                <!--Slide nav menu
                <li><a class="button-collapse2" data-activates="slide-out" href="sass.html"><i class="fa fa-medkit fa-lg left" aria-hidden="true"></i>สุขภาพ</a></li>
            -->
            <li><a href="{{ url('content/health') }}"><i id="secnav-icon" class="fa fa-medkit fa-lg left" aria-hidden="true"></i>สุขภาพ</a></li>
            <li><a href="" class="dropdown-button" href="#" data-activates="dropdownfood" data-constrainwidth="false" data-beloworigin="true" data-hover="true"><i id="secnav-icon" class="fa fa-cutlery fa-lg left" aria-hidden="true"></i>ตำรับอาหาร<img src="{{url('img/arrow_drop.png')}}" ></a></li>
            <li><a class="dropdown-button" href="{{url('content/entertainment')}}" data-activates="dropdownent" data-constrainwidth="false" data-beloworigin="true" data-hover="true">
              <i id="secnav-icon" class="fa fa-smile-o fa-lg left" aria-hidden="true"></i>บันเทิง<img src="{{url('img/arrow_drop.png')}}" ></a></li>
            <li><a href="{{url('content/family')}}"><img class="myicon left" src="{{url('img/fam.png')}}">ครัวเรือน</a></li>
            <li><a class="dropdown-button" href="#" data-activates="dropdownnews" data-constrainwidth="false" data-beloworigin="true" data-hover="true"><i id="secnav-icon" class="fa fa-newspaper-o fa-lg left" aria-hidden="true"></i>ห้องข่าว<img src="{{url('img/arrow_drop.png')}}" ></a></li>
            <li><a href="{{url('content/elder_promotion')}}"><i id="secnav-icon" class="fa fa-gift fa-lg left" aria-hidden="true"></i>สิทธิประโยชน์</a></li>
            <li><a href="{{url('content/diy')}}"><i id="secnav-icon" class="fa fa-lightbulb-o fa-lg left" aria-hidden="true"></i>งานประดิษฐ์</a></li>
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
                    <input id="icon_prefix" type="text" class="validate" name="username">
                    <label for="icon_prefix">เข้าสู่ระบบ</label>
                </div>

                <div class="input-field col s8 offset-s2">
                    <i class="material-icons prefix">https</i>
                    <input id="icon_prefix" type="password" class="validate" name="password">
                    <label for="icon_prefix">รหัสผ่าน</label>
                </div>
            </div>


            <div class="modal-footer" align="center">
                <span>
                    <input type="checkbox" class="filled-in" id="filled-in-box" name="remember"/>
                    <label for="filled-in-box">ให้ฉันอยู่ในระบบต่อไป</label>
                    หรือ <a href="#">ลืมรหัสผ่าน</a></span>
                </div>
                <div align="center" style="margin-bottom: 10px">
                    <button class="btn waves-effect waves-light" type="submit" name="action">ลงชื่อเข้าใช้</button>
                </div>
            </form>
        </div>
    </div>






        <!-- FOOTER PART SINCE HERE!!!!!-->
        <!--Resize Button-->
        <div class="fixed-action-btn" data-step="4" data-intro="Ok, wasn't that fun?" data-position='left' style="position: fixed;">
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
        <div class="fixed-action-btn goback-btn" data-step="4" data-intro="Ok, wasn't that fun?" data-position='left'>
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

        <a href="#" class="back-to-top waves-effect waves-light tooltipped" style="display: inline;" data-position="left" data-delay="50" data-tooltip="กลับขึ้นไปด้านบน">
            <i class="material-icons left back-icon">keyboard_arrow_up</i></a>

        <!--UP BUTTON JS-->
        <script type="text/javascript" src="js/btt.js"></script>
  </body>
</html>
