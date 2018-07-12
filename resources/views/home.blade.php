@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" class="form-group left-align">
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
        </div>
    </div>
    <div class="row justify-content-center">

                 <div class="col-md-12  red-text" style="background-color: #f3f3f3; padding: 1%;">
                     <b>Call a Physio</b>
                 </div>
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
                                          <span><i class="mdi mdi-phone-classic"></i></span>
                                      </div>
                                  </div>

                              </div>
                              <div class="card-footer" style="font-size: 0.8em;">
                                  <a style="color: #124641; float: left;" href="{{route('show-physio.map-view',['slug'=>$physio->slug])}}"><i class="mdi mdi-google-maps"></i>view Location on Map</a>
                                  <a style="float:right; color: #ff7907;" href="{{route('show-physio.profile-view', ['slug'=>$physio->slug])}}"> View Profile</a>

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
