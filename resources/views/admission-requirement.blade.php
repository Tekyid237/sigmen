@extends('layouts.app')
@section('title', __('A Propos'))

@section('content')
<div class="container">
    <h1>Conditions d'admission</h1>
    <hr>
    <div class="mt-4">
        <ul type="square">
            <li class="D">Etude de dossier (avec mention "bien" au BAC)</li>
            <ul type="disc">
                <li>Une demande manuscrite adresse au directeur de l'établissement</li>
                <li>Une copie certifiée de l'acte de naissance</li>
                <li>Une photocopie certifiée du Baccalauréat</li>
                <li>02 photos 4x4 couleur</li>
                <li>Une fiche d'incription à retirer au sécretariat de l'établissement</li>
            </ul>
            <li class="D">Concours</li>
            <ul type="disc">
                <li>Une copie certifiée de l'acte de naissance</li>
                <li>Une photocopie certifiée du Baccalaureat</li>
                <li>Une photocopie certifiée du Probatoire</li>
                <li>02 photos 4x4 couleur</li>
                <li>Un certificat médical</li>
                <li>Les frais de dossier d'un montant de 20.000 Francs CFA</li>
            </ul>
        </ul>
    </div>
</div>

@endsection