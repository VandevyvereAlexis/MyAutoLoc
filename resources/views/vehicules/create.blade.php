@extends('layouts.app')

@section('content')





    <div class="container col-11 mx-auto mt-5 pt-3" style="min-height: 100vh">




        <!-- SECTION 1 ITTRE PAGE
        ============================================================= -->
        <div class="row py-2 border-top border-secondary rounded-bottom mb-5" id="section_1_edit_user">
            <h1 class="text-center">Déposez une annonce</h1>
        </div>





        <!-- SECTION 1
        ========================================================== -->
        <div class="row col-md-8 mx-auto pt-2">
            <div class="col">

                <!-- LIEN RETOUR LISTE VEHICULE -->
                <a href="{{ route('home') }}">
                    <i class="fa-solid fa-arrow-left-long text-dark">
                        <span class="ms-2 text-dark">Retour</span>
                    </i>
                </a>

            </div>
        </div>





        <!-- SECTION 2 CREATION ANNONCE
        ============================================================= -->
        <div class="row justify-content-center mt-4 mb-5">


            <!-- MESSAGES ALERTE SUCCESS/DANGER  -->
            <div class="row">
                <div class="col">
                    @include('messages')
                </div>
            </div>


                <!-- CARD FORMULAIRE CREATION ANNONCE -->
                <div class="card col-11 border-secondary pt-3" style="width: 60rem">
                    <form method="POST" action="{{ route('vehicules.store') }}" enctype="multipart/form-data">
                    @csrf


                        <!-- TITRE -->
                        <div class="row justify-content-center">





                            <!-- MARQUE + MODELE -->
                            <div class="d-flex justify-content-around px-1">

                                <!-- MARQUE -->
                                <div class="col-5">
                                    <label for="marque" class="col-form-label ms-2 pb-1"><small>{{ __('Marque') }}</small></label>
                                    <input id="marque" type="text" class="form-control border-secondary bg-white @error('marque') is-invalid @enderror" name="marque" placeholder="Marque" required autocomplete="pseudo">

                                    @error('marque')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- MODELE -->
                                <div class="col-5">
                                    <label for="modele" class="col-form-label ms-2 pb-1"><small>{{ __('Modele') }}</small></label>
                                    <input id="modele" type="text" class="form-control border-secondary bg-white @error('modele') is-invalid @enderror" name="modele" placeholder="Modèle" required autocomplete="modele">

                                    @error('modele')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>





                            <!-- IMMATRICULATION + KILOMETRAGE -->
                            <div class="d-flex justify-content-around px-1 mt-3">

                                <!-- IMMATRICULATION -->
                                <div class="col-5">
                                    <label for="immatriculation" class="col-form-label ms-2 pb-1"><small>{{ __('Immatriculation') }}</small></label>
                                    <input id="immatriculation" type="text" class="form-control border-secondary bg-white @error('immatriculation') is-invalid @enderror" name="immatriculation" placeholder="Immatriculation" required autocomplete="immatriculation">

                                    @error('immatriculation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- KILOMETRAGE -->
                                <div class="col-5">
                                    <label for="kilometrage" class="col-form-label ms-2 pb-1"><small>{{ __('Kilometrage') }}</small></label>
                                    <input id="kilometrage" type="text" class="form-control border-secondary bg-white @error('numero') is-invalid @enderror" name="kilometrage" placeholder="Kilometrage" required autocomplete="kilometrage">

                                    @error('kilometrage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>





                            <!-- ANNEE + NOMBRE DE PLACE -->
                            <div class="d-flex justify-content-around px-1 mt-3">

                                <!-- ANNEE -->
                                <div class="col-5">
                                    <label for="annee" class="col-form-label ms-2 pb-1"><small>{{ __('Année') }}</small></label>
                                    <input id="annee" type="text" class="form-control border-secondary bg-white @error('annee') is-invalid @enderror" name="annee" placeholder="Année" required autocomplete="annee">

                                    @error('annee')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- NOMBRE DE PLACES -->
                                <div class="col-5">
                                    <label for="nombre_places" class="col-form-label ms-2 pb-1"><small>{{ __('Nombre de places') }}</small></label>
                                    <input id="nombre_places" type="text" class="form-control border-secondary bg-white @error('nombre_places') is-invalid @enderror" name="nombre_places" placeholder="Nombre de places" required autocomplete="nombre_places">

                                    @error('nombre_places')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>





                            <!-- DATE CONTROLE TECHNIQUE + IMAGE -->
                            <div class="d-flex justify-content-around px-1 mt-3">

                                <!-- DATE CONTROLE TECHNIQUE -->
                                <div class="col-5">
                                    <label for="date_controle" class="col-form-label ms-2 pb-1"><small>{{ __('Date_controle') }}</small></label>
                                    <input id="date_controle" type="date" class="form-control border-secondary bg-white @error('nombre_places') is-invalid @enderror" name="date_controle" placeholder="Date contrôle" required autocomplete="date_controle">

                                    @error('date_controle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- IMAGE -->
                                <div class="col-5">
                                    <label for="image" class="col-form-label ms-2 pb-1"><small>{{ __('Image') }}</small></label>
                                    <input id="image" type="file" class="form-control border-secondary bg-white @error('image') is-invalid @enderror" name="image" required autocomplete="image">

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>





                            <!-- ADRESSEE + IMAGE -->
                            <div class="d-flex justify-content-around px-1 mt-3">

                                <div class="col-5">
                                    <label for="adresse" class="col-form-label ms-2 pb-1"><small>{{ __('Adresse') }}</small></label>
                                    <select class=" col-12 p-2 mx-auto text-center rounded" id="adresse" name="adresse_id" required>
                                        <option value="">-- Vos adresses --</option>
                                        @foreach ($user->adresses as $adresse)
                                            <option value="{{ $adresse->id }}">{{ $adresse->adresse }} {{ $adresse->ville }} {{ $adresse->code_postal }}</option>
                                        @endforeach
                                    </select>

                                    @error('adresse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- CATEGORIE -->
                                <div class="col-5">
                                    <label for="categorie" class="col-form-label ms-2 pb-1"><small>{{ __('Catégorie') }}</small></label>
                                    <select class="col-12 p-2 mx-auto text-center rounded" id="categorie" name="categorie_id" required>
                                        <option value="">-- Choisissez une catégorie --</option> 
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                        @endforeach
                                    </select>

                                    @error('categorie')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>





                            <!-- ADRESSEE + IMAGE -->
                            <div class="d-flex justify-content-around px-1 mt-3">

                                <!-- ENERGIE -->
                                <div class="col-5">
                                    <label for="energie" class="col-form-label ms-2 pb-1"><small>{{ __('Énergie') }}</small></label>
                                    <select class="col-12 p-2 mx-auto text-center rounded" id="energie" name="energie" required>
                                        <option value="Essence">Essence</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Hybride">Hybride</option>
                                        <option value="Électrique">Électrique</option>
                                        <option value="Hybride rechargeable">Hybride rechargeable</option>
                                    </select>

                                    @error('energie')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- PRIX -->
                                <div class="col-5">
                                    <label for="prix" class="col-form-label ms-2 pb-1"><small>{{ __('Prix') }}</small></label>
                                    <input id="prix" type="text" class="form-control border-secondary bg-white @error('prix') is-invalid  @enderror" placeholder="Prix" name="prix" required autocomplete="prix">

                                    @error('prix')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>





                            <!-- DESCRIPTION -->
                            <div class="col-12 mt-3 mb-3">
                                <label for="description" class="col-form-label ms-2 pb-1"><small>{{ __('Description') }}</small></label>
                                    <textarea class="col-12 p-3 rounded" id="description" name="description" rows="5" cols="33" required>Description du véhicule</textarea>
                                        

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>





                            <!-- BOUTON "VALIDER" -->
                            <div class="col-12 mb-4">
                                <button type="submit" class="btn btn-primary col-12">{{ __('Modifier mes informations') }}</button>
                            </div>





                        </div>


                    </form>
                </div>

        </div>





    </div>





    <!-- FOOTER
    ============================================================= -->
    @include('footer')





@endsection
