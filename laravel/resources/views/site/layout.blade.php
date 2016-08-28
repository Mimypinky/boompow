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


    <!--Import bootstrap.css

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--materialize javaScript-->

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('jquery-cookie.js')}}"></script>


    <script type="text/javascript" src="{{ URL::asset('materialize/js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/intro.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/resizetext.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/introjs.css')}}">
  <script type="text/javascript">
        /*$( document ).ready(function(){
         $(".button-collapse2").sideNav();
         $(".button-collapse").sideNav();
     });
     */$(document).ready(function () {
         $('.modal-trigger').leanModal();
         $('#modal1').openModal();
         $('#modal1').closeModal();
     });
     $('.datepicker').pickadate({
    selectMonths: true,
    selectYears: 15
  });
      $(document).ready(function() {
     $('select').material_select();
   });
 </script>


    <title>{{$title}}</title>
  </head>
  <body style="background-color: #eceff1;">
    <nav style="box-shadow: none;" id="main-nav">
        <div class="nav-wrapper white">
            <a href="{{url('/')}}" class="brand-logo center"><img class="mylogo" src="img/logo_boom2.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse">
                <i style="color: #263238" class="material-icons">menu</i>
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

        <li data-step="1" data-intro="Ok, wasn't that fun?" data-position='left'><a class="navlink " href="{{ url('/register') }}"><i class="fa fa-user-plus fa-2x right" aria-hidden="true"></i>สมัครสมาชิก</a></li>
        <li data-step="2" data-intro="Ok, wasn't that fun?" data-position='left'><a class="navlink modal-trigger" href="#modal1"><i class="fa fa-sign-in fa-2x right" aria-hidden="true"></i>เข้าสู่ระบบ</a></li>

    </ul>

    <!--Slidenav mobile-->
    <ul id="mobile-demo" class="side-nav" >
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
    </ul>
    <!--End Slidenav mobile-->
    </div>

    <!-- Dropdownhelp Structure -->
    <ul id="dropdownhelp" class="dropdown-content">
    <li><a href="javascript:void(0);" onclick="javascript:introJs().start();">เริ่มต้นการใช้งาน</a></li>
    <li><a href="">สมัครสมาชิก</a></li>
    <li><a href="">เข้าสู่ระบบ</a></li>
    </ul>

    <!--Second Nav-->

    <div class="second-nav nav-wrapper" style="background-color: #EE6E73;" data-step="3" data-intro="Ok, wasn't that fun?" data-position='bottom'>
    <ul class="secnav hide-on-med-and-down center" >

        <li><a href="#"><i class="fa fa-home fa-lg left" aria-hidden="true"></i>หน้าแรก</a></li>
            <!--Slide nav menu
            <li><a class="button-collapse2" data-activates="slide-out" href="sass.html"><i class="fa fa-medkit fa-lg left" aria-hidden="true"></i>สุขภาพ</a></li>
        -->
        <li><a href="#"><i class="fa fa-medkit fa-lg left" aria-hidden="true"></i>สุขภาพ</a></li>
        <li><a href="all_catelog_recipe.html" class="dropdown-button" href="#" data-activates="dropdownfood" data-constrainwidth="false" data-beloworigin="true" data-hover="true"><i class="fa fa-cutlery fa-lg left" aria-hidden="true"></i>ตำรับอาหาร</a></li>
        <li><a class="dropdown-button" href="#" data-activates="dropdownent" data-constrainwidth="false" data-beloworigin="true" data-hover="true"><i class="fa fa-smile-o fa-lg left" aria-hidden="true"></i>บันเทิง</a></li>
        <li><a href="#"><img class="myicon left" src="img/fam.png">ครัวเรือน</a></li>
        <li><a class="dropdown-button" href="#" data-activates="dropdownnews" data-constrainwidth="false" data-beloworigin="true" data-hover="true"><i class="fa fa-newspaper-o fa-lg left" aria-hidden="true"></i>ห้องข่าว</a></li>
        <li><a href="#"><i class="fa fa-gift fa-lg left" aria-hidden="true"></i>สิทธิประโยชน์</a></li>
        <li><a href="#"><i class="fa fa-lightbulb-o fa-lg left" aria-hidden="true"></i>งานประดิษฐ์</a></li>
    </ul>

    <!--Slidenav -->
    <ul id="slide-out" class="side-nav">
        <li><a href="#!">First Sidebar Link</a></li>
        <li><a href="#!">Second Sidebar Link</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header">Dropdown</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#!">First</a></li>
                            <li><a href="#!">Second</a></li>
                            <li><a href="#!">Third</a></li>
                            <li><a href="#!">Fourth</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </ul>
        <!--End Slidenav -->
    </div>
    </nav>

    <!-- Dropdownhealth Structure -->
    <ul id="dropdownfood" class="dropdown-content">
    <li><a href="#">ของหวาน</a></li>
    <li><a href="meal_recipe.html">ของคาว</a></li>
    </ul>

    <!-- Dropdownent Structure -->
    <ul id="dropdownent" class="dropdown-content">
    <li><a href="#">วิทยุ</a></li>
    <li><a href="#!">ดูหนัง</a></li>
    <li><a href="#!">ฟังเพลง</a></li>
    <li><a href="#!">ธรรมมะ</a></li>
    </ul>

    <!-- Dropdownnews Structure -->
    <ul id="dropdownnews" class="dropdown-content">
    <li><a href="#">ข่าวบันเทิง</a></li>
    <li><a href="#!">ข่าวกีฬา</a></li>
    <li><a href="#!">ข่าวเศรษฐกิจ</a></li>
    <li><a href="#!">ข่าวการเมือง</a></li>

    </ul>
    </nav>
<!--<header>
  <div class="row">
      <div class="hello">
          <center><h1 style="font-size: 36pt; text-shadow: 2px 2px #3A3737;" class="hello-content">{{'ชื่อcontent'}}</h1></center>
      </div>
  </div>
</header>-->
<section id="main">

@yield('maincontent')

</section>
<!---if user isn't member-->
<div id="modal1" class="modal" style="width: 480px;">
    <div class="modal-content" >
        <form action="{{url('\login')}}" method="post" id="loginform" name="login">
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
                    <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" name="remember"/>
                    <label for="filled-in-box">ให้ฉันอยู่ในระบบต่อไป</label>
                    หรือ <a href="#">ลืมรหัสผ่าน</a></span>
                </div>
                <div align="center" style="margin-bottom: 10px">
                    <button class="btn waves-effect waves-light" type="submit" name="action">ลงชื่อเข้าใช้</button>
                </div>
            </form>
        </div>
    </div>

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
  </body>
</html>
