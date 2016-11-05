@extends('site.layout')
@section('maincontent')

<div class="container" style="width: 40%;">

    <div class="row" style="margin-top: 160px;">
        <div class="col s12 m12 l10 offset-l1">

          <form action="{{url('/handleLogin')}}" method="POST">
            <ul class="collection with-header" >
                {{ csrf_field() }}
                <li class="collection-header">
                  <center><h3>ลืมรหัสผ่าน</h3></center>
                </li>
                <li class="collection-item" >
                <div class="row" style="margin-top:15px;">

                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="inputUsername" name="username" type="text" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="กรอกชื่อผู้ใช้" value="{{ old('username') }}" onchange="allowLogin()" onmouseleave="allowLogin()">
                    <label for="inputUsername">ชื่อเข้าสูระบบ</label>
                  </div>
                </div>
                <div class="row" style="margin-top:15px;">

                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="inputUsername" name="username" type="text" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="กรอกชื่อผู้ใช้" value="{{ old('username') }}" onchange="allowLogin()" onmouseleave="allowLogin()">
                    <label for="questpass">คำถามรหัสผ่าน</label>
                  </div>
                </div>
                  <div class="row">
                  <div class="input-field col s12">
                      <i class="material-icons prefix">https</i>
                      <input id="inputPassword" name="password"type="password" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="กรอกรหัสผ่าน" onchange="allowLogin()" onfocus="allowLogin()" onmouseleave="allowLogin()">
                      <label for="inputPassword">รหัสผ่าน</label>
                    </div>

                  </div>
                  <div class="row" align="center">
                    <span>
                        <input type="checkbox" class="filled-in" name="remember"/>
                        <label for="loginBtn">ให้ฉันอยู่ในระบบต่อไป</label>
                        หรือ <a href="#" style="color:#d32f2f">ลืมรหัสผ่าน</a>
                      </span>
                  </div>
                </li>
                <li class="collection-item">
                  <div class="row" align="center">
                  <script type="text/javascript">

                  </script>
                  <button id="loginBtn" class="btn waves-effect waves-light" type="submit" name="action" >ลงชื่อเข้าใช้</button>
                </div>
                </li>
            </ul>
            <script type="text/javascript">
            // function allowLogin(){
            //   var inputUsername = document.getElementById('inputUsername');
            //   var inputPassword = document.getElementById('inputPassword');
            //   var loginBtn = document.getElementById('loginBtn');
            //     if(inputUsername.value.length > 0 && inputPassword.value.length > 0) {
            //       loginBtn.disabled = false;
            //       console.log('yes');
            //     }
            //     else{
            //       loginBtn.disabled = true;
            //       console.log('no');
            //     }
            // }
            </script>
            </form>
          </div>

        </div>

    </div>
    <script>
    function findQuesPass(){
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
          url: "{{url('/findQuesPass')}}",
          data: {username: username},
          success: function(data){
            // if (data==1) {
            //   $("div#usernameAvailability").html("<div style='color: red;'><span style='font-size: 16pt'>"+"ชื่อผู้ใช้นี้ซ้ำ กรุณากรอกชื่อผู้ใช้อื่น</span></div>");
            // }
            // else if(data==0){
            //   $("div#usernameAvailability").html("<div style='color: green;'><span style='font-size: 16pt'>"+"ชื่อผู้ใช้นี้สามารถใช้ได้</span></div>");
            // }
            // else if(data==2){
            //   $("div#usernameAvailability").html("<div style='color: #ffb74d;'><span style='font-size: 16pt'>"+"กรุณากรอกชื่อผู้ใช้</span></div>");
            // }
          }
        });
      });
    }
</script>
</div>

@stop
