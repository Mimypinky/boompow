@extends('admin.guestlayout')
@section('main')
<div class="col-md-6 validation-grids widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
      <h4>Register Form :</h4>
    </div>
    <div class="form-body">
      <form data-toggle="validator" method="POST" action="{{url('/administator/register')}}">
        {{ csrf_field() }}
        <div class="form-group">
          <input type="text" class="form-control" id="inputName" placeholder="Username" name="username" required>
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" data-error="Bruh, that email address is invalid" required>
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <span class="help-block with-errors">Please enter a valid email address</span>
        </div>
        <div class="form-group">
          <input type="password" data-toggle="validator" data-minlength="6" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
          <span class="help-block">Minimum of 6 characters</span>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="inputPasswordConfirm" name="password_confirmation" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm password" required>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <div class="radio">
            <label>
              <input type="radio" name="gender" value="female" required>
              Female
            </label>
          </div>
          <div class="radio">
            <label>
            <input type="radio" name="gender" value="male" required>
            Male
            </label>
          </div>
        </div>
        <div class="form-group">
          <div class="checkbox">
            <label>
              <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
              I have read and accept terms of use.
            </label>
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
@stop
