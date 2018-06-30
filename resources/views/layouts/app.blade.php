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
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
                          


    
<script src="{{ asset('js/app.js') }}"></script>
</body>



</html>
