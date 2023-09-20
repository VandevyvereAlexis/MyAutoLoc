@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image (facultative) ') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            <!-- CHECKBOX + LABEL MENTIONS LEGALES --> 
                            <div class="form-group row text-center">
                                <div class="col-md-10">
                                    <label for="politique">J'ai lu et j'accepte les <a href="{{ route('politique') }}">mentions légales et la politique de confidentialité</a></label>
                                </div>
                                <div class="col-md-2">
                                    <input type="checkbox" class="mx-auto" name="politique" id="politique" onclick="toggleValidationButtonDisplay()">
                                </div>
                            </div>


                            <!-- BOUTON VALIDATION INSCRIPTION  --> 
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" id="valider" style="visibility: hidden">{{ __('Register') }}</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>

        // FONCTION PERMETTANT DE GERER LA VISIBILITE DU BOUTON DE VALIDATION EN FONCTION DE L'ETAT D'UNE CASE A COCHER.
        function toggleValidationButtonDisplay() 
        {
            // ON OBTIENT LA REFERENCE DE L'ELEMENT HTML AVEC L'ID "POLITIQUE" -> CHECKBOX.
            let checkbox = document.getElementById("politique");

            // OBTENTION DE KA REFERENCE DE L'ELEMENT HTML AVEC L'ID "VALIDER" -> BOUTON INSCRIPTION.
            let boutonValider = document.getElementById("valider");

            // VERIFIE SI CHECKBOX COCHEE, SI C'EST LE LE BOUTON D'INSCRIPTION SERA VISIBLE (visibility: visible). SINON LE BOUTTON SERA MASQUER (visibility: hidden).
            checkbox.checked ? boutonValider.style.visibility = "visible" : boutonValider.style.visibility = "hidden";
        } 

    </script>


@endsection


