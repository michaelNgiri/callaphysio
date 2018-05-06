<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'cap') }}</title>
    <!-- material design icons -->
    <link href="{{ asset('mdi/fonts/materialdesignicons-webfont.eot') }}" rel="stylesheet">
    <link href="{{ asset('mdi/fonts/materialdesignicons-webfont.svg') }}" rel="stylesheet">  
    <link href="{{ asset('mdi/fonts/materialdesignicons-webfont.ttf') }}" rel="stylesheet">  
    <link href="{{ asset('mdi/fonts/materialdesignicons-webfont.woff') }}" rel="stylesheet">
    <link href="{{ asset('mdi/fonts/materialdesignicons-webfont.woff2') }}" rel="stylesheet">  
    
    <!-- material design fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mdi/css/materialdesignicons.min.css.map') }}">
  
  
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
                    <!-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                        <div class="container">
                            <div class="container">
                    <div class="row">
                        <div class="col 2">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'cap') }}
                            </a>
                        </div>
                        <div class="col 12 push-2 red-text hoverable">
                            
                        </div>
                    </div>
                </div>
 -->
                

      <!--           
        <main class="py-4">
           // @yield('content')
        </main> -->
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
</body>
</html>
