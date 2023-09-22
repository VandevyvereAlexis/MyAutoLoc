@extends('layouts.app')

@section('content')


    <!-- CONTAINER-FLUID 
    ============================================================= -->
    <div class="container-fluid">





        <!-- MESSAGES ALERTE SUCCESS/DANGER
        ============================================================= -->
        @include('messages')





        <!-- GAUCHE ( FORMULAIRE INSCRIPTION )
        ============================================================= -->
        <div class="row align-items-center justify-content-center" id="row_register">
            <div class="col-md-6 col-sm-11 d-flex justify-content-center" id="left_register">


                <!-- CARD 
                ============================================================= -->
                <div class="card col-md-10 col-sm-12 border-0 pt-1 border-secondary">


                    <!-- CARD HEADER -->
                    <h1 class="card-header bg-transparent text-center border-0"><span class="border-bottom border-secondary border-2">{{ __('Inscription') }}</span></h1>

                    <!-- CARD BODY -->
                    <div class="card-body my-2 rounded" id="card_body_register">


                        <!-- FORMULAIRE INSCRIPTION 
                        ============================================================= -->
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf


                            <!-- ( NOM - PRENOM - NUMERO TELEPHONE - NUMERO PERMIS - DATE PERMIS - PAYS PERMIS - AGE - IMAGE - ADRESSE E-MAIL - MOT DE PASSE - MOT DE PASSE CONFIRM ) -->
                            <div class="row justify-content-center">


                                <!-- NOM -->
                                <div class="col-12 mb-4" style="width: 40rem">
                                    <label for="nom" class="col-form-label ms-2 pb-1"><small>{{ __('_Nom_') }}</small></label>
                                    <input id="nom" type="text" class="form-control border-secondary p-3 @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" placeholder="Nom..." autofocus>

                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- PRENOM -->
                                <div class="col-12 mb-4" style="width: 40rem">
                                    <label for="prenom" class="col-form-label ms-2 pb-1"><small>{{ __('_Prénom_') }}</small></label>
                                    <input id="prenom" type="text" class="form-control border-secondary p-3 @error('nom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" placeholder="Prénom...">

                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- PSEUDO -->
                                <div class="col-12 mb-4" style="width: 40rem">
                                    <label for="pseudo" class="col-form-label ms-2 pb-1"><small>{{ __('_Pseudo_') }}</small></label>
                                    <input id="pseudo" type="text" class="form-control border-secondary p-3 @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ old('pseudo') }}" required autocomplete="pseudo" placeholder="Pseudo...">

                                    @error('pseudo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- NUMERO -->
                                <div class="col-12 mb-4" style="width: 40rem">
                                    <label for="numero" class="col-form-label ms-2 pb-1"><small>{{ __('_Numéro de téléphone_') }}</small></label>
                                    <input id="numero" type="text" class="form-control border-secondary p-3 @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero" placeholder="0X.XX.XX.XX.XX">

                                    @error('numero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- NUMERO PERMIS -->
                                <div class="col-12 mb-4" style="width: 40rem">
                                    <label for="numero_permis" class="col-form-label ms-2 pb-1"><small>{{ __('_Numéro du permis de conduire_') }}</small></label>
                                    <input id="numero_permis" type="text" class="form-control border-secondary p-3 @error('numero_permis') is-invalid @enderror" name="numero_permis" value="{{ old('numero_permis') }}" required autocomplete="numero_permis" placeholder="Numéro du permis de conduire...">

                                    @error('numero_permis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- DATE PERMIS -->
                                <div class="col-12 mb-4" style="width: 40rem">
                                    <label for="date_permis" class="col-form-label ms-2 pb-1"><small>{{ __('_Date du permis de conduire_') }}</small></label>
                                    <input id="date_permis" type="date" class="form-control border-secondary p-3 @error('date_permis') is-invalid @enderror" name="date_permis" value="{{ old('date_permis') }}" required autocomplete="date_permis" placeholder="Date du permis de conduire...">

                                    @error('date_permis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- PAYS PERMIS -->
                                <div class="col-12 mb-4" style="width: 40rem">
                                    <label for="pays_permis" class="col-form-label ms-2 pb-1"><small>{{ __('_Pays du permis de conduire_') }}</small></label>
                                    <input id="pays_permis" type="text" class="form-control border-secondary p-3 @error('pays_permis') is-invalid @enderror" name="pays_permis" value="{{ old('pays_permis') }}" required autocomplete="pays_permis" placeholder="Pays du permis de conduire...">

                                    @error('pays_permis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- AGE -->
                                <div class="col-12 mb-4" style="width: 40rem">
                                    <label for="age" class="col-form-label ms-2 pb-1"><small>{{ __('_Age_') }}</small></label>
                                    <input id="age" type="number" class="form-control border-secondary p-3 @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" placeholder="Min: 18">

                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- E-MAIL -->
                                <div class="col-11 mb-4" style="width: 40rem">
                                    <label for="email" class="col-form-label ms-2 pb-1"><small>{{ __('_Adresse e-mail_') }}</small></label>
                                    <input id="email" type="email" class="form-control border-secondary p-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Adresse e-mail...">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- MOT DE PASSE -->
                                <div class="col-11 mb-3" style="width: 40rem">
                                    <label for="password" class="col-form-label ms-2 pb-1"><small>{{ __('_Mot de passe_') }}</small></label>
                                    <input id="password" type="password" class="form-control border-secondary p-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="8 et 15 caracteres. minimum 1 lettre, 1 chiffre et 1 caractère spécial...">
                                    <div id="passwordHelp" class="form-text ms-2"><small>8 et 15 caracteres. minimum 1 lettre, 1 chiffre et 1 caractère spécial</small></div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- CONFIRMATION MOT DE PASSE -->
                                <div class="col-11 mb-4" style="width: 40rem">
                                    <label for="password-confirm" class="col-form-label ms-2 pb-1"><small>{{ __('_Confirmez le mot de passe_') }}</small></label>
                                    <input id="password-confirm" type="password" class="form-control border-secondary p-3" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmez le mot de passe...">
                                </div>


                                <!-- IMAGE -->
                                <div class="col-12 mb-4" style="width: 40rem">
                                    <label for="image" class="col-form-label ms-2 pb-1"><small>{{ __('_Image (facultative)_') }}</small></label>
                                    <input id="image" type="file" class="form-control border-secondary p-3 @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image">

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- CHECKBOX + LABEL MENTIONS LEGALES --> 
                                <div class="col-11 mb-4 d-flex mt-4" style="width: 40rem">
                                    <input type="checkbox" name="politique" id="politique" onclick="toggleValidationButtonDisplay()">
                                    <label class="ms-2" for="politique"><small>J'ai lu et j'accepte les <a href="{{ route('politique') }}">mentions légales et la politique de confidentialité</a></small></label>
                                </div>


                                <!-- BOUTON "INSCRIPTION"  --> 
                                <div class="col-11 mt-2 mb-3" style="width: 40rem">
                                    <button type="submit" class="btn btn-primary col-12" id="valider" style="visibility: hidden">{{ __('S\'inscrire') }}</button>
                                </div>


                                <!-- LIEN RETOUR A LA CONNEXION -->
                                <div class="col-11 mt-2 text-center" style="width: 40rem">
                                    <a class="text-dark" href="{{ route('login') }}">{{ __('- Retour à la connexion -') }}</a>
                                </div>


                            </div>


                        </form>


                    </div>


                </div>


            </div>


            <!-- DROITE (IMAGE)
            ============================================================= -->
            <div class="col-md-6 border-right p-0" id="right_email">
                <img class="rounded border-start border-2 border-secondary" src="./images/fond.jpg" alt="Land-Rover">
            </div>


        </div>
    </div>





    <!-- FOOTER
    ============================================================= -->
    @include('footer')





    <!-- SCRIPT JAVASCRIPT (BOUTON INSCRIPTION)
    ============================================================= -->
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






