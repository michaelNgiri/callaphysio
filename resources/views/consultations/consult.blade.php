@extends('layouts.app')
@section('title', 'Consult')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <b class="grey-text">Consult {{$physio->name()}}</b> <img style="float: right; border-radius: 30%;" height="40" width="50" src="{{asset($physio->photo())}}" alt="{{$physio->name()." 's picture"}}">
            </div>
            <div class="card-body">

            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
    </div>
</div>
@endsection