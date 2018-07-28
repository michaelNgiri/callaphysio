<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#ee6e73">
    <link rel="apple-touch-startup-image" href="{{asset('favicon.ico')}}">
    <!-- app icon -->
    <link rel="icon" sizes="192x192" href="{{asset('favicon.ico')}}">
    <!-- favicon -->
    @yield('page_metas')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'cap') }} | @yield('title')</title>


    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/mdi/css/materialdesignicons.css')}}">
    <link href="{{ asset('assets/mdi/fonts/materialdesignicons-webfont.eot') }}" rel="stylesheet">
    <link href="{{ asset('assets/mdi/fonts/materialdesignicons-webfont.svg') }}" rel="stylesheet">
    <link href="{{ asset('assets/mdi/fonts/materialdesignicons-webfont.ttf') }}" rel="stylesheet">
    <link href="{{ asset('assets/mdi/fonts/materialdesignicons-webfont.woff') }}" rel="stylesheet">
    <link href="{{ asset('assets/mdi/fonts/materialdesignicons-webfont.woff2') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <style type="text/css">
        .page-item.active .page-link{
            background-color: #ee6e73;
            border-color: #ee6e73;
        }
        nav{
            border-bottom: 0.1em solid red !important;
        }
        
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md white red-text darken-4 " style="color:#fff;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: #ee6e73;" title="Return to homepage">
                    <b>{{ config('app.name', 'cap') }}</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div style="color: #ee6e73;" class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a style="color: #ee6e73;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a style="color: #ee6e73;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a style="text-transform: capitalize; color: #ee6e73;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name() }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form{{Request::url()}}').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <form id="logout-form{{Request::url()}}" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.dropdown.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- <script type="text/javascript">

    var elem = document.createElement('script');

    elem.onload = function () {

        jQuery(document).ready(function () {

            var bootstrap = document.createElement('script');

            bootstrap.src = 'bootstrap src here';

            document.getElementsByTagName('head')[0].appendChild(bootstrap);

 

 

                //add whatever other javascript/jquery you would like

 

        });

    };

    elem.src = 'jquery src here';

    document.getElementsByTagName('head')[0].appendChild(elem);

</script> -->
@yield('page_scripts')
</body>
</html>
