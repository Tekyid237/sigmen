@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="card overflow-auto">
                <div class="card-header">Préinscriptions à approuver</div>

                <div class="card-body">
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
                            <td colspan="2">Validée {{ Carbon\Carbon::parse($p->updated_at)->diffForHumans() }}</td>
                            @elseif($p->is_validate === -1)
                            <td><span class="text-danger">Rejetée</span></td>
                            <td colspan="2">Rejetée {{ Carbon\Carbon::parse($p->updated_at)->diffForHumans() }}</td>
                            @else
                            <td><span class="text-danger">En Attente</span></td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="event.preventDefault(); document.getElementById('approve-form').submit();">
                                    Approuver
                                </button>
                                <form id="approve-form" action="{{ route('admin.preinscription.approve') }}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="text" name="preinscription_id" id="preinscription_id" value="{{ $p->id }}" style="none">
                                </form>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('reject-form').submit();">
                                    Rejeter
                                </button>
                                <form id="reject-form" action="{{ route('admin.preinscription.reject') }}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="text" name="preinscription_id" id="preinscription_id" value="{{ $p->id }}" style="none">
                                </form>
                            </td>
                            @endif
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