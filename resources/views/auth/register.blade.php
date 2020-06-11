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
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="title" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="lastname">Prénom</label>
                    <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="title" value="{{ old('lastname') }}" required autofocus>
                    @if ($errors->has('lastname'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirmation du mot de passe</label>
                    <input id="confirm-password" type="confirm-password" class="form-control{{ $errors->has('confirm-password') ? ' is-invalid' : '' }}" name="confirm-password" value="{{ old('confirm-password') }}" required>
                    @if ($errors->has('confirm-password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('confirm-password') }}</strong>
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
                    <label for="birth-date">Date de naissance</label>
                    <input id="birth-date" type="date" class="form-control{{ $errors->has('birth-date') ? ' is-invalid' : '' }}" name="birth-date" value="{{ old('birth-date') }}" required>
                    @if ($errors->has('birth-date'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('birth-date') }}</strong>
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
                    <label for="sup-infos">Informations supplémentaires (Facultatif)</label>
                    <textarea name="sup-infos" class="form-control{{ $errors->has('sup-infos') ? ' is-invalid' : '' }}" id="sup-infos" cols="30" rows="10">{{ old('sup-infos') }}</textarea>
                    @if ($errors->has('sup-infos'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('sup-infos') }}</strong>
                    </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">{{ __('Soumettre ma préinsription') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection