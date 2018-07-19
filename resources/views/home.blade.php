@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{route('home.filter-by-state')}}" method="post" class="form-group left-align" style="display: inline;">
                    @csrf
                    <label for="location">Change Location</label>
                    <select name="state" id="state" class="form-control">
                        <option value="">Choose a different State</option>
                        <option class="red-text darken-4" value="">Show All</option>
                        @forelse($states as $state)
                            @if(!is_null($currentState))
                                @if($state->id == $currentState->id)
                                    <option class="red-text darken-4" name="state" value="{{$state->id}}" selected>{{$state->name}}</option>
                                @else
                                    <option name="state" value="{{$state->id}}">{{$state->name}}</option>
                                @endif
                            @else
                                <option name="state" value="{{$state->id}}">{{$state->name}}</option>
                            @endif
                        @empty
                            <p>No state here! are you in space?</p>
                        @endforelse
                    </select>
                    {{--<div class="col-md-10">--}}
                    {{--<select name="city" id="city" class="form-control">--}}
                    {{--<option value="">Choose a different City</option>--}}
                    {{--@forelse($cities as $city)--}}
                    {{--<option value="{{$city->id}}">{{$city->name}}</option>--}}
                    {{--@empty--}}
                    {{--<p>No city here! are you in space?</p>--}}
                    {{--@endforelse--}}
                    {{--</select>--}}
                    {{--</div>--}}
                    <button style="float: right;" type="submit" class="btn teal white-text">Go</button>
                </form>
            </div>
        </div>
        {{--<div class="row" style="visibility: ;">--}}
        {{--<div class="col-md-3">--}}
        {{--<form action="">--}}
        {{--<select name="city" id="city" class="form-control">--}}
        {{--<option value="">Choose a different City</option>--}}
        {{--@forelse($cities as $city)--}}
        {{--<option value="{{$city->id}}">{{$city->name}}</option>--}}
        {{--@empty--}}
        {{--<p>No city here! are you in space?</p>--}}
        {{--@endforelse--}}
        {{--</select>--}}
        {{--</form>--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="row justify-content-center">

            <div class="col-md-12  red-text" style="background-color: #f3f3f3; padding: 1%;">
                <b>Call a Physio</b>
            </div><br>
            @forelse($physios as $physio)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img height="60" width="60" style="border-radius: 20%;" src="{{asset($physio->photo())}}" alt="picture of {{$physio->name()}}">
                                </div>
                                <div class="col-md-8 teal-text">
                                    <p style="text-transform: capitalize; color: gray;"><b>{{$physio->name()}}</b></p>
                                    <span><i class="mdi mdi-map-marker"></i>{{Str::words($physio->location(), 5,'....')}}</span><br>

                                    <span title="call this physio"><i class="mdi mdi-phone-classic">{{$physio->phone}}</i></span>
                                </div>
                            </div>
                            <span style="font-size: .9em; color: grey; float: left;" title="call this physio"><i class="mdi mdi-mail">{{$physio->email}}</i></span><br>
                            <a class="red-text" href="{{route('consultations.consult', ['slug'=>$physio->slug])}}" style=" float: right; border: 1px solid darkred; border-radius: 10%;" title="Consult {{' '.$physio->name()}}">Consult</a>
                        </div>
                        <div class="card-footer" style="font-size: 0.8em;">
                            <a style="color: #124641; float: left;" title="Locate {{' '.$physio->name().' '.'on Map'}}" href="{{route('show-physio.map-view',['slug'=>$physio->slug])}}"><i class="mdi mdi-google-maps"></i>view Location on Map</a>
                            <a style="float:right; color: #ff7907;" href="{{route('show-physio.profile-view', ['slug'=>$physio->slug])}}" title="{{'view '.$physio->name()."'s Profile"}}"> View Profile</a>
                        </div>
                    </div>
                </div><br>
            @empty
                <p class="grey-text">No physio nearby</p>
            @endforelse
        </div>
    </div>
@endsection
@section('page_scripts')
{{--<script>--}}
    {{--var currentState = '{{$currentState->name}}';--}}
    {{--console.log(currentState);--}}
    {{--var locationInfo;--}}
        {{--if(currentState = null){--}}
            {{--locationInfo = 'please go to your profile and set your location'--}}
        {{--} else {--}}
            {{--locationInfo = 'you are currently in '.currentState;--}}
        {{--}--}}
        {{--console.log(locationInfo);--}}
    {{--document.ready(alert(locationInfo));--}}
{{--</script>--}}
@endsection