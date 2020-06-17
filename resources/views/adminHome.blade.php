@extends('layouts.app')
@section('title', __('Admin Panel'))

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
            <div class="card ">
                <div class="card-header">Préinscriptions à approuver</div>

                <div class="card-body overflow-auto">
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
                            <th>Envoyée</th>
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
                                <form id="approve-form" action="{{ route('admin.preinscription.approve') }}" method="POST">
                                    @csrf
                                    <input type="text" name="preinscription_id" id="preinscription_id" value="{{ $p->id }}" style="display: none;">
                                    <button class="btn btn-primary btn-sm">
                                        Approuver
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form id="reject-form" action="{{ route('admin.preinscription.reject') }}" method="POST">
                                    @csrf
                                    <input type="text" name="preinscription_id" id="preinscription_id" value="{{ $p->id }}" style="display: none;">
                                    <button class="btn btn-danger btn-sm">
                                        Rejeter
                                    </button>
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