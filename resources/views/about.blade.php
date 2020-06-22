@extends('layouts.app')
@section('title', __('A Propos'))

@section('content')

<div class="container">
    <div class="row featurette">
        <div class="col-md-7 order-md-2 mt-4">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">
                Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
                Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
            </p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="{{ asset('img/caption-photo-2.jpg') }}" alt="" height="445px"> 
        </div>
    </div>
</div>

@endsection