<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ilkomedia') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('app-assets/css/emoji.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/jquery.scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/style.css') }}" rel="stylesheet">
    @yield('css')
    <style>
         width
        ::-webkit-scrollbar {
            width: 7px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #a7a7a7;
        }
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #929292;
        }
        ul {
            margin: 0;
            padding: 0;
        }
        li {
            list-style: none;
        }
        .user-wrapper, .chat-wrapper {
            border: 1px solid #dddddd;
            overflow-y: auto;
        }
        .user-wrapper {
            height: 600px;
        }
        .user {
            cursor: pointer;
            padding: 5px 0;
            position: relative;
        }
        .user:hover {
            background: #eeeeee;
        }
        .user:last-child {
            margin-bottom: 0;
        }
        .pending {
            position: absolute;
            left: 63px;
            top: 65px;
            background: #b600ff;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }
        .media-left {
            margin: 0 10px;
        }
        .media-left img {
            margin-left: 17px;
            width: 64px;
            border-radius: 64px;
        }
        .media-body p {
            margin: 6px 0;
        }
        .chat-wrapper {
            padding: 10px;
            height: 536px;
            background: #eeeeee;
        }
        .chats .chat {
            margin-bottom: 15px;
        }
        .chats .chat:last-child {
            margin-bottom: 0;
        }
        .received, .sent {
            width: 45%;
            padding: 3px 10px;
            border-radius: 10px;
        }
        .received {
            background: #ffffff;
        }
        .sent {
            background: #27aae1;
            float: right;
            text-align: right;
        }
        .chat p {
            margin: 5px 0;
        }
        .date {
            color: #777777;
            font-size: 12px;
        }
        /*.active {*/
        /*    background: #eeeeee;*/
        /*}*/

        input[type=textarea] {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0 0 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #cccccc;
        }
        input[type=textarea]:focus {
            border: 1px solid #aaaaaa;
        }

         .avatar-upload {
             position: relative;
             max-width: 190px;
             margin: 20px auto 25px;
         }
         .avatar-upload .avatar-edit {
             position: absolute;
             right: 12px;
             z-index: 1;
             top: 10px;
         }
         .avatar-upload .avatar-edit input {
             display: none;
         }
         .avatar-upload .avatar-edit input + label {
             display: inline-block;
             width: 34px;
             height: 34px;
             margin-bottom: 0;
             border-radius: 100%;
             background: #FFFFFF;
             border: 1px solid transparent;
             box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
             cursor: pointer;
             font-weight: normal;
             transition: all 0.2s ease-in-out;
         }
         .avatar-upload .avatar-edit input + label:hover {
             background: #f1f1f1;
             border-color: #d6d6d6;
         }
         .avatar-upload .avatar-edit input + label:after {
             content: "\f040";
             font-family: 'FontAwesome';
             color: #757575;
             position: absolute;
             top: 10px;
             left: 0;
             right: 0;
             text-align: center;
             margin: auto;
         }
         .avatar-upload .avatar-preview {
             width: 192px;
             height: 192px;
             position: relative;
             border-radius: 100%;
             border: 6px solid #F8F8F8;
             box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
         }
         .avatar-upload .avatar-preview > div {
             width: 100%;
             height: 100%;
             border-radius: 100%;
             background-size: cover;
             background-repeat: no-repeat;
             background-position: center;
         }
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Ilkomedia') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
{{--                        <li><a href="{{ route('login') }}">Login</a></li>--}}
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; margin-right: 5px; border-radius:100%">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('profile') }}">
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
{{--    <script type="text/javascript" src="{{ asset('app-assets/js/bootstrap.min.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('app-assets/js/jquery.appear.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('app-assets/js/jquery.incremental-counter.js') }}"></script>
<script type="text/javascript" src="{{ asset('app-assets/js/jquery.scrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('app-assets/js/jquery.sticky-kit.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('app-assets/js/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('app-assets/js/masonry.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('app-assets/js/script.js') }}"></script>
<script type="text/javascript" src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@yield('js')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    var receiver_id = '';
    var my_id = "{{ Auth::id() }}";
    $(document).ready(function () {
        // ajax setup form csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('16f57a311ec44c74b8e9', {
            cluster: 'ap1',
            forceTLS: true
        });
        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {
            if (my_id == data.from) {
                $('#' + data.to).click();
            } else if (my_id == data.to) {
                if (receiver_id == data.from) {
                    $('#' + data.from).click();
                } else {
                    var pending = parseInt($('#' + data.from).find('.pending').html());
                    if (pending) {
                        $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                        $('#' + data.from).append('<span class="pending">1</span>');
                    }
                }
            }
        });
        $('.user').click(function () {
            $('.user').removeClass('active');
            $(this).addClass('active');
            $(this).find('.pending').remove();
            receiver_id = $(this).attr('id');
            $.ajax({
                type: "get",
                url: "chat/" + receiver_id, // need to create this route
                data: "",
                cache: false,
                success: function (data) {
                    $('#chats').html(data);
                    scrollToBottomFunc();
                }
            });
        });
        $(document).on('keyup', '.input-text input', function (e) {
            var chat = $(this).val();

            if (e.keyCode == 13 && chat != '' && receiver_id != '') {
                $(this).val('');
                var datastr = "receiver_id=" + receiver_id + "&chat=" + chat;
                $.ajax({
                    type: "post",
                    url: "chat",
                    data: datastr,
                    cache: false,
                    success: function (data) {
                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                        scrollToBottomFunc();
                    }
                })
            }
        });
    });
    function scrollToBottomFunc() {
        $('.chat-wrapper').animate({
            scrollTop: $('.chat-wrapper').get(0).scrollHeight
        }, 50);
    }
</script>
</body>
</html>
