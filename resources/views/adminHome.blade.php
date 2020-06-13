@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel d'administration</div>
                <div class="card-body">
                    Bienvenue {{ Auth::user()->name }}, vous êtes administrateur.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection