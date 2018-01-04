@extends('layouts.app')

@section('content')
<div class="container22">
<h1 class="tituloregisto">Reset password</h1>
    <br><br>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <fieldset>
                    <form  role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div id="row" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="less25">
                            <label for="email">E-Mail Address</label>
                            </div>
                            <div class="less75">
                                <input id="email" type="email" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div id="row" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="less25">
                            <label for="password" >Password</label>
                            </div>
                            <div class="less75">
                                <input id="password" type="password" name="password" required>

                                @if ($errors->has('password'))
                                    <span>
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div  id="row" class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <div class="less25">
                            <label for="password-confirm" >Confirm Password</label>
                            </div>
                            <div class="less75">
                                <input id="password-confirm" type="password" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span>
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                <button class="button1"type="submit" >
                                    Reset Password
                                </button>
                    </form>
                    </fieldset>
                </div>
@endsection
