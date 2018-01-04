@extends('layouts.app')

@section('content')
<div class="container22">
    @if (session('status'))
        {{session('status')}}
    @endif
    <h1 class="tituloregisto">Login</h1>
    <br><br>
    <fieldset>  
            <form  role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div id="row" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="less25">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                    </div>
                    <div class="less75">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div id="row" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="less25">
                    <label for="password" class="col-md-4 control-label">Password</label>
                    </div>   
                    <div class="less75">
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="less251">
                            <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember </label>
                </div>
                <div class="less75">
                    <button class="button2" type="submit" class="btn btn-primary">
                        Login
                    </button>
                </div>
                <br><br><br>
                    <a class="forgotpassword" href="{{ url('/password/reset') }}">
                        Forgot Your Password?
                    </a>
            </form>
        </div>

    
@endsection
