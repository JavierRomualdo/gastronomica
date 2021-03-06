@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
      <div class="card card-signup">
        <form class="form" method="POST" action="{{ route('register') }}">
          <div class="header header-primary text-center">
            <h4>Registro</h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-simple btn-just-icon">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-simple btn-just-icon">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-simple btn-just-icon">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <p class="text-divider">Complete tus Datos:</p>
          <div class="content">
            {{ csrf_field() }}
            <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <span class="input-group-addon">
                <i class="material-icons">face</i>
              </span>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="First Name...">

              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
              <!--<input type="text" class="form-control" placeholder="First Name...">-->
            </div>

            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon">
                <i class="material-icons">email</i>
              </span>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email...">

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
              <!--<input type="text" class="form-control" placeholder="Email...">-->
            </div>

            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <span class="input-group-addon">
                <i class="material-icons">lock_outline</i>
              </span>
              <input id="password" type="password" class="form-control" name="password" required placeholder="Password...">

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
              <!--<input type="password" placeholder="Password..." class="form-control" />-->
            </div>

            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">lock_outline</i>
              </span>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              <!--<input type="password" placeholder="Password..." class="form-control" />-->
            </div>

            <!-- If you want to add a checkbox to this form, uncomment this code

            <div class="checkbox">
              <label>
                <input type="checkbox" name="optionsCheckboxes" checked>
                Subscribe to newsletter
              </label>
            </div> -->
          </div>
          <div class="footer text-center">
            <button type="submit" class="btn btn-simple btn-primary btn-lg">
                Register
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
