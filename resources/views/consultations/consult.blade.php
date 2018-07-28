@extends('layouts.app')
@section('title', 'Consult')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12">
        <div class="card" style="text-align: center;">
            <div class="card-header">
                <!-- <img style="float: left; border-radius: 30%;" height="40" width="50" src="{{asset('img/profile-pictures/default-physio.jpg')}}"> -->
                <span style="float: left; font-style: italic;"><i class="mdi mdi-message" style="color: #005152; font-size: 1em;"></i>[offline]</span>
                <b style="color: #003C3D;">Consult {{$physio->name()}}</b> <img style="float: right; border-radius: 30%;" height="40" width="50" src="{{asset($physio->photo())}}" alt="{{$physio->name()." 's picture"}}">
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-4 appointment">
                    <i class="mdi mdi-phone-classic teal-text" style="font-size: 10em;"></i>
                    <p><a href=""><b>Call This Physio</b></a></p>
                </div>
                <div class="col-md-4 chat darken-2" style="color:#A52A2A;">
                    <i class="mdi mdi-message" style="font-size: 10em;"></i>
                    <p><a href=""><b>Chat Online</b></a></p>
                </div>
                <div class="col-md-4 appointment" style="color: #1d7d74;">
                    <i class="mdi mdi-timelapse" style="font-size: 10em;"></i>
                   <p> <a href=""><b>Book Appointment</b></a></p>
                </div>
            </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
    </div>
</div>
@endsection