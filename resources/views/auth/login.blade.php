@extends('layout')

@section('content')
<div class="wrapper">
  <div class="container m-auto">
    <div class="row m-auto">
      <div class="col-md-6 m-auto">
        <div id="login" class="panel login panel-default login-glass">
          <div class="login panel-heading"><strong>Login</strong></div>
          <div class="login panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class=" row mb-3 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-sm-2 col-form-label"><strong>E-Mail</strong></label>
                <div class="col-md-10">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="row mb-3 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-sm-2 col-form-label"><strong>Contraseña</strong></label>
                <div class="col-md-10">
                  <input id="password" type="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="row">
                  <button type="submit" class="col-md-4 offset-md-4 btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <img class="img" src="{{ asset('img/login.jpg') }}"/>
      </div>
    </div>
  </div>
</div>
@endsection
