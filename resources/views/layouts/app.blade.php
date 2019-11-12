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
            left: 13px;
            top: 9px;
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
            background: #3bebff;
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
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
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
@yield('js')
</body>
</html>
