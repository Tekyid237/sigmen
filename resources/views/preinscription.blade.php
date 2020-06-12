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
                    <label for="last_name">Nom</label>
                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>
                    @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
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
                        <input class="form-check-input{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="gender" id="gender_h" value="H" checked>
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
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
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
                        <input class="form-check-input{{ $errors->has('level') ? ' is-invalid' : '' }}" type="radio" name="level" id="bts" value="BTS" checked>
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

                <button type="submit" class="btn btn-primary">{{ __('Soumettre ma préinsription') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection