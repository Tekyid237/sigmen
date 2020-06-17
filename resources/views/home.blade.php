@extends('layouts.app')
@section('title', __('Dashboard'))

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="card">
                <div class="card-header">Ma préinscription</div>
                <!-- Rien à afficher pour l'instant. -->
                @foreach ($preinscription as $p)
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Préinscription No : <span class="font-weight-bold">{{ $p->id }}</span></li>
                    <li class="list-group-item">Nom : <span class="font-weight-bold">{{ $p->name }}</span></li>
                    <li class="list-group-item">Prénom : <span class="font-weight-bold">{{ $p->first_name }}</span></li>
                    <li class="list-group-item">Né(e) le : <span class="font-weight-bold">{{ Carbon\Carbon::parse($p->birth_date)->isoFormat('LL') }}</span></li>
                    <li class="list-group-item">Genre : <span class="font-weight-bold">{{ $p->gender }}</span></li>
                    <li class="list-group-item">Filière : <span class="font-weight-bold">{{ $p->branch }}</span></li>
                    <li class="list-group-item">Niveau : <span class="font-weight-bold">{{ $p->level}}</span></li>
                    <li class="list-group-item">Statut de la préinscription :
                        @if($p->is_validate === 1)
                        <span class="font-weight-bold text-success">Validée</span>
                        @elseif($p->is_validate === -1)
                        <span class="font-weight-bold text-danger">Rejetée</span>
                        @else
                        <span class="font-weight-bold text-primary">En attente de validation</span>
                        @endif
                    </li>

                </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection