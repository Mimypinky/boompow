@extends('site.layout')
@section('maincontent')
<script>

$(document).ready(function(){
  $('#username').blur(function(){
    var username = $(this).val();
    $.ajax({
      type: 'POST',
      url: {{ url('/checkAvailableUsername') }},
      data: {username: username},
      dataType: 'JSON',
      success: function(data){
        $(#usernameAvailability).html(html);
      }),
      error: function(data){
        var errors = data.responseJSON;
        console.log(errors);
        // Render the errors with js ...
      }
    });
  });
});
</script>

<div class="container" style="width: 90%;">

    <div class="row" style="margin-top: 160px;">
        <div class="col s12 m12 l10 offset-l1">
          <form method="POST" action="{{ url('/register') }}">
            <ul class="collection with-header">
                {{ csrf_field() }}
                <li class="collection-header"><center><h4>สมัครสมาชิก</h4></center></li>
                <li class="collection-item"><i class="left material-icons">verified_user</i><p>ตรวจสอบชื่อผู้ใช้</p>
                <div class="section"></div>
                <center>
                    <div class="row">
                        <div class="col s3" style="margin-top: 19px;"><p style="margin-left: 40%;">ชื่อผู้ใช้</p></div>
                        <div class="col s6 ">
                            <form class="col s11">
                                    <input type="text" class="validate" id="username" name="username" placeholder="ใส่ชื่อผู้ใช้ของคุณ">
                            </form>
                        </div>
                        <div class="col s3" style="margin-top: 19px;"><a style="margin-left: -30%;" class="blue darken-3 waves-effect waves-light btn">ตรวจสอบ</a></div>
                    </div>
                </center>


                <div class="section"></div>
                @if ($errors->has('username'))
                    <div id="alert" class="card red darken-2" style="box-shadow: none;">
                        <div class="card-content white-text">
                            <i class="left material-icons">cancel</i><span>{{ $errors->first('username') }}</span>
                        </div>
                    </div>
                @endif
                <!--<div id="alert" class="card green darken-1" style="box-shadow: none;">
                    <div class="card-content white-text">
                        <i class="left material-icons">verified_user</i>ชื่อผู้ใช้: <span>ยายละม้าย คล้ายจะเป็นลม</span> สามารถใช้ได้
                    </div>
                </div>

                <div id="alert" class="card red darken-2" style="box-shadow: none;">
                    <div class="card-content white-text">
                        <i class="left material-icons">cancel</i>ชื่อผู้ใช้: <span>ยายละม้าย คล้ายจะเป็นลม</span> ไม่สามารถใช้ได้
                    </div>
                </div>-->

                </li>
                <li class="collection-item"><i class="left material-icons">perm_identity</i>
                <p>ข้อมูลส่วนตัว</p>
                <div class="section"></div>
                    <table>
                        <tbody>
                            <tr>
                                <td><div class="input-field">
                                    <label for="icon_prefix">ชื่อ</label>
                                    <input id="first_name" name="first_name" type="text" class="validate" value="{{ old('first_name' )}}">
                                </div></td>
                                <td><div class="input-field">
                                    <label for="icon_prefix">นามสกุล</label>
                                    <input id="last_name" name="last_name" type="text" class="validate" value="{{ old('last_name' )}}">
                                </div></td>
                            </tr>
                            <tr>
                                <td><p>
                                    <span>เพศ: </span> &nbsp&nbsp
                                    <input name="gender" type="radio" id="male" value="male" />
                                    <label for="male" style="color: #424242 ;">ชาย</label>
                                    &nbsp &nbsp &nbsp
                                    <input name="gender" type="radio" id="female" value="female" />
                                    <label for="female" style="color: #424242 ;">หญิง</label>
                                </p></td>
                                <!--<td>
                                  <div class="input-append date" id="datepicker" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                                    <input class="span2" size="16" type="text" value="12-02-2012" name="dob">
                                    <span class="add-on"><i class="icon-th"></i></span>
                                  </div>
                                </td>-->
                                <td><p>
                                    <span>วันเกิด: </span> &nbsp&nbsp
                                    <input type="date" class="datepicker" name="dob">
                                </p></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="section"></div>
                    @if ($errors->has('first_name'))
                        <div id="alert" class="card red darken-2" style="box-shadow: none;">
                            <div class="card-content white-text">
                                <i class="left material-icons">cancel</i><span>{{ $errors->first('first_name') }}</span>
                            </div>
                        </div>
                    @endif
                    @if ($errors->has('last_name'))
                        <div id="alert" class="card red darken-2" style="box-shadow: none;">
                            <div class="card-content white-text">
                                <i class="left material-icons">cancel</i><span>{{ $errors->first('last_name') }}</span>
                            </div>
                        </div>
                    @endif
                    @if ($errors->has('gender'))
                        <div id="alert" class="card red darken-2" style="box-shadow: none;">
                            <div class="card-content white-text">
                                <i class="left material-icons">cancel</i><span>{{ $errors->first('gender') }}</span>
                            </div>
                        </div>
                    @endif
                    @if ($errors->has('dob'))
                        <div id="alert" class="card red darken-2" style="box-shadow: none;">
                            <div class="card-content white-text">
                                <i class="left material-icons">cancel</i><span>{{ $errors->first('dob') }}</span>
                            </div>
                        </div>
                    @endif
                    <!--<div id="alert" class="card green darken-1" style="box-shadow: none;">
                        <div class="card-content white-text">
                            <i class="left material-icons">verified_user</i> กรอกข้อมูลเรียบร้อย
                        </div>
                    </div>

                    <div id="alert" class="card red darken-2" style="box-shadow: none;">
                        <div class="card-content white-text">
                            <i class="left material-icons">cancel</i> กรุณากรอก <span>วันเกิด</span> ให้เรียบร้อย
                        </div>
                    </div>-->

                </li>
                <li class="collection-item"><i class="left material-icons">lock</i><p>อีเมล์ และ คำถามสำหรับรหัสผ่าน</p>
                <div class="section"></div>
                <table>
                    <tbody>
                            <tr >
                                <td colspan="2">
                                    <div class="input-field">
                                        <select name="question">
                                            <option value="0" disabled selected>โปรดเลือกคำถาม (คำตอบของคุณจะถูกใช้เป็นรหัสผ่านในการลงชื่อเข้าใช้)</option>
                                            <option value="1">สัตว์เลี้ยงตัวแรกของคุณชื่ออะไร?</option>
                                            <option value="2">สีโปรดของคุณ คือสีอะไร?</option>
                                            <option value="3">อาหารไทยที่คุณชอบมากที่สุด คืออะไร?</option>
                                            <option value="4">เครื่องดื่มยี่ห้อโปรดของคุณ คืออะไร?</option>
                                            <option value="5">แฟนคนแรกของคุณ ชื่ออะไร?</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="col s6"><div class="input-field">
                                    <label for="icon_prefix email-label">กรอกคำตอบของคุณ </label>
                                    <input id="answer" type="password" name="password" class="validate">
                                </div></td>
                                <td class="col s6"><div class="input-field">
                                    <label for="icon_prefix email-label">กรอกคำตอบของคุณอีกครั้ง </label>
                                    <input id="confirm-answer" name="password_confirmation" type="password" class="validate">
                                </div></td>
                            </tr>
                            <tr>
                                <td colspan="1"><label for="icon_prefix" class="email-label" >กรอกอีเมล์ของคุณ </label><input class="input-field" placeholder="เช่น this_is_email@mail.com" type="email" name="email"></td>
                                <!--<td><label for="icon-prefix" class="email-label">กรอกอีเมล์ของคุณ อีกครั้ง</label><input class="input-field" placeholder="เช่น this_is_email@mail.com" type="email"></td>-->

                            </tr>
                        </tbody>
                </table>

                <div class="section"></div>
                    @if ($errors->has('question'))
                        <div id="alert" class="card red darken-2" style="box-shadow: none;">
                            <div class="card-content white-text">
                                <i class="left material-icons">cancel</i><span>{{ $errors->first('question') }}</span>
                            </div>
                        </div>
                    @endif
                    @if ($errors->has('password'))
                        <div id="alert" class="card red darken-2" style="box-shadow: none;">
                            <div class="card-content white-text">
                                <i class="left material-icons">cancel</i><span>{{ $errors->first('password') }}</span>
                            </div>
                        </div>
                    @endif
                    @if ($errors->has('password_confirmation'))
                        <div id="alert" class="card red darken-2" style="box-shadow: none;">
                            <div class="card-content white-text">
                                <i class="left material-icons">cancel</i><span>{{ $errors->first('password_confirmation') }}</span>
                            </div>
                        </div>
                    @endif
                    @if ($errors->has('email'))
                        <div id="alert" class="card red darken-2" style="box-shadow: none;">
                            <div class="card-content white-text">
                                <i class="left material-icons">cancel</i><span>{{ $errors->first('email') }}</span>
                            </div>
                        </div>
                    @endif
                    <!--<div id="alert" class="card green darken-1" style="box-shadow: none;">
                        <div class="card-content white-text">
                            <i class="left material-icons">verified_user</i> กรอกข้อมูลเรียบร้อย
                        </div>
                    </div>

                    <div id="alert" class="card red darken-2" style="box-shadow: none;">
                        <div class="card-content white-text">
                            <i class="left material-icons">cancel</i> กรุณากรอก <span>อีเมล์</span> ให้ตรงกัน
                        </div>
                    </div>-->
                </li>

                <li class="collection-item" style="padding-bottom: 20px;">
                    <div class="section"></div>
                    <div align="center">
                      <!--<input type="submit" value="ยืนยันการเข้าร่วม">-->

                      <button style="float: none" class="blue darken-3 btn waves-effect waves-light" type="submit" name="action">ยืนยันการเข้าร่วม</button>
                      <button style="float: none" class="btn waves-effect waves-light modal-close">ยกเลิก</button>

                    <!--<a class="blue darken-3 btn waves-effect waves-light modal-trigger" href="#confirm-register">เข้าร่วม</a>
                    <a class="btn waves-effect waves-light" href="">ยกเลิก</a>-->
                    </div>
                </li>



            </ul>
            </form>
        </div>

    </div>

    <!-- Confirm Register Modal Structure -->
    <div id="confirm-register" class="modal" style="width: 480px; height: 360px">
        <div class="modal-content">

            <div class="modal-close" align="right" ><a href="#!" style="font-size: 20px">ปิด</a></div>
            <h4 class="center">ยืนยันการเข้าร่วม</h4>
            <div class="row">
                <div class="input-field col s8 offset-s2">
                    <span>คุณกำลังเข้าร่วมเป็นสมาชิกของ <a href="">Boompow </a> คุณแน่ใจหรือไม่?</span>
                </div>
            </div>
            <div class="modal-footer" align="center">
                <span>
                    <label for="filled-in-box" style="font-size: 14px;">อ่านข้อตกลงในการให้บริการ </label>
                    <a class="modal-trigger" href="#">ที่นี่</a><br>

                </span>
                <div class="section"></div>
                <div align="center" style="margin-bottom: 10px;">
                  <button style="float: none" class="blue darken-3 btn waves-effect waves-light" type="submit" onclick="submitRegisterForm" name="action">ยืนยันการเข้าร่วม</button>
                  <button style="float: none" class="btn waves-effect waves-light modal-close">ยกเลิก</button>


                </div>

            </div>

    </div>

</div>


</div>
