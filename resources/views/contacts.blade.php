@extends('layouts.app')
@section('title', __('Contacts'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Contacts</h1>
            <hr>
            <div class="contact-infos mt-4" style="font-size: 16px;">
                <p class="text"><i class="fa fa-map-marker"></i> <span class="ml-1">PO Box 25 Bafoussam 3ème carrefour Evéché</span></p>
                <p class="text"><i class="fa fa-envelope"></i> <span class="ml-1"><a href="mailto:infos@sigmen.com">infos@sigmen.com</a></span></p>
                <p class="text"><i class="fa fa-phone"></i> <span class="ml-1">(+237) 694 24 83 67 / (+237) 677 44 25 12</span></p>
                <p class="text"><i class="fa fa-fax"></i> <span class="ml-1">(+237) 233 44 15 61</span></p>

            </div>
        </div>
    </div>
</div>
@endsection