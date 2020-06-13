@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card overflow-auto">
                <div class="card-header">Préinscriptions à approuver</div>

                <div class="card-body">

                    @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Genre</th>
                            <th>Date de nais.</th>
                            <th>Filière</th>
                            <th>Niveau</th>
                            <th>Infos suppl.</th>
                            <th>Envoyée le :</th>
                            <th>Statut</th>
                            <th></th>
                            <th></th>

                        </tr>
                        @forelse ($preinscriptions as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->first_name }}</td>
                            <td>{{ $p->gender }}</td>
                            <td>{{ Carbon\Carbon::parse($p->birth_date)->isoFormat('LL') }}</td>
                            <td>{{ $p->branch }}</td>
                            <td>{{ $p->level }}</td>
                            <td>{{ $p->sup_infos }}</td>
                            <td>{{ Carbon\Carbon::parse($p->created_at)->diffForHumans() }}</td>
                            @if($p->is_validate === 1)
                            <td><span class="text-success">Validée</span></td>
                            @else
                            <td><span class="text-danger">En Attente</span></td>
                            @endif
                            <td><a href="#" class="btn btn-primary btn-sm">Approuver</a></td>
                            <td><a href="#" class="btn btn-danger btn-sm">Rejeter</a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12">Aucune demande de préinscription pour l'instant.</td>
                        </tr>
                        @endforelse
                    </table>
                    <div class="d-flex">
                        <div class="mx-auto">
                            {{$preinscriptions->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection