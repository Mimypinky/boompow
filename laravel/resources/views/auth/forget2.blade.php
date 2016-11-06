@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 40%;">

    <div class="row" style="margin-top: 160px;">
        <div class="col s12 m12 l10 offset-l1">

          <form action="{{url('/sendPassword')}}" method="POST">
            <ul class="collection with-header" >
                {{ csrf_field() }}
                <li class="collection-header">
                  <center><h3>ลืมรหัสผ่าน</h3></center>
                </li>
                <li class="collection-item" >
                <div class="row" style="margin-top:15px;">

                  <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <form class="col s11">
                            <input  type="text" class="validate" id="email" name="email"   data-position="right" data-delay="50"  onchange="checkEmail()" onblur="checkEmail()" >
                    </form>
                    <label for="inputUsername">E-mail</label>
                  </div>
                  <div id="emailAvailability" align='center'>
                      <span style="color: #ffb74d;">กรุณากรอกอีเมล์เพื่อส่งรหัสผ่าน</span>
                  </div>
                </div>



                </li>
                <li class="collection-item">
                  <div class="row" align="center">

                  <button id="loginBtn" class="btn waves-effect waves-light" type="submit" name="action" >ส่ง</button>
                </div>
                <div class="row" align="center">
                  <p id="message"></p>

              </div>
                </li>
            </ul>

            </form>
          </div>

        </div>

    </div>
    <script >
      function checkEmail() {
          $.ajaxSetup({
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          });
          $(document).ready(function() {
            var email = $('#email').val();
            $.ajax({

            type : 'GET',
            url: "{{url('/checkEmail')}}",
            data :{email:email},
            success:function(data){
              if (data==1) {
                $("div#emailAvailability").html("<div style='color: green;'><span style='font-size: 16pt'>"+"มีอีเมลนี้</span></div>");
              }
              else if(data==0){
                $("div#emailAvailability").html("<div style='color: red;'><span style='font-size: 16pt'>"+"ไม่มีอีเมล์นี้</span></div>");
              }
              else if(data==2){
                $("div#emailAvailability").html("<div style='color: #ffb74d;'><span style='font-size: 16pt'>"+"กรุณากรอกอีเมล์</span></div>");
              }
            }
          });
          });
      }
    </script>
<!--
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
          url: "{{url('/checkUsername')}}",
          data: {username: username},
          success: function(data){
            if (data==1) {
              $("div#emailAvailability").html("<div style='color: green;'><span style='font-size: 16pt'>"+"มีอีเมลนี้</span></div>");
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
              $("div#emailAvailability").html("<div style='color: red;'><span style='font-size: 16pt'>"+"ไม่มีอีเมล์นี้</span></div>");
            }
            else if(data==2){
              $("div#emailAvailability").html("<div style='color: #ffb74d;'><span style='font-size: 16pt'>"+"กรุณากรอกอีเมล์</span></div>");
            }
          }
        });
      });
    }

</script> -->
</div>
@stop
