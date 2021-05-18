@extends('layout')

@section('content')
<div class="wrapper">
  <div class="container m-auto">
    <div class="row m-auto">
      <div class="col-md-6 m-auto">
        <div class="panel panel-default login-glass">
          <div class="panel-heading"><strong>Login</strong></div>
          <div class="panel-body">
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
                <label for="password" class="col-sm-2 col-form-label"><strong>Password</strong></label>
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
        <img class="img" src="https://image.freepik.com/vector-gratis/estudiantes-felices-libros-excelentes-notas_53562-9975.jpg"/>
      </div>
    </div>
  </div>
  <div class="wave" >
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
      <path d="M-40.91,36.02 C152.64,-48.84 146.44,91.28 503.10,69.56 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #627fdb;"></path>
    </svg>
  </div>
</div>
@endsection
