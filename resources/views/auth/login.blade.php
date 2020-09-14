@extends('layouts.main_login')

@section('title', 'Login Poli Jantung')

@section('container')
    
<div class="limiter">
    <div class="container-login100" style="background-image: url('loginassets/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-10 p-r-10 p-t-10 p-b-10">
            <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="container m-l-20">
                    <span class="login100-form-title p-b-20">
                        RSUD Dr.Iskak 
                    </span>
                    <p class="text-center"> Tulungagung </p> 
                    <div class="form-group">
                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Username
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="p-t-13 p-b-9">
                            <span class="txt1">
                                Password
                            </span>

                            
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
<span class="focus-input100"></span>
                        </div>
                    </div>


                    <div class="container-login100-form-btn m-t-17">
                        <button type="submit" class="login100-form-btn">
                            Sign In
                        </button>
                    </div>

                    
                    <div class="w-full text-center p-t-55">

                        <a href="#" class="txt2 bo1 m-l-5 pull-left">
                            lupa password?
                        </a>

                        <a href="#" class="txt2 bo1 pull-right">
                            Sign up now
                        </a>
                        <span class="txt2 pull-right">
                            Not a member? &nbsp;&nbsp;
                        </span>

                       
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection