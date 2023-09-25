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



        <!-- MODIFICATIONS DES INFORMATION
        ============================================================= -->
        <div class="row justify-content-center my-5">
            <div class="col-md-5 col-sm-12 border-end border-secondary">

                <!-- CARD -->
                <div class="card border-0 mx-auto" style="max-width: 30rem">

                    <!-- FORMULAIRE MODIF INFOS -->
                    <form method="POST" action="{{ route('user.update', $user) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                        <div class="row justify-content-center">
                            <h5 class="ms-1 mb-4">Mes informations personnelles</h5>

                            <!-- PSEUDO -->
                            <div class="col-12 mb-4">
                                <label for="pseudo" class="col-form-label ms-2 pb-1"><small>{{ __('Pseudo') }}</small></label>
                                <input id="pseudo" type="text" class="form-control border-secondary @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ $user->pseudo }}" required autocomplete="pseudo" autofocus>

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
                            <div class="col-12 mb-5 border-bottom border-secondary pb-4">
                                <button type="submit" class="btn btn-primary col-12">{{ __('Modifier mes informations') }}</button>
                            </div>


                        </div>
                    </form>



                    <!-- BOUTON SUPPRESSION COMPTE _
                    ============================================================= -->
                    <div class="col-12 text-center">
                        <p>Suppression du compte</p>
                        <form method="POST" action="{{ route('user.destroy', $user) }}">
                        @csrf
                        @method("delete")
                            <button type="submit" class="btn btn-danger">{{ __('Supprimer le compte') }}</button>
                        </form>
                    </div>


                </div>
            </div>



            <div class="col-md-5"></div>


        </div>
    </div>





<!-- FOOTER
    ============================================================= -->
    @include('footer')





@endsection