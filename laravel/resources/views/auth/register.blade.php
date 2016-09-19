@extends('site.layout')
@section('maincontent')


<div class="container" style="width: 90%;">

    <div class="row" style="margin-top: 160px;">
        <div class="col s12 m12 l10 offset-l1">
          <form method="POST" action="{{ url('/register') }}" id="registerForm">
            <ul class="collection with-header">
                {{ csrf_field() }}
                <li class="collection-header"><center><h4>สมัครสมาชิก</h4></center></li>
                <li class="collection-item"><i class="left material-icons">verified_user</i><p>ตรวจสอบชื่อผู้ใช้</p>
                <div class="section"></div>
                <center>
                    <div class="row">
                        <div class="col s3" style="margin-top: 19px;"><p style="margin-left: 40%;font-size:16pt">ชื่อผู้ใช้</p></div>
                        <div class="col s6 ">
                            <form class="col s11">
                                    <input style="font-size:18pt;text-align:center" type="text" class="validate" id="username" name="username" placeholder="ใส่ชื่อผู้ใช้ของคุณ" onchange="checkAvailableUsername()">
                            </form>
                        </div>

                    </div>
                </center>
                <div id="usernameAvailability" align='center'>
                    <span style="font-size:16pt;color: #ffb74d;">กรุณากรอกชื่อผู้ใช้</span>
                </div>

                <div class="section"></div>

                </li>
                <li class="collection-item"><i class="left material-icons">perm_identity</i>
                <p>ข้อมูลส่วนตัว</p>
                <div class="section"></div>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                  @if ($errors->has('first_name'))
                                      <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('first_name') }}</span>
                                  @endif
                                  <div class="input-field">

                                    <input style="font-size:18pt;" id="first_name" name="first_name" type="text" class="validate" value="{{ old('first_name' )}}" placeholder="ชื่อ">
                                </div>
                                </td>

                                <td>
                                  @if ($errors->has('last_name'))
                                      <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('last_name') }}</span>
                                  @endif
                                  <div class="input-field">
                                    <input style="font-size:18pt;" id="last_name" name="last_name" type="text" class="validate" value="{{ old('last_name' )}}" placeholder="นามสกุล">
                                </div>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                  @if ($errors->has('gender'))
                                      <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('gender') }}</span>
                                  @endif
                                  <p>
                                    <span>เพศ: </span> &nbsp&nbsp
                                    <input style="font-size:18pt;" name="gender" type="radio" id="male" value="male" />
                                    <label for="male" style="color: #424242;font-size:16pt">ชาย</label>
                                    &nbsp &nbsp &nbsp
                                    <input style="font-size:18pt;" name="gender" type="radio" id="female" value="female" />
                                    <label for="female" style="color: #424242;font-size:16pt">หญิง</label>
                                </p>
                              </td>
                                <td>
                                  @if ($errors->has('dob'))
                                      <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('dob') }}</span>
                                  @endif
                                  <p>
                                    <span>วันเกิด: </span> &nbsp&nbsp
                                    <input type="date" class="datepicker" name="dob">
                                </p>
                              </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="section"></div>

                </li>
                <li class="collection-item"><i class="left material-icons">lock</i><p>อีเมล์ และ คำถามสำหรับรหัสผ่าน</p>
                <div class="section"></div>
                <table>
                    <tbody>
                            <tr >
                                <td colspan="2">
                                    <div class="input-field">
                                        <select name="question">
<<<<<<< HEAD
                                            <option value="0" disabled selected>โปรดเลือกคำถาม (คำตอบของคุณจะถูกใช้เป็นรหัสผ่านในการลงชื่อเข้าใช้)</option>
                                          @foreach($questions as $question)

                                            <option value="{{$question->id}}">{{$question->question}}?</option>

                                            @endforeach
=======
                                            <option value="" disabled selected>โปรดเลือกคำถาม (คำตอบของคุณจะถูกใช้เป็นรหัสผ่านในการลงชื่อเข้าใช้)</option>
                                            <option value="1">สัตว์เลี้ยงตัวแรกของคุณชื่ออะไร?</option>
                                            <option value="2">สีโปรดของคุณ คือสีอะไร?</option>
                                            <option value="3">อาหารไทยที่คุณชอบมากที่สุด คืออะไร?</option>
                                            <option value="4">เครื่องดื่มยี่ห้อโปรดของคุณ คืออะไร?</option>
                                            <option value="5">แฟนคนแรกของคุณ ชื่ออะไร?</option>
>>>>>>> 9060938f5737cba36ada8eb68e12d82414216885
                                        </select>
                                    </div>
                                </td>
                                @if ($errors->has('first_name'))
                                    <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('question') }}</span>
                                @endif
                            </tr>
                            <tr>

                                <td class="col s6">
                                  @if ($errors->has('password'))
                                      <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('password') }}</span>
                                  @endif
                                  <div class="input-field">
                                    <label for="icon_prefix email-label">กรอกคำตอบของคุณ </label>
                                    <input id="answer" type="password" name="password" class="validate">
                                </div></td>

                                <td class="col s6">
                                  @if ($errors->has('password_confirmation'))
                                      <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('password_confirmation') }}</span>
                                  @endif
                                  <div class="input-field">
                                    <label for="icon_prefix email-label">กรอกคำตอบของคุณอีกครั้ง </label>
                                    <input id="confirm-answer" name="password_confirmation" type="password" class="validate">
                                </div></td>
                            </tr>
                            <tr>
                                <td colspan="1">
                                  <label for="icon_prefix" class="email-label" >กรอกอีเมล์ของคุณ </label>
                                  <input style="font-size:18pt;" class="input-field" placeholder="เช่น this_is_email@mail.com" type="email" name="email">
                                </td>
                                <td>
                                  @if ($errors->has('email'))
                                      <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('email') }}</span>
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
                      <span>
                          <label style="font-size: 18px;">อ่านข้อตกลงในการให้บริการ </label>
                          <a class="modal-trigger" href="#" style="font-size: 24px;">ที่นี่</a><br>
                      </span>
                    </div>
                    <div class="section"></div>
                    <div align="center">
                        <input type="checkbox" class="filled-in" id="confirmCheck"/>
                        <label for="confirmCheck">ยืนยันการเข้าร่วมเป็นสมาชิก Boompow</label>
                    </div>
                    <div class="section">

                    </div>
                    <div align="center">
                      <button class="blue darken-3 btn waves-effect waves-light" id="submit" type="submit" name="button" onclick="confirmCheck2()" >ตกลง</button>
                      <a href="{{url('/')}}" style="float: none" class="btn waves-effect waves-light modal-close">ยกเลิก</a>
                    </div>

                </li>



            </ul>
            </form>

        </div>

    </div>


</div>
<script>



  function submitRegister(){
    document.getElementById("registerForm").submit();
  }
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
        dataType : '',
        url: 'checkAvailableUsername',
        data: {username: username},
        success: function(data){
          if (data==1) {
            $("div#usernameAvailability").html("<div style='color: red;'><span style='font-size: 16pt'>"+"ชื่อผู้ใช้นี้มีอยู่ในระบบแล้ว กรุณากรอกชื่อผู้ใช้อื่น</span></div>");
          }
          else {
            $("div#usernameAvailability").html("<div style='color: green;'><span style='font-size: 16pt'>"+"ชื่อผู้ใช้นี้สามารถใช้ได้</span></div>");

          }
        }
      });
    });
  }

</script>

</div>
