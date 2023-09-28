@extends('layouts.app')

@section('content')


    <!-- CONTAINER-FLUID 
    ============================================================= -->
    <div class="container-fluid pt-4" style="min-height: 100vh">





        <!-- MESSAGES ALERTE SUCCESS/DANGER
        ============================================================= -->
        @include('messages')




        <!-- BLOC IMAGE USER + NOM PRENOM
        ============================================================= -->
        <div class="row justify-content-center text-center rounded pt-4" id="row_1_edit_user" style="background-image: linear-gradient(to right, #0000001c, #00000000), url('/images/fond_4.jpg');">
            <!-- IMAGE -->
            <img class="rounded text-center bg-dark p-1" src="{{ asset("images/$user->image") }}" alt="imageUtilisateur">
            <!-- NOM PRENOM -->
            <h5 class="text-light fs-2 mt-2 ">{{ $user->nom }} <small>{{ $user->prenom }}</small></h5>
        </div>



        <!-- BLOC TITRE
        ============================================================= -->
        <div class="row p-2 border-top border-secondary mt-4" id="row_2_edit_user">
            <h1 class="text-center">Mon compte</h1>
        </div>










        <!-- MODIFICATIONS PASSWORD + INFORMATIONS
        ============================================================= -->
        <div class="row justify-content-center my-5 gap-1">

            <!-- SECTION MODIF PASSWORD + MODIF INFOS -->
            <div class="col-md-5 col-sm-12 border-end mb-5">


                <!-- CARD -->
                <div class="card border-0 mx-auto mb-5" style="max-width: 30rem" id="card_mofif_infos">

                    <!-- FORMULAIRE MODIF PASSWORD -->
                    <form method="POST" action="{{ route('updatepassword', $user) }}">
                    @csrf
                    @method('PUT')

                        <div class="row justify-content-center">
                            <h5 class="ms-1 mb-4">Modification du mot de passe</h5>

                            <!-- ANCIEN PASSWORD -->
                            <div class="col-12 mb-4">
                                <label for="password" class="col-form-label ms-2 pb-1"><small>{{ __('Mot de passe actuel') }}</small></label>
                                <input id="password" type="password" class="form-control border-secondary @error('password') is-invalid @enderror" name="actuel_password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- NOUVEAU PASSWORD -->
                            <div class="col-12 mb-4">
                                <label for="password" class="col-form-label ms-2 pb-1"><small>{{ __('Nouveau mot de passe') }}</small></label>
                                <input id="password" type="password" class="form-control border-secondary @error('password') is-invalid @enderror" name="nouveau_password" value="{{ old('password') }}" required autocomplete="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- CONFIRMATION NOUVEAU PASSWORD -->
                            <div class="col-12 mb-4">
                                <label for="password" class="col-form-label ms-2 pb-1"><small>{{ __('Confirmez nouveau mot de passe') }}</small></label>
                                <input id="password" type="password" class="form-control border-secondary @error('password') is-invalid @enderror" name="nouveau_password_confirmation" value="{{ old('password') }}" required autocomplete="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- BOUTON "MODIFIER" --> 
                            <div class="col-12 border-bottom border-secondary pb-4">
                                <button type="submit" class="btn btn-primary col-12"><small>{{ __('Modifier le mot de passe') }}</small></button>
                            </div>

                        </div>

                    </form>


                </div>





                <!-- CARD -->
                <div class="card border-0 mx-auto" style="max-width: 30rem" id="card_mofif_infos">

                    <!-- FORMULAIRE MODIF INFOS -->
                    <form method="POST" action="{{ route('user.update', $user) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                        <div class="row justify-content-center">
                            <h5 class="ms-1 mb-4">Mes informations personnelles</h5>

                            <!-- PSEUDO -->
                            <div class="col-12 mb-4">
                                <label for="pseudo" class="col-form-label ms-2 pb-1"><small>{{ __('Pseudo') }}</small></label>
                                <input id="pseudo" type="text" class="form-control border-secondary @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ $user->pseudo }}" required autocomplete="pseudo">

                                @error('pseudo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- IMAGE -->
                            <div class="col-12 mb-4">
                                <label for="image" class="col-form-label ms-2 pb-1"><small>{{ __('Image') }}</small></label>
                                <input id="image" type="file" class="form-control border-secondary @error('image') is-invalid @enderror" name="image" value="{{ $user->image }}" autocomplete="image">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- E-MAIL -->
                            <div class="col-12 mb-4">
                                <label for="email" class="col-form-label ms-2 pb-1"><small>{{ __('Adresse e-mail') }}</small></label>
                                <input id="email" type="email" class="form-control border-secondary @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <!-- NOM -->
                            <div class="col-12 mb-4">
                                <label for="nom" class="col-form-label ms-2 pb-1"><small>{{ __('Nom') }}</small></label>
                                <input id="nom" type="text" class="form-control border-secondary @error('nom') is-invalid @enderror" name="nom" value="{{ $user->nom }}" required autocomplete="nom">

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- PRENOM -->
                            <div class="col-12 mb-4">
                                <label for="prenom" class="col-form-label ms-2 pb-1"><small>{{ __('Prénom') }}</small></label>
                                <input id="prenom" type="text" class="form-control border-secondary @error('nom') is-invalid @enderror" name="prenom" value="{{ $user->prenom }}" required autocomplete="prenom">

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <!-- NUMERO -->
                            <div class="col-12 mb-4">
                                <label for="numero" class="col-form-label ms-2 pb-1"><small>{{ __('Numéro de téléphone') }}</small></label>
                                <input id="numero" type="text" class="form-control border-secondary @error('numero') is-invalid @enderror" name="numero" value="{{ $user->numero }}" required autocomplete="numero">

                                @error('numero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <!-- NUMERO PERMIS -->
                            <div class="col-12 mb-4">
                                <label for="numero_permis" class="col-form-label ms-2 pb-1"><small>{{ __('Numéro du permis de conduire') }}</small></label>
                                <input id="numero_permis" type="text" class="form-control border-secondary @error('numero_permis') is-invalid @enderror" name="numero_permis" value="{{ $user->numero_permis }}" required autocomplete="numero_permis">

                                @error('numero_permis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <!-- DATE PERMIS -->
                            <div class="col-12 mb-4">
                                <label for="date_permis" class="col-form-label ms-2 pb-1"><small>{{ __('Date du permis de conduire') }}</small></label>
                                <input id="date_permis" type="date" class="form-control border-secondary @error('date_permis') is-invalid @enderror" name="date_permis" value="{{ $user->date_permis }}" required autocomplete="date_permis">

                                @error('date_permis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <!-- PAYS PERMIS -->
                            <div class="col-12 mb-5">
                                <label for="pays_permis" class="col-form-label ms-2 pb-1"><small>{{ __('Pays du permis de conduire') }}</small></label>
                                <input id="pays_permis" type="text" class="form-control border-secondary @error('pays_permis') is-invalid @enderror" name="pays_permis" value="{{ $user->pays_permis }}" required autocomplete="pays_permis">

                                @error('pays_permis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <!-- BOUTON "MODIFIER" --> 
                            <div class="col-12 border-bottom border-secondary pb-4">
                                <button type="submit" class="btn btn-primary col-12">{{ __('Modifier mes informations') }}</button>
                            </div>


                        </div>


                    </form>


                    <!-- BOUTON SUPPRESSION COMPTE _
                    ============================================================= -->
                    <div class="col-12 text-center mt-3">
                        <p class="mb-2">Suppression du compte</p>
                        <form method="POST" action="{{ route('user.destroy', $user) }}">
                        @csrf
                        @method("delete")
                            <button type="submit" class="btn btn-danger">{{ __('Supprimer le compte') }}</button>
                        </form>
                    </div>


                </div>


            </div>










            <!-- SECTION CREATION ADRESSE + BOUCLE ADRESSES EXISTANTES
            ============================================================= -->
            <div class="col-md-5 col-sm-12 border-start">

                <!-- CARD -->
                <div class="card border-0 mx-auto" style="max-width: 30rem">

                    <!-- FORMULAIRE CREATION ADRESSE -->
                    <form method="POST" action="{{ route('adresse.store') }}">
                    @csrf

                        <div class="row justify-content-center">
                            <h5 class="ms-1 mb-4">Créer une adresse</h5>

                            <!-- VILLE -->
                            <div class="col-12 mb-4">
                                <label for="ville" class="col-form-label ms-2 pb-1"><small>{{ __('Ville') }}</small></label>
                                <input id="ville" type="text" placeholder="Ville..." class="form-control border-secondary @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville">

                                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- CODE POSTAL -->
                            <div class="col-12 mb-4">
                                <label for="code_postal" class="col-form-label ms-2 pb-1"><small>{{ __('Code postal') }}</small></label>
                                <input id="code_postal" type="text" placeholder="Code postal..." class="form-control border-secondary @error('code_postal') is-invalid @enderror" name="code_postal" value="{{ old('code_postal') }}" required autocomplete="code_postal">

                                @error('code_postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- ADRESSE -->
                            <div class="col-12 mb-4">
                                <label for="adresse" class="col-form-label ms-2 pb-1"><small>{{ __('Adresse') }}</small></label>
                                <input id="adresse" type="text" placeholder="Adresse..." class="form-control border-secondary @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse">

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- BOUTON "MODIFIER" --> 
                            <div class="col-12 mb-5">
                                <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                                <button type="submit" class="btn btn-primary col-12"><small>{{ __('Créer mon adresse') }}</small></button>
                            </div>

                        </div>

                    </form>


                </div>





                <!-- BLOC TEXT "ADRESSES EXISTANTES" -->
                <div class="row mx-auto border-top border-secondary mt-5 mb-4" style="max-width: 30rem" id="row_2_edit_user">
                    <h5 class="text-center p-2"><span>Adresses existantes</span></h5>
                </div>





                <!-- BOUCLE ADRESSES EXISTANTES
                ============================================================= -->
                @foreach ($user->adresses as $adresse)

                    <!-- CARD -->
                    <div class="card border mx-auto mb-4 p-3 border-secondary" style="max-width: 30rem">

                        <!-- Formulaire modif infos  -->
                        <form method="POST" action="{{ route('adresse.update', $adresse) }}">
                        @csrf
                        @method('PUT')

                            <div class="row justify-content-center">

                                <!-- AFFICHAGE ADRESSE -->
                                <h6 class="mb-3 ms-3"><small class="border-bottom border-primary">{{$adresse->adresse}} {{$adresse->code_postal}} {{$adresse->ville}}</small></h6>

                                <!-- VILLE -->
                                <div class="col-12 mb-4">
                                    <label for="ville" class="col-form-label ms-2 pb-1"><small>{{ __('Ville') }}</small></label>
                                    <input id="ville" type="text" class="form-control border-secondary @error('ville') is-invalid @enderror" name="ville" value="{{ $adresse->ville }}" required autocomplete="ville">

                                    @error('ville')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- CODE POSTAL -->
                                <div class="col-12 mb-4">
                                    <label for="code_postal" class="col-form-label ms-2 pb-1"><small>{{ __('Code postal') }}</small></label>
                                    <input id="code_postal" type="text" class="form-control border-secondary @error('code_postal') is-invalid @enderror" name="code_postal" value="{{ $adresse->code_postal }}" required autocomplete="code_postal">

                                    @error('code_postal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- ADRESSE -->
                                <div class="col-12 mb-4">
                                    <label for="adresse" class="col-form-label ms-2 pb-1"><small>{{ __('Adresse') }}</small></label>
                                    <input id="adresse" type="text" class="form-control border-secondary @error('adresse') is-invalid @enderror" name="adresse" value="{{ $adresse->adresse }}" required autocomplete="adresse">

                                    @error('adresse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- BOUTON "MODIFIER" --> 
                                <div class="col-12 mb-3 border-bottom border-secondary pb-4">
                                    <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                                    <button type="submit" class="btn btn-primary col-12"><small>{{ __('Modifier') }}</small></button>
                                </div>


                            </div>


                        </form>


                        <!-- BOUTON SUPPRESSION COMPTE _
                        ============================================================= -->
                        <div class="col-12 text-center">
                            <p class="mb-2">Suppression adresse</p>
                            <form action="{{ route('adresse.destroy', $adresse) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger"><small>Supprimer l'adresse</small></button>
                            </form>
                        </div>


                    </div>


                @endforeach


            </div>


        </div>


    </div>





    <!-- FOOTER
    ============================================================= -->
    @include('footer')





@endsection