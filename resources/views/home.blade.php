@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Call a Physio</div>
                @forelse($closestPhysios as $closestPhysio)
                    <div class="col-md-4">
                        <div class="card-body">

                        </div>
                        <div class="card-footer">
                            view direction on Map
                        </div>
                    </div>
                @empty
                    <p class="grey-text">No physio nearby</p>
                @endforelse
            </div>
    </div>
</div>
@endsection
