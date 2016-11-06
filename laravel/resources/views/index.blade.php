@extends('site.layout')
@section('maincontent')

<div style="min-height: 900px;">

    <div class="parallax-container">
        <div class="row">
            <div class="col s10 m8 l6 offset-l5 offset-m4 offset-s1" style="margin-top: 240px; text-align: center">
                <h1 class="white-text" style="font-size: 2.25em">" เพราะ อายุ เป็นเพียงแค่ตัวเลข "</h1>
                <h4 class="white-text" style="font-size: 1.25em">แหล่งเครือข่ายสังคมสำหรับคนเก๋าๆ เพื่อการเรียนรู้ตลอดชีวิต </h4>
                <a class="waves-effect waves-light btn-large red accent-2 modal-trigger" href="{{url('/register')}}" style="margin-top: 15px"><i class="material-icons left">account_box</i>เข้าร่วมเป็นสมาชิก</a>
                <!-- <a class="waves-effect waves-light btn-large white black-text" style="margin-top: 15px"><i class="material-icons left">video_library</i>ดูวีดีโอแนะนำ</a> -->
                <a class="waves-effect waves-light btn-large white black-text" href="{{url('/')}}" style="margin-top: 15px"><i class="material-icons left">home</i>เข้าสู่เว็บไซต์</a>
            </div>
        </div>

        <div class="parallax"><img src="img/light3.jpg">

        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <div class="section"></div>
            <div class="row">
              <div class="col s10 offset-s1">
                  <div class="center"><span style="font-size: 32px" class="myred-font">BOOMPOW</span><span style="font-size: 32px"> คือ ที่สุดของสังคมออนไลน์วัยเก๋า</span></div>


                  <p class="grey-text text-darken-2" style="text-align: center">สังคมผู้สูงอายุ (Aging Society)
                    ผู้สูงอายุโดยปกติในสังคมไทยเรานับผู้ที่มีอายุตั้งแต่ 60 ปีขึ้นไปเป็นผู้สูงอายุและถือว่าเป็นวัยเกษียณอายุราชการไปด้วย
                    ในสังคมอเมริกา ญี่ปุ่นเขาก็จะนับผู้ที่มีอายุตั้งแต่ 65 ปีขึ้นไป ส่วนในประเทศแถบแอฟริกาจะนับอายุตั้งแต่ 50 ปี ทั้งนี้การนิยามผู้สูงอายุนอกจากจะนับตามอายุเกิดเป็นหลักแล้ว ก็ยังขึ้นอยู่บริบทสังคม วัฒนธรรมและสภาพร่างกายของประชากรในประเทศนั้นๆ
                    สังเกตไหมคะว่า ประเทศที่พัฒนาแล้วจะนับอายุตั้งแต่ 65 ปีขึ้นไป ส่วนประเทศที่กำลังพัฒนาก็จะนับอายุต่ำกว่านั้น
                    แล้วที่เขาเรียกกันว่า….สังคมผู้สูงอายุ </p>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m4 l4">
                    <p class="center"><i class="material-icons large blue-text text-lighten-2">group</i></p>
                    <h3 class="center">เครือข่ายสังคม</h3>
                    <p class="center grey-text text-darken-2">เครือข่ายสังคมสำหรับคนทุกวัย รองรับการมาถึงของสังคมผู้สูงอายุ (Ageing Society) ติดตามเพื่อนของคุณ ไม่ว่าคุณจะอยู่แห่งไหน คุณจะได้อยู่ใกล้กันตลอด</p>
                </div>
                <div class="col s12 m4 l4">
                    <p class="center"><i class="material-icons large deep-purple-text text-lighten-2">event</i></p>
                    <h3 class="center">สร้างกิจกรรม</h3>
                    <p class="center grey-text text-darken-2">คุณสามารถสร้างกิจกรรม ที่เชิญเพื่อนของคุณได้ สะดวกมากยิ่งขึ้น เจอกันง่ายขึ้น หายเหงาเร็วขึ้น และยังสามารถเข้าร่วมกิจจกรมของเพื่อนคุณได้อีกด้วย</p>

                </div>
                <div class="col s12 m4 l4">
                    <p class="center"><i class="material-icons large teal-text text-lighten-3">school</i></p>
                    <h3 class="center">ข้อมูลข่าวสาร</h3>
                    <p class="center grey-text text-darken-2">ด้วยปัจจุบัน ข้อมูลข่าวสารและความรู้ จำเป็นอย่างมากในการดำเนินชีวิต เราเตรียมมาให้คุณแล้วที่นี่ เพื่อสนับสนุนการเรียนรู้ตลอดชีวิต</p>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="row">
            <div class="col s10 m8 l8 offset-m4 offset-s1 offset-l2" style="margin-top: 200px; text-align: center">
                <h1 class="white-text" style="font-size: 2.5em">" คุณยังสนุกได้ ไม่จำกัดช่วงเวลาของชีวิต "</h1>
                <a class="waves-effect waves-light btn-large red accent-2 modal-trigger" href="#register" style="margin-top: 15px"><i class="material-icons left">account_box</i>สมัครเข้ามาเลย!</a>
                <a class="waves-effect waves-light btn-large white black-text" href="NewHomePage.html" style="margin-top: 15px"><i class="material-icons left">home</i>เข้าสู่หน้าเนื้อหา</a>

            </div>
        </div>
        <div class="parallax"><img src="img/light2.jpg"></div>
    </div>


</div>
@stop
