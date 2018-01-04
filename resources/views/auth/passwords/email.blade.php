@extends('layouts.app')



<!-- Main Content -->
@section('content')
<div class="container22">
<h1 class="tituloregisto">Reset Password</h1>
    <br><br>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <fieldset>
                    <form  role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div  id="row" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="less25">
                            <label for="email" >E-Mail Address</label>
                            </div>
                            <div class="less75">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span >
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                <button class="button1" type="submit" >
                                    Send Password Reset Link
                                </button>
                    </form>
                    </fieldset>
</div>
@endsection
