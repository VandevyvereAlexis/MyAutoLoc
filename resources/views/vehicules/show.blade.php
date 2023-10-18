@extends('layouts.app')

@section('content')



        <!-- MESSAGES ALERTE SUCCESS/DANGER
        ============================================================= -->
        @include('messages')




    <div class="container-fluid col-md-10 my-5 pt-5">





        <!-- SECTION 1 
        ========================================================== -->
        <div class="row mt-5">
            <div class="col">


                <!-- Liens retour liste véhicules -->
                <a href="{{ route('vehicules.index') }}">
                    <i class="fa-solid fa-arrow-left-long text-dark">
                        <span class="ms-2 text-dark">Retour</span>
                    </i>
                </a>


                <!-- Titre ( marque - modele ) -->
                <h1 class="mt-4">{{ $vehicule->marque }} {{ $vehicule->modele }}</h1>


                <!-- ( si ) avis, affichage étoile + note  //  ( sinon ), affichage étoile + message 'Non noté' -->
                <div class="d-flex">
                    @if ($vehicule->avis->count() > 0)  
                        <p>
                            <small><i class="fa-solid fa-star fs-5 me-2" style="color: #f5ec00; text-shadow: 0px 0px 0.5px black"></i></small>
                            {{ number_format($vehicule->avis->avg('note'), 1) }}
                        </p>
                    @else                              
                        <p>
                            <i class="fa-solid fa-star fs-5 me-2" style="color: #f5ec00; text-shadow: 0px 0px 0.5px black"></i>
                            Non noté
                        </p>
                    @endif


                    <!-- Affichage nombre d'avis -->
                    <a href="#section_show_5" class="text-center ms-2 fw-light text-decoration-none text-dark">({{ $vehicule->avis->count() }} avis)</a>


                    <!-- Affichage Nom + Prenom propriétaire du véhicule -->
                    <p class="ms-2">•<span class="ms-2">{{ $vehicule->user->nom }} {{ $vehicule->user->prenom }}</span></p>
                    
                </div>


            </div>
        </div>





        <!-- SECTION 2 
        ========================================================== -->
        <div class="row" id="section_show_2">


            <!-- Affichage image véhicule -->
            <div class="col-md-6 col-sm-12 mx-auto" id="col_1_show_vehicules">
                <img class="rounded w-100" src="{{ asset('images/' . $vehicule->image) }}" alt="Véhicule">
            </div>


            <!-- Carte réservation -->
            <div class="col-md-6 d-flex align-items-center justify-content-center mx-auto">

                <form method="POST" action="{{ route('reservations.store') }}">
                @csrf

                    <input type="hidden" name="vehicule_id" value="{{ $vehicule->id }}">

                    <div class="card p-5" style="width: 29rem;">

                        <!-- Date début -->
                        <label class="ms-1" for="">Début</label>
                        <div class="d-flex gap-1 mb-4">
                            <input class="col-6 p-2" type="date" name="date_debut" min="{{ date('Y-m-d') }}">
                            <select class="col-6" id="demi_journee_debut" name="demi_journee_debut">
                                <option value="avant-midi">Avant-midi</option>
                                <option value="apres-midi">Après-midi</option>
                            </select>
                        </div>


                        <!-- Date fin -->
                        <label class="ms-1" for="">Fin</label>
                        <div class="d-flex gap-1 mb-4">
                            <input class="col-6 p-2" type="date" name="date_fin" min="{{ date('Y-m-d') }}">
                            <select class="col-6" id="demi_journee_fin" name="demi_journee_fin">
                                <option value="avant-midi">Avant-midi</option>
                                <option value="apres-midi">Après-midi</option>
                            </select>
                        </div>


                        <!-- Forfaits -->
                        <label class="text-center mt-1" for="">Forfait</label>
                        <select class="col-5 mb-4 p-2 mx-auto text-center" id="demi_journee_fin" name="forfait_id">
                            @foreach ($forfaits as $forfait)
                                <option value="{{ $forfait->id }}">{{ $forfait->kilometres }}km {{ $forfait->prix }}€</option>
                            @endforeach
                        </select>

                        <!-- Affichage prix location véhicule -->
                        <p class="text-center mb-4"><small class="fw-normal">La tarification est de <span class="fw-medium border-bottom border-secondary">{{ $vehicule->prix }} €</span> par jour, quelle que soit l'heure de la journée.</small></p>

                        @guest
                            <p class="fw-light border-top border-bottom border-secondary">Pour réserver un véhicule, vous devez être connecté ou inscrit. Si vous avez déjà un compte, veuillez vous connecter. Sinon, veuillez vous inscrire.<a class="text-decoration-none" href="{{ route('register') }}"> Inscription</a> | <a class="text-decoration-none" href="{{ route('login') }}">Connexion</a></p>
                            <!-- LIEN INSCRIPTION -->
                        @else
                            <button type="submit" class="btn btn-primary mb-4">{{ __('Réserver ce véhicule') }}</button>
                        @endif
                        


                                


                        <!-- 'Infos' -->
                        <p class="lh-1 fw-bold text-danger-emphasis mb-4 mt-2"><small>Les horaires de réservation et de restitution doivent être convenus en consultation avec le propriétaire de la voiture.</small></p>
                        <i class="fa-solid fa-circle-check mb-2 mt-2"><small class="ms-2">Conducteurs supplémentaires gratuits</small></i>
                        <i class="fa-solid fa-circle-check"><small class="ms-2">Équipements inclus</small></i>

                    </div>

                </form>
            </div>


        </div>





        <!-- SECTION 3 
        ========================================================== -->
        <div class="row mt-5">

            <!-- Titre section --> 
            <h2 class="mb-5"><span class="border-bottom border-dark" style="font-weight: 700">Caractéristiques du véhicule</span></h2>


            <div class="col-md-8 d-flex align-items-center justify-content-between mx-auto">

                <div class="col-5">
                    <p class="d-flex justify-content-between border-bottom"><small class="fw-light">Marque : </small><span>{{ $vehicule->marque }}</span></p>
                    <p class="d-flex justify-content-between border-bottom"><small class="fw-light">Modèle : </small><span>{{ $vehicule->modele }}</span></p>
                    <p class="d-flex justify-content-between border-bottom"><small class="fw-light">Kilomètrage : </small><span>{{ $vehicule->kilometrage }}</span></p>
                    <p class="d-flex justify-content-between border-bottom"><small class="fw-light">Catégorie : </small><span>{{ $vehicule->categorie->nom }}</span></p>
                </div>

                <div class="col-5">
                    <p class="d-flex justify-content-between border-bottom"><small class="fw-light">Énergie : </small><span>{{ $vehicule->energie }}</span></p>
                    <p class="d-flex justify-content-between border-bottom"><small class="fw-light">Nombre de places : </small><span>{{ $vehicule->nombre_places }}</span></p>
                    <p class="d-flex justify-content-between border-bottom"><small class="fw-light">Année : </small><span>{{ $vehicule->annee }}</span></p>
                    <p class="d-flex justify-content-between border-bottom"><small class="fw-light">Prochain CT :</small><span>{{ \Carbon\Carbon::parse($vehicule->date_controle)->format('d.m.Y') }}</span></p>
                </div>

            </div>
        </div>





        <!-- SECTION 4 
        ========================================================== -->
        <div class="row mt-5">
            <div class="col">

                <!-- Titre section --> 
                <h2 class="mb-5"><span class="border-bottom p-1 border-dark" style="font-weight: 700">À propos du véhicule</span></h2>

                <!-- Description annonce -->
                <p>{!! nl2br(strip_tags($vehicule->description)) !!}</p>


            </div>
        </div>





        <!-- SECTION 5 
        ========================================================== -->
        <div class="row mt-5" id="section_show_5">

            <!-- Titre section --> 
            <h2 class="mb-5"><span class="border-bottom p-1 border-dark" style="font-weight: 700">Les évaluations</span></h2>

            @if ($avis->count() > 0)
                @foreach ($avis as $avis)
                    <div class="col-md-6 col-sm-11 d-flex mb-4">
                        <div class="col-3 text-end">
                            <img class="rounded-circle me-4" src="{{ asset('images/' . $vehicule->user->image) }}" alt="" style="width: 3.5rem; height: 3.5rem; box-shadow: -0px -0px 3px black;">
                        </div>
                        
                        <div class="col-9 border-bottom">
                            <p>
                                <small class="fw-normal"><i class="fa-solid fa-star fs-5 me-2" style="color: #f5ec00; text-shadow: 0px 0px 0.5px black"></i>{{ $avis->note }}</small>
                            </p>
                            <p class="fw-normal">{{ $avis->commentaire }}</p>
                            <p class="fw-medium">{{ $avis->user->prenom }} | <small class="fw-normal">{{ $avis->updated_at->format('d M. Y') }}</small></p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <p>Aucun avis n'est disponible pour le moment.</p>
                </div>
            @endif

        </div>


    </div>





    <!-- FOOTER
    ============================================================= -->
    @include('footer')





@endsection