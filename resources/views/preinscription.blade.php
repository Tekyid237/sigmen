@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Se Préinscrire</h1>
            <hr>
            <form method="POST" action=" ">
                @csrf

                <div class="form-group">
                    <label for="name">Nom</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="first_name">Prénom</label>
                    <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>
                    @if ($errors->has('first_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <span>Vous êtes :</span><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="gender" id="gender_h" value="H">
                        <label class="form-check-label" for="gender_h">Un homme</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="gender" id="gender_f" value="F">
                        <label class="form-check-label" for="gender_f">Une femme</label>
                    </div><br>
                    @if ($errors->has('gender'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="birth_date">Date de naissance</label>
                    <input id="birth_date" type="date" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" value="{{ old('birth_date') }}" required>
                    @if ($errors->has('birth_date'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('birth_date') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="branch">Filière</label>
                    <select class="form-control{{ $errors->has('branch') ? ' is-invalid' : '' }}" id="branch" name="branch" value="{{ old('branch') }}" required>
                        <option selected>Choisir votre filière...</option>
                        <option value="Génie Civil (GC)">Génie Civil (GC)</option>
                        <option value="Gestion Logistique et Transport (GLT)">Gestion Logistique et Transport (GLT)</option>
                        <option value="Génie Informatique (GI)">Génie Informatique (GI)</option>
                        <option value="Gestion des Systèmes d’Information (GSI)">Gestion des Systèmes d’Information (GSI)</option>
                        <option value="Comptabilité et Gestion des Entreprises (CGE)">Comptabilité et Gestion des Entreprises (CGE)</option>
                        <option value="Banque et Finance (BQ)">Banque et Finance (BQ)</option>

                    </select>
                    @if ($errors->has('branch'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('branch') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <span>Niveau :</span><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input{{ $errors->has('level') ? ' is-invalid' : '' }}" type="radio" name="level" id="bts" value="BTS">
                        <label class="form-check-label" for="bts">BTS</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input{{ $errors->has('level') ? ' is-invalid' : '' }}" type="radio" name="level" id="licence" value="Licence">
                        <label class="form-check-label" for="licence">Licence</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input{{ $errors->has('level') ? ' is-invalid' : '' }}" type="radio" name="level" id="master" value="Master">
                        <label class="form-check-label" for="master">Master</label>
                    </div><br>
                    @if ($errors->has('level'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('level') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="sup_infos">Informations supplémentaires (Facultatif)</label>
                    <textarea name="sup_infos" class="form-control{{ $errors->has('sup_infos') ? ' is-invalid' : '' }}" id="sup_infos" cols="30" rows="10">{{ old('sup_infos') }}</textarea>
                    @if ($errors->has('sup_infos'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('sup_infos') }}</strong>
                    </span>
                    @endif
                </div>

                @guest
                <h1>Informations de compte</h1>
                <hr>
                
                <div class="form-group">
                    <label for="email">{{ __('Addresse E-Mail') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Mot de passe') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm">{{ __('Confirmation votre mot de passe') }}</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                @endguest

                <button type="submit" class="btn btn-primary">{{ __('Soumettre ma préinsription') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection