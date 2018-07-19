@extends('layouts.app')
@section('title', 'Error')
@section('content')
<div class="row"><br><br>
	<div class="col-md-12" style="text-align: center; color: #d3d3d3; position: fixed;">
		{{--<h3>Oops Something went wrong</h3>--}}
		{{--<i style="font-size: 120px; text-align: center;" class="mdi mdi-link-off red-text"></i>--}}
		<h2>sorry hon! you seem to be on the wrong path, do you need a physio?</h2><br>
		<a href="{{route('home')}}">
            <img style="border-radius: 10%;" src="{{asset('img/profile-pictures/default-physio.jpg')}}" alt="return home">
            <br><br>
            <p><b class="red-text darken-4">Call a Physio</b></p>
        </a>
	</div>
</div>
@endsection