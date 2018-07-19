@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header red-text">
                        Locate <b>{{$physio->name()}}</b> on Map
                        <span style="float: right;">
                        <img style=" border-radius: 20%;" height="48em" width="48em" src="{{asset($physio->photo())}}" alt="">
                    </span>
                    </div>
                    <div class="card-body">
                        <div class="map"></div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection