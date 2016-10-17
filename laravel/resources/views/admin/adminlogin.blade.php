@extends('admin.guestlayout')
@section('main')
<div id="page-wrapper">
  <div class="main-page login-page ">

    <div class="widget-shadow">
      <div class="login-top">
        <h4>Welcome back to Novus AdminPanel ! <br> Not a Member? <a href="signup.html">  Sign Up »</a> </h4>
      </div>
      <div class="login-body">
        <form action="">
          <input type="text" class="user" name="email" placeholder="Enter your email" required="">
          <input type="password" name="password" class="lock" placeholder="password">
          <input type="submit" name="Sign In" value="Sign In">
          <div class="forgot-grid">
            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
            <div class="forgot">
              <a href="#">forgot password?</a>
            </div>
            <div class="clearfix"> </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
@stop
