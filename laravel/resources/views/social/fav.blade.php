@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%;">
    <div class="card-panel yellow darken-4 fav-head">
        <span class="white-text"><h4 style="margin-top: -3px;" class="center-align"><i class="fa fa-star" aria-hidden="true"></i> รายการโปรด</h4>
        </span>
    </div>
    <div class="row">
        <div class="col s12">
          @foreach($myFav as $data)
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{url('img/healthy.jpg')}}">
                    </div>
                    <div class="card-content" style="height:200px;background-color:eecc6;">
                        <h5 >{{$data->content_title}}</h5>
                        <div><p class="wordwrap">{{$data->description}}</p></div>
                    </div>
                    <div class="card-action">
                        <a href="{{ url('content/favourite/'.$data->id) }}">เพิ่มเติม</a>
                  </div>
                </div>
            </div>
            @endforeach

        </div>
      </div>

                            <!-- Modal Structure -->
                            <div id="modal1" class="modal" style="width: 480px;">
                                <div class="modal-content" >
                                    <form action="check-login.php" method="post" id="loginform" name="loginform">
                                        <div class="modal-close" align="right" ><a href="#!" style="font-size: 20px">ปิด</a></div>
                                        <h4 class="center">เข้าสู่ระบบ</h4>
                                        <div class="row">
                                            <div class="input-field col s8 offset-s2">
                                                <input id="username" type="text" class="validate" name="username" placeholder="ชื่อเข้าใช้งาน">
                                            </div>

                                            <div class="input-field col s8 offset-s2">
                                                <input id="password" type="password" class="validate" name="password" placeholder="รหัสผ่าน">
                                            </div>
                                        </div>


                                        <div class="modal-footer" align="center">
                                            <span>
                                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                                <label for="filled-in-box">ให้ฉันอยู่ในระบบต่อไป</label>
                                                หรือ <a href="#">ลืมรหัสผ่าน</a></span>
                                            </div>
                                            <div align="center" style="margin-bottom: 10px">
                                                <button class="btn waves-effect waves-light" type="submit" name="action">ลงชื่อเข้าใช้</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>



                            </div>

@stop
