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
                          

      
    
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
</body>


 <footer class="theFooter">
  	<p>&copy; {{ config('app.name', 'Call A Physio') }} 2018</p><hr>
    	<div >
    	<div style="float: left; text-align: left; color: #f3f3f3;">
    	
    	<p><a class="footerItem" href="#">Faqs</a> </p>
    	<p><a class="footerItem" href="#">Terms and Conditions</a> </p>
  		</div>
     		<div  style="float: right; text-align: right;" class="">
                      <span><i class="fa fa-envelope"><a href="mailto:Support@callaphysio.com" class="footerItem">Raadaa Hire Support</a> </i></span>
     		</div>		
    	</div><br>
 </footer>
</html>
