@extends('layouts.app')

@section('content')

<div class="container22">
<h1 class="tituloregisto">Register</h1>
<br><br>
<fieldset>
        <form role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <div id="row" class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="less25">
                <label for="name">Name</label>
                </div>
                <div class="less75">
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span >
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div id="row" class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
            <div class="less25">
                <label for="lastname">Last Name</label>
                </div>
                <div class="less75">
                    <input id="lastname" type="text" name="lastname" value="{{ old('lastname') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span>
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            

            <div id="row" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="less25">
                <label for="email" >E-Mail Address</label>
                </div>
                <div class="less75">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span >
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div  id="row" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="less25">
                <label for="password" >Password</label>
            </div>
                <div class="less75">
                    <input id="password" type="password"  name="password" required>
                    @if ($errors->has('password'))
                        <span>
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div  id="row" class="form-group">
            <div class="less25">
                <label for="password-confirm" >Repeat Password</label>
            </div>
                <div class="less75">
                    <input id="password-confirm" type="password"  name="password_confirmation" required>
                </div >

                <input type="hidden" name="usertype" value="cliente">
            </div>

            <div id="row"  class="form-group">

                    <button class="button1" type="submit">
                        Register
                    </button>

            </div>
         </form>
</fieldset>
</div>
@endsection
