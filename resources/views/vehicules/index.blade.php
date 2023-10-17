@extends('layouts.app')

@section('content')





    <div class="container my-5">





        <!-- SECTION 1 
        ========================================================== -->
        <div class="row m-0">


            <!-- Liens retour liste véhicules -->
            <a class="mt-5" href="{{ route('home') }}">
                <i class="fa-solid fa-arrow-left-long text-dark ms-3">
                    <span class="ms-2 text-dark">Retour</span>
                </i>
            </a>


            <!-- Titre de la page --> 
            <h1 class="mt-4 mb-5 ms-3"><span class="border-bottom border-dark">Véhicules à Louer</span></h1>


            <!-- Affichage des catégories -->
            @foreach ($categories as $categorie)
                <div class="col-md-3 mx-auto" id="categories_index">

                    <!-- Lien vers véhicules de la catégorie choisi -->
                    <a class="text-decoration-none" href="{{ route('categories.show', ['categorie' => $categorie->nom]) }}">

                        <!-- Crate catégorie -->
                        <div class="card text-center mx-auto col-9 my-2">
                            <p class="m-0 fw-bold">{{ $categorie->nom }}</p>
                        </div>

                    </a>

                </div>
            @endforeach


            <!-- Boucle qui affiche les véhicules --> 
            @foreach ($vehicules as $vehicule)
                <div class="col-md-4 col-sm-6 mt-5">

                    <!-- Lien d'accès au détails véhicule -->
                    <a class="text-decoration-none" href="{{ route('vehicules.show', $vehicule) }}">

                        <!-- Carte -->
                        <div class="card mb-4 mx-auto" id="carte_index_vehicules">

                            <!-- Carte header -->
                            <div class="card-header p-2 d-flex gap-3 align-items-center">
                                <img class="rounded-circle" src="{{ asset('images/' . $vehicule->user->image) }}">
                                <h2 class="fs-6 mb-0" style="font-weight: 300">{{ $vehicule->user->nom }} {{ $vehicule->user->prenom }}</h2>
                            </div>


                            <!-- Carte body -->
                            <div class="card-body p-0">
                                <img class="w-100" src="{{ asset('images/' . $vehicule->image) }}">
                            </div>


                            <!-- Carte footer -->
                            <div class="card-footer p-2">
                                <h3 class="fs-5 mb-3 ms-1">{{ $vehicule->marque }} {{ $vehicule->modele }}</h3>

                                <!-- ( Si ) véhicule à une adresse, affichage ville + code_postal  //  Sinon, affichage 'Aucune adresse associée' -->
                                @if ($vehicule->adresse)
                                    <p class="mb-1 ms-1">{{ $vehicule->adresse->ville}} {{ $vehicule->adresse->code_postal}}</p>
                                @else
                                    <p class="mb-1 ms-1">Aucune adresse associée</p>
                                @endif

                                <!-- ( si ) avis, affichage étoile + note  //  ( sinon ), affichage étoile + message 'Non noté' -->
                                @if ($vehicule->avis->count() > 0)
                                    <p class="mb-1 ms-1">
                                        <small><i class="fa-solid fa-star fs-5 me-2"></i></small>
                                        {{ number_format($vehicule->avis->avg('note'), 1) }}
                                    </p>
                                @else
                                    <p class="mb-1 ms-1">
                                        <i class="fa-solid fa-star fs-5 me-2"></i>
                                        Non noté
                                    </p>
                                @endif

                                <p class="mb-1 ms-1"><small class="fw-light">À partir de : </small>{{ $vehicule->prix }}€/j</p>
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
