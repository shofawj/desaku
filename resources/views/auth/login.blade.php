@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-login">
                <div class="container">
                    <h1>Masuk ke akun anda</h1>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">

                            <div class="form-login">
                                <form method="POST" action="{{route('login')}}">
                                    @csrf
                                    <div class="group-email">
                                        <input id="email" type="email"
                                            class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                            value="{{ old('email') }}" placeholder="Type your email" required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="group-password">
                                        <input id="password" type="password" placeholder="Type your password"
                                            class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                            required>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="group-forgot">
                                        @if (Route::has('password.request'))
                                        <a class="forgot btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Lupa Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                    <br />
                                    <div class="group-button">

                                        <button type="submit" class="btn btn-submit">
                                            <h4>{{ __('Masuk') }}</h4>
                                        </button>

                                    </div>

                                    <div class="group-daftar">
                                        <p>Belum punya akun Desaku ?
                                            @if (Route::has('register'))
                                            <a href="{{ route('register') }}">{{ __('Daftar') }}</a>
                                            @endif
                                        </p>

                                    </div>

                                    <div class="group-google">
                                        <button id="customBtn" type="button" class="btn customGPlusSignIn">
                                            <span class="icon"></span>
                                            <span class="buttonText">Masuk dengan Google</span>
                                        </button>
                                    </div>

                                    <div class="group-facebook">
                                        <button id="customBtnFacebook" type="button" class="btn customGPlusSignIn">
                                            <span class="icon"></span>
                                            <span class="buttonText">Masuk dengan Facebook</span>
                                        </button>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-header">{{ __('Login') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
</div>
</div>
</div>
@endsection

@push('header-scripts')
<style>
    .card-login {
        padding: 5%;
        -webkit-box-shadow: 0px 10px 79px -9px rgba(143, 141, 143, 1);
        -moz-box-shadow: 0px 10px 79px -9px rgba(143, 141, 143, 1);
        box-shadow: 0px 10px 79px -9px rgba(143, 141, 143, 1);
        border: none;
        border-radius: 20px;
    }

    h1 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 300;
        color: #777;
        margin-bottom: 5%;
    }

    input {
        width: 100%;
        padding-left: 20px;
        padding-top: 16px;
        padding-bottom: 16px;
    }

    .group-email {
        margin-bottom: 3%;
    }

    .form-login {
        width: 100%;
        height: auto;
        margin-bottom: 2%;
    }


    .group-forgot {
        margin-top: 2%;

    }

    .forgot {
        float: right;
        color: #e67e22;
        font-size: 15px;
    }


    .group-button {
        margin-top: 4%;
    }

    .btn-submit {
        width: 100%;
        background: #e67e22;
        color: white;
        border-radius: 20px;
    }

    .btn-submit h4 {
        font-size: 25px;
        margin-top: 1%;
        font-weight: bold;
    }

    .group-daftar {
        width: 100%;
        margin-top: 5%;
    }

    .group-daftar p {
        text-align: center;
        font-size: 16px;

    }

    .group-daftar p a {
        color: #000000;
        font-weight: bold;
    }

    #customBtn {
        display: inline-block;
        background: white;
        color: #444;
        border-radius: 14px;
        width: 100%;
        /* border: thin solid #888; */
        box-shadow: 0px 10px 40px -10px rgba(143, 141, 143, 1);
        white-space: nowrap;
    }

    #customBtn:hover {
        cursor: pointer;
    }

    span.label {
        font-family: serif;
        font-weight: normal;
    }

    span.icon {
        background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
        display: inline-block;
        vertical-align: middle;
        width: 42px;
        height: 42px;
    }

    span.buttonText {
        display: inline-block;
        text-align: center;

        font-size: 21px;
        font-weight: bold;

    }

    .group-facebook {
        margin-top: 2%;
    }

    #customBtnFacebook {
        display: inline-block;
        background: blue;
        color: #444;
        border-radius: 14px;
        width: 100%;
        /* border: thin solid #888; */
        box-shadow: 0px 10px 40px -10px rgba(143, 141, 143, 1);
        white-space: nowrap;
    }

    #customBtnFacebook:hover {
        cursor: pointer;
    }

    #customBtnFacebook span.label {
        font-family: serif;
        font-weight: normal;
    }

    #customBtnFacebook span.icon {
        background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
        display: inline-block;
        vertical-align: middle;
        width: 42px;
        height: 42px;
    }

    #customBtnFacebook span.buttonText {
        display: inline-block;
        text-align: center;
        color: #ffffff;
        font-size: 21px;
        font-weight: bold;

    }

</style>

@endpush
