@extends('site.layout')
@section('maincontent')

<div class="container" style="width: 40%;">

    <div class="row" style="margin-top: 160px;">
        <div class="col s12 m12 l10 offset-l1">

          <form action="{{url('/handleLogin')}}" method="POST">
            <ul class="collection with-header" >
                {{ csrf_field() }}
                <li class="collection-header">
                  <center><h3>เข้าสู่ระบบ</h3></center>
                  @if(isset($message))
                  <div id="message"></div>
                  @endif
                </li>
                <li class="collection-item" >
                <div class="row" style="margin-top:15px;">

                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <form class="col s11">
                            <input  type="text" class="validate" id="username" name="username"  onchange="checkAvailableUsername()" onblur="checkAvailableUsername()" onfocus="checkAvailableUsername() " >
                    </form>
                    <label for="inputUsername">ชื่อเข้าสู่ระบบ</label>
                  </div>
                  <div id="usernameAvailability" align='center'>
                      <span style="color: #ffb74d;">กรุณากรอกชื่อผู้ใช้</span>
                  </div>
                </div>

                <div class="row" style="margin-top:15px;">

                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input style="font-size:16pt;color:#e57373 "disabled="true"id="questpass" name="questpass" type="text" class="validate tooltipped" data-position="right" value="" placeholder="คำถามสำหรับรหัสผ่าน" >

                  </div>
                </div>
                  <div class="row">
                  <div class="input-field col s12">
                      <i class="material-icons prefix">https</i>
                      <input id="inputPassword" name="password"type="password" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="กรอกรหัสผ่าน" >
                      <label for="inputPassword">รหัสผ่าน</label>
                    </div>

                  </div>
                  <div class="row" align="center">
                    <span>
                        <input type="checkbox" class="filled-in" name="remember" checked="checked"/>
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
<<<<<<< HEAD
            //   var inputUsername = document.getElementById('username');
=======
            //   var inputUsername = document.getElementById('inputUsername');
>>>>>>> 4feed475a2c4e840328de280cdc020d1ede7ebc5
            //   var inputPassword = document.getElementById('inputPassword');
            //   var loginBtn = document.getElementById('loginBtn');
            //     if(inputUsername.value.length > 0 && inputPassword.value.length > 0) {
            //       loginBtn.disabled = false;
<<<<<<< HEAD
            //       // console.log('yes');
            //     }
            //     else{
            //       loginBtn.disabled = true;
            //       // console.log('no');
=======
            //       console.log('yes');
            //     }
            //     else{
            //       loginBtn.disabled = true;
            //       console.log('no');
>>>>>>> 4feed475a2c4e840328de280cdc020d1ede7ebc5
            //     }
            // }
            </script>
            </form>
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
          url: "{{url('/checkUsername')}}",
          data: {username: username},
          success: function(data){
            if (data==1) {
              $("div#usernameAvailability").html("<div style='color: green;'><span style='font-size: 16pt'>"+"มีชื่อผู้ใช้นี้</span></div>");
              $(document).ready(function(){
                var username = $('#username').val();
                $.ajax({
                  type: 'GET',
                  // url: 'checkAvailableUsername',
                  url: "{{url('/findQuesPass')}}",
                  data: {username: username},
                  success: function(data){
                    if(data){
                      // var q = data.get(0);
                      $("#questpass").val(data.question);
                      $("#message").html("<p style='font-size:12pt;color:red'>ชือผู้ใช้หรือรหัสผ่านไม่ถูกต้อง <br> กรุณากรอกใหม่</p>");
                      // document.getElementById('questpass').val(data);
                      // console.log(data);
                    }else if(!data){
                      console.log('ไม่มีไง อีบ้า');
                    }
                  }
                });
              });

            }
            else if(data==0){
              $("div#usernameAvailability").html("<div style='color: red;'><span style='font-size: 16pt'>"+"ไม่มีชื่อผู้ใช้นี้</span></div>");
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

@stop
