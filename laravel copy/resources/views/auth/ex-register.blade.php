
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Username</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="username">
              </div>
            </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="first_name">
              </div>
            </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Last Name</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="last_name">
              </div>
            </div>
            <div class="radio">
              <label><input type="radio" name="gender" value="male">Male</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="gender" value="female">Female</label>
            </div>

            <div class="input-append date" id="datepicker" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
              <input class="span2" size="16" type="text" value="12-02-2012" name="dob">
              <span class="add-on"><i class="icon-th"></i></span>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
              <label>Select a Question:</label>
              <select class="form-control" name="question">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Password</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password">
              </div>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-btn fa-user"></i> Register
                </button>
              </div>
            </div>
          </form>
