@extends('site.layout')
@section('maincontent')

<div class="container" style="width: 40%;">

    <div class="row" style="margin-top: 160px;">
        <div class="col s12 m12 l10 offset-l1">
          <form action="{{url('/handleLogin')}}" method="POST">
            <ul class="collection with-header" >
                {{ csrf_field() }}
                <li class="collection-header"><center><h3>เข้าสู่ระบบ</h3></center></li>
                <li class="collection-item" >
                <div class="row" style="margin-top:15px;">

                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon-prefix" name="username" type="text" class="validate">
                    <label for="username">ชื่อเข้าสูระบบ</label>
                  </div>
                </div>
                  <div class="row">
                  <div class="input-field col s12">
                      <i class="material-icons prefix">https</i>
                      <input id="icon-prefix" name="password"type="password" class="validate">
                      <label for="password">รหัสผ่าน</label>
                    </div>
<br>
@if ($errors->has('username'))
    <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('username') }}</span>
@endif
<br>
@if ($errors->has('[password]'))
    <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('password') }}</span>
@endif
                  </div>
                  <div class="row" align="center">
                    <span>
                        <input type="checkbox" class="filled-in" id="filled-in-box" name="remember"/>
                        <label for="filled-in-box">ให้ฉันอยู่ในระบบต่อไป</label>
                        หรือ <a href="#" style="color:#d32f2f">ลืมรหัสผ่าน</a>
                      </span>
                  </div>
                </li>
                <li class="collection-item">
                  <div class="row" align="center">
                  <button class="btn waves-effect waves-light " type="submit" name="action">ลงชื่อเข้าใช้</button>
                </div>
                </li>
            </ul>
            </form>
          </div>

        </div>

    </div>


</div>

@stop
