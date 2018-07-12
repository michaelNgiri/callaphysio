@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
          <form action="" class="form-group"">
              <label for="location">Change Location</label>
              <select name="location" id="location" class="form-control">
                  <option value="">Choose a different location</option>
                  @forelse($cities as $city)
                      <option value="{{$city->id}}">{{$city->name}}</option>
                  @empty
                      <p>No city here! are you in space?</p>
                  @endforelse
              </select>
          </form>
              {{--<div class="card-header red-text"><b>Call a Physio</b></div>--}}
              <div class="row">
                  @forelse($physios as $physio)
                      <div class="col-md-4">
                          <div class="card">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-4" style="background-color: #f3f3f3;">
                                          <img src="{{asset($physio->imagePath())}}" alt="">
                                      </div>
                                      <div class="col-md-8 teal-text">
                                          <p>{{$physio->name()}}</p>
                                          <p><i class="mdi mdi-map-marker"></i>{{Str::words($physio->location(), 5,'....')}}</p>
                                      </div>
                                  </div>

                              </div>
                              <div class="card-footer">
                                  <a style="color: #1d7d74;" href="{{route('show-physio.map-view',['physio'=>$physio])}}">view Location on Map</a>
                              </div>
                          </div>
                      </div>
                  @empty
                      <p class="grey-text">No physio nearby</p>
                  @endforelse
              </div>
    </div>
</div>
@endsection
