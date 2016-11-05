@extends('site.layout')
@section('maincontent')

<script type="text/javascript">
if (RegExp('regismultipage', 'gi').test(window.location.search)) {
  function registerP2(){
    var intro = introJs();
      intro.setOptions({
        showStepNumbers: false,
        nextLabel: "ต่อไป",
        prevLabel: "กลับ",
        skipLabel: "ข้าม",
        doneLabel: "เข้าใจแล้ว",

        steps: [
          {
            element: "#register2",
            intro: "กรอก <b>ชื่อผู้ใช้</b> ของคุณ โดยชื่อผู้ใช้นี้จะใช้เป็นชื่อเพื่อ <b>เข้าสู่ระบบ</b>"
          },
          {
            element: '#register3',
            intro: "กรอก <b>ชื่อ นามสกุลของ เพศ และอายุของคุณ</b> โดยในส่วนนี้จะแสดงบน <b>หน้าโปรไฟล์ของคุณ</b>",
            position: 'top'
          },
          {
            element: '#register4',
            intro: "กรอก <b>อีเมล์</b> ของคุณ และ <b>คำถามสำหรับรหัสผ่าน</b> เพื่อจะเป็นคำถามช่วยคุณเตือนความจำว่ารหัสผ่านของคุณคืออะไร โดย <b>รหัสผ่านของคุณ</b> ก็คือ <b>คำตอบของคำถามสำหรับรหัสผ่าน</b> ที่คุณได้เลือกไว้",
            position: 'top'
          },
          {
            element: '#register5',
            intro: "กรอก <b>อีเมล์</b> ของคุณที่นี้",
            position: 'bottom'
          },
          {
            element: '#register6',
            intro: "เลือก <b>คำถามสำหรับรหัสผ่าน</b> เพื่อช่วยเตือนความจำรหัสผ่านในการเข้าใช้งานระบบของคุณ",
            position: 'right'
          },
          {
            element: '#register7',
            intro: "กรอก <b>คำตอบของคำถามสำหรับรหัสผ่าน</b> ของคุณ",
            position: 'bottom'
          },
          {
            element: '#register8',
            intro: "กรอก <b>คำตอบของคำถามสำหรับรหัสผ่าน</b> ของคุณ <b>เหมือนเดิมอีกครั้ง</b> เพื่อยืนยันความถูกต้อง",
            position: 'bottom'
          },
          {
            element: '#register9',
            intro: "คลิก <b>ทีนี่</b> เพื่ออ่านข้อตกลงในการให้บริการ",
            position: 'bottom'
          },
          {
            element: '#register10',
            intro: "คลิกที่ <b>ช่องสีเหลี่ยม</b> เพื่อยืนยันว่าคุณได้อ่านข้อตกลงการให้บริการของเราเรียบร้อยแล้ว",
            position: 'bottom'
          },
          {
            element: '#register11',
            intro: "คลิก <b>ตกลง</b> เพื่อยืนยันการสมัครสมาชิก",
            position: 'bottom'
          },
        ]
      });
      intro.start();
  }

  setTimeout( "registerP2()", 1500);
  }
</script>


<div class="container" style="width: 90%;">

    <div class="row" style="margin-top: 160px;">
        <div class="col s12 m12 l10 offset-l1">
          <form method="POST" action="{{ url('/register') }}" id="registerForm">
            <ul class="collection with-header">
                {{ csrf_field() }}
                <li class="collection-header"><center><h4>สมัครสมาชิก</h4></center></li>
                <li id="register2" class="collection-item">
                  <br>
                  <i class="left material-icons">verified_user</i><p>ตรวจสอบชื่อผู้ใช้</p>
                <div class="section"></div>
                <center>
                    <div class="row">
                        <div class="col s3" style="margin-top: 19px;"><p style="margin-left: 40%;font-size:16pt">ชื่อผู้ใช้</p></div>
                        <div class="col s6 ">
                            <form class="col s11">
                                    <input style="font-size:18pt;text-align:center" type="text" class="validate" id="username" name="username" placeholder="ใส่ชื่อผู้ใช้ของคุณ" onchange="checkAvailableUsername()" onblur="checkAvailableUsername()" onfocus="checkAvailableUsername()">
                            </form>
                        </div>

                    </div>
                </center>
                <div id="usernameAvailability" align='center'>
                    <span style="font-size:16pt;color: #ffb74d;">กรุณากรอกชื่อผู้ใช้</span>
                </div>

                <div class="section"></div>

                </li>
                <li id="register3" class="collection-item">
                  <br><i class="left material-icons">perm_identity</i>
                <p>ข้อมูลส่วนตัว</p>
                <div class="section"></div>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col s8">

                                  <div class="input-field">

                                    <input style="font-size:18pt;" id="first_name" name="first_name" type="text" class="validate" value="{{ old('first_name' )}}" placeholder="ชื่อ">
                                </div>
                              </td>
                                <td class="col s4">
                                  <br>
                                  @if ($errors->has('first_name'))
                                      <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('first_name') }}</span>
                                  @endif
                              </td>
                                <td class="col s8">
                                  <div class="input-field">
                                    <input style="font-size:18pt;" id="last_name" name="last_name" type="text" class="validate" value="{{ old('last_name' )}}" placeholder="นามสกุล">
                                </div>
                                </td>
                                <td class="col s4">
                                  <br>
                                  @if ($errors->has('last_name'))
                                      <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('last_name') }}</span>
                                  @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="col s8">
                                  <br>
                                  <p>
                                    <span>เพศ: </span> &nbsp&nbsp
                                    <input style="font-size:18pt;" name="gender" type="radio" id="male" value="male" />
                                    <label for="male" style="color: #424242;font-size:16pt">ชาย</label>
                                    &nbsp &nbsp &nbsp
                                    <input style="font-size:18pt;" name="gender" type="radio" id="female" value="female" />
                                    <label for="female" style="color: #424242;font-size:16pt">หญิง</label>
                                </p>
                              </td>
                              <td class="col s4">
                                <br>
                                @if ($errors->has('gender'))
                                    <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('gender') }}</span>
                                @endif
                              </td>
                                <td class="col s8">
                                  <br>
                                  <p>
                                    <span>วันเกิด: </span> &nbsp&nbsp
                                    <input type="date" class="datepicker" name="dob" style="td{font-size:20pt}">
                                    <!--<input type="date" name="dob" value="1941-08-07">-->
                                </p>
                              </td>
                              <td class="col s4">
                                <br><br>
                                @if ($errors->has('dob'))
                                    <span style='font-size: 16pt;text-align: center;color: red;bottom: 0px'>{{ $errors->first('dob') }}</span>
                                @endif
                              </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="section"></div>

                </li>
                <li id="register4" class="collection-item">
                  <br>
                  <i class="left material-icons">lock</i><p>อีเมล์ และ คำถามสำหรับรหัสผ่าน</p>
                <br>
                <table>
                  <tbody>
                    <tr>
                      <td id="register5" class="col s8">
                        <label for="icon_prefix" class="email-label" >กรอกอีเมล์ของคุณ </label>
                        <input style="font-size:18pt;" class="input-field" placeholder="เช่น this_is_email@mail.com" type="email" name="email">
                      </td>
                      <td class="col s4">
                        <br>
                        @if ($errors->has('email'))
                        <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('email') }}</span>
                        @endif
                      </td>
                    </tr>
                    <tr >
                      <td class="col s8">
                        <div id="register6" class="input-field">
                          <select name="question">
                            <option value="" disabled selected>โปรดเลือกคำถาม (คำตอบของคุณจะถูกใช้เป็นรหัสผ่านในการลงชื่อเข้าใช้)</option>
                            @foreach($questions as $question)
                            <option value="{{$question->id}}">{{$question->question}}?</option>
                            @endforeach
                          </select>
                        </div>
                      </td>
                      <td class="col s4">
                        <br>
                        @if ($errors->has('question'))
                        <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('question') }}</span>
                        @endif
                      </td>
                    </tr>
                    <tr>

                      <td class="col s8">

                        <div id="register7" class="input-field">
                          <label for="icon_prefix email-label">กรอกคำตอบของคุณ </label>
                          <input id="answer" type="password" name="password" class="validate">
                        </div></td>
                        <td class="col s4">
                          <br>
                          @if ($errors->has('password'))
                          <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('password') }}</span>
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td class="col s8">
                          <div id="register8" class="input-field">
                            <label for="icon_prefix email-label">กรอกคำตอบของคุณอีกครั้ง </label>
                            <input id="confirm-answer" name="password_confirmation" type="password" class="validate">
                          </div></td>
                          <td class="col s4">
                            <br>
                            @if ($errors->has('password_confirmation'))
                            <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('password_confirmation') }}</span>
                            @endif
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  <div class="section"></div>
                <div align="center">


                </div>
                </li>
                <li class="collection-item" style="padding-bottom: 20px;">
                    <div class="section"></div>
                    <div align="center">
                      <span id="register9">
                          <label style="font-size: 18px;">อ่านข้อตกลงในการให้บริการ </label>
                          <a class="modal-trigger" href="#termofuse" style="font-size: 24px;">ที่นี่</a><br>
                      </span>
                    </div>
                    <div class="section"></div>

                    <div id="register10" align="center">
                        <input type="checkbox" class="filled-in checkbox" id="confirmCheck"/>

                        <label for="confirmCheck">ยืนยันการเข้าร่วมเป็นสมาชิก Boompow</label>
                    </div>
                    <div class="section">
                    </div>
                    <div align="center">

                      <button id="register11" class="blue darken-3 btn waves-effect waves-light" id="submit" type="submit" name="button"  >ตกลง</button>



                      <a href="{{url('/')}}" style="float: none" class="btn waves-effect waves-light modal-close">ยกเลิก</a>
                      <script type="text/javascript">
                        var confCheck = document.getElementById('confirmCheck');
                        var confSubmit = document.getElementById('confSubmit');
                        confCheck.onchange= function () {
                          //check if checkbox is checked
                          // if (confCheck.checked) {
                          //   confSubmit.disabled=false; //enable input
                          // } else {
                          //   confSubmit.disabled=true; //disable input
                          // }
                          confSubmit.disabled=!confCheck.checked;
                        };
                      </script>
                    </div>

                </li>
            </ul>
            </form>
            <div id="termofuse" class="modal" >
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
        </div>
    </div>
</div>
<script>

  function checkAvailableUsername(){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    });

    $(document).ready(function(){
      var username = $('#username').val();
      $.ajax({
        type: 'GET',
        // url: 'checkAvailableUsername',
        url: "{{url('/checkAvailableUsername')}}",
        data: {username: username},
        success: function(data){
          if (data==1) {
            $("div#usernameAvailability").html("<div style='color: red;'><span style='font-size: 16pt'>"+"ชื่อผู้ใช้นี้ซ้ำ กรุณากรอกชื่อผู้ใช้อื่น</span></div>");
          }
          else if(data==0){
            $("div#usernameAvailability").html("<div style='color: green;'><span style='font-size: 16pt'>"+"ชื่อผู้ใช้นี้สามารถใช้ได้</span></div>");
          }
          else if(data==2){
            $("div#usernameAvailability").html("<div style='color: #ffb74d;'><span style='font-size: 16pt'>"+"กรุณากรอกชื่อผู้ใช้</span></div>");
          }
        }
      });
    });
  }
</script>

</div>
