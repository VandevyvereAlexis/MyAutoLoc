@extends('layouts.app')

@section('content')





    <div class="container-fluid mt-5 pt-3">





        <!-- SECTION 1 ITTRE PAGE
        ============================================================= -->
        <div class="row py-2 border-top border-secondary rounded-bottom" id="section_1_edit_user">
            <h1 class="text-center">Mon compte</h1>
        </div>





        <!-- MESSAGES ALERTE SUCCESS/DANGER
        ============================================================= -->
        <div class="row mt-2">
            <div class="col">
                @include('messages')
            </div>
        </div>





        <!-- SECTION 2 LIENS PAGE
        ============================================================= -->
        <div class="row mt-3" id="section_2_edit_user">
            <div class="col d-flex gap-3 justify-content-center">
                <a class="border py-3 px-2 text-decoration-none text-dark border-secondary rounded" href="#section_5_edit_user">Mes véhicules</a>
            </div>
        </div>





        <!-- SECTION 3 HISTORIQUE DE RESERVATION
        ============================================================= -->
        <div class="row mt-5 pt-3 mx-1" id="section_3_edit_user">

            <!-- TITRE -->
            <h5 class="ms-1 text-center">Historique de réservation</h5>

            <!-- TABLE -->
            <div class="col-md-8 mx-auto border border-secondary rounded py-3">
                <table class="table table-striped text-center">

                    <!-- SI AUCUNE RESERVATION -->
                    @if ($user->reservations->isEmpty())
                        <p class="text-center">Aucune réservation n'a été trouvée.</p>

                    <!-- SINON BOUCLE SUR RESERVATIONS PASSEES-->
                    @else
                        @foreach ($user->reservations as $reservation)

                            <thead>
                                <tr>
                                    <th scope="col">{{ $reservation->pivot->date_debut }}</th>
                                    <th scope="col">{{ $reservation->marque }}</th>
                                    <th scope="col">{{ $reservation->modele }}</th>

                                    <!-- MODAL -->
                                    <th scope="col">

                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalReservation{{ $reservation->id }}">
                                            Détails
                                        </button>
                                        
                                        <div class="modal fade" id="modalReservation{{ $reservation->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Reservation du {{ $reservation->pivot->date_debut }}</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body text-start">
                                                        <p class="fw-normal mb-1">Loueur : <span class="fw-medium">{{ $reservation->user->nom }} {{ $reservation->user->prenom }}</span></p>
                                                        <p class="fw-normal">Véhicule : <span class="fw-medium">{{ $reservation->marque }} {{ $reservation->modele }}</span></p>
                                                        <img class="w-100 rounded" src="{{ asset('images/' . $reservation->image) }}" alt="Image voiture">
                                                        <p class="fw-normal mt-3">Réservation du : <span class="fw-medium">{{ date('d M. Y', strtotime($reservation->pivot->date_debut)) }}</span> {{ $reservation->pivot->date_debut_demi_journee }} <br> Jusqu'au : <span class="fw-medium">{{ date('d M. Y', strtotime($reservation->pivot->date_fin)) }}</span> {{ $reservation->pivot->date_fin_demi_journee }}</p>
                                                        <p class="fw-normal">Total : <span class="fw-medium">{{ $reservation->pivot->prix }} €</span></p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </th>
                                </tr>
                            </thead>

                        @endforeach
                    @endif


                </table>
            </div>


        </div>





        <!-- SECTION 4 MODIF PASSWORD - MODIF INFOS PERSO - 
        ============================================================= -->
        <div class="row justify-content-center my-5 gap-1 pt-5" id="section_4_edit_user">
            <div class="col-md-5 col-sm-12 border-end mb-5">



                <!-- CARD FORMULAIRE PASSWORD -->
                <div class="card border-secondary mx-auto mb-5 p-3">
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
                            <div class="col-12 pb-4">
                                <button type="submit" class="btn btn-primary col-12"><small>{{ __('Modifier le mot de passe') }}</small></button>
                            </div>

                        </div>
                    </form>


                </div>





                <!-- CARD FORMULAIRE MODIF INFOS PERSO -->
                <div class="card border-secondary mx-auto p-3">
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


                    <!-- BOUTON SUPPRESSION COMPTE  -->
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





            <!-- CREATION ADRESSE - BOUCLE ADRESSES EXISTANTE -->
            <div class="col-md-5 col-sm-12 border-start">


                <div class="card border-secondary mx-auto p-3">
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
                <div class="row mx-auto border-top border-secondary mt-5 mb-4" style="max-width: 30rem">
                    <h5 class="text-center p-2"><span>Adresses existantes</span></h5>
                </div>





                <!-- BOUCLE ADRESSES EXISTANTES
                ============================================================= -->
                <div style="overflow-y: scroll; height: 35rem">
                    @foreach ($user->adresses as $adresse)

                        <!-- CARD MODIF ADRESSE-->
                        <div class="card mx-auto mb-4 p-3 border-secondary" style="max-width: 30rem">
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
                                        <input id="code_postal" type="text" class="form-control border-secondary @error('code_postal') 
                                            is-invalid @enderror" name="code_postal" value="{{ $adresse->code_postal }}" required autocomplete="code_postal">

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


    </div>







    <!-- SECTION 5
    ============================================================= -->
    <div class="container" id="section_5_edit_user">
        <div class="row col-md-10 mx-auto">

            <h5 class="text-center fs-2 my-5"><span class="border-bottom border-secondary">Mes vehicules</span></h5>

            @foreach ($user->vehicules as $vehicule)
                <div class="col-md-6 mt-2">

                    <!-- Lien d'accès au détails véhicule -->
                    <a class="text-decoration-none" href="{{ route('vehicules.show', $vehicule) }}">
                        <div class="card w-100 mb-4 mx-auto">

                            <!-- Carte body -->
                            <div class="card-body p-0">
                                <img class="w-100 rounded-top" src="{{ asset('images/' . $vehicule->image) }}">
                            </div>

                            <!-- BOUTON SUPPRESSION COMPTE -->
                            <div class="card-footer text-center">
                                <form action="{{ route('vehicules.destroy', $vehicule) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><small>Supprimer l'annonce</small></button>
                                </form>
                            </div>

                        </div>
                    </a>

                </div>
            @endforeach

        </div>
    </div>






    <!-- FOOTER
    ============================================================= -->
    @include('footer')





@endsection