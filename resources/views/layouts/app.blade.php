<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.css">
    <style>
        .raiting {
            position: relative;
            width: 300px;
            height: 15px;
            border-radius: 5px;
            background:#BCC4CE;
            z-index: 1;
        }
        .raiting .bar {
            position: absolute;
            z-index: -1;
            height:15px;
            width: 0%;
            border-radius: 5px;
            background: #ADF66B;
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
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="">
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
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="padding-bottom:0;text-align: center">
                                    <img src="{{asset(Auth::user()->lang->image)}}" alt="" style="max-width: 30px;padding: 0; margin: 0"><br>
                                    <span style="line-height:30px">{{ Auth::user()->lang->title }} <br></span>
                                    <span class="caret" style="vertical-align: top;"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    @foreach($languages->where('id', '<>', Auth::user()->lang->id) as $lang)
                                    <li>
                                        <a href="#{{$lang->name}}" onclick="event.preventDefault();
                                                     document.getElementById('language-{{ $lang->id }}').submit();">
                                            <img src="{{asset($lang->image)}}" alt="" style="max-width: 30px;padding: 0; margin: 0"> {{ $lang->title }}
                                        </a>

                                        <form id="language-{{ $lang->id }}" action="{{ route('dashboard.lang.edit', [ $lang->id ]) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <img src="{{ asset(Auth::user()->photo) }}" alt=""> <span class="caret"></span>
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
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
