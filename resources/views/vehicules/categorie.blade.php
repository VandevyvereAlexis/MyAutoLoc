@extends('layouts.app')

@section('content')





    <!-- SECTION 1 
    ========================================================== -->
    <div class="container my-5 pt-5" style="min-height: 100vh">
        <div class="row m-0" id="section_1_categorie_vehhicules">





            <!-- LIEN RETOUR LISTE VEHICULES -->
            <a href="{{ route('vehicules.index') }}">
                <i class="fa-solid fa-arrow-left-long text-dark">
                    <span class="ms-2 text-dark">Retour</span>
                </i>
            </a>


            <!-- TITRE PAGE -->
            <h1 class="mt-4 mb-5 ms-3"><span class="border-bottom border-dark">{{ $categorie->nom }}</span></h1>


            <!-- SI AUCUN VEHICULE -->
            @if ($vehicules->isEmpty())
                <p>Pas de véhicule disponible pour cette catégorie pour le moment.</p>

            <!-- SI BOUCLE SUR LISTE ANNONCES-->
            @else
                @foreach ($vehicules as $vehicule)
                    <div class="col-md-4 col-sm-6 mt-4">


                        <!-- CARD AVEC LIEN ACCES PAGE DETAIL VEHICULE -->
                        <a class="text-decoration-none" href="{{ route('vehicules.show', $vehicule) }}">
                            <div class="card mb-4 mx-auto" id="carte_index_vehicules">


                                <!-- CARTE HEADER -->
                                <div class="card-header p-2 d-flex gap-3 align-items-center">
                                    <img class="rounded-circle" src="{{ asset('images/' . $vehicule->user->image) }}">
                                    <h2 class="fs-6 mb-0" style="font-weight: 300">{{ $vehicule->user->nom }} {{ $vehicule->user->prenom }}</h2>
                                </div>


                                <!-- CARTE BODY -->
                                <div class="card-body p-0">
                                    <img class="w-100" src="{{ asset('images/' . $vehicule->image) }}">
                                </div>


                                <!-- CARTE FOOTER  -->
                                <div class="card-footer p-2">
                                    <h3 class="fs-5 mb-3 ms-1">{{ $vehicule->marque }} {{ $vehicule->modele }}</h3>

                                    <!-- SI VEHICULE A UNE ADRESSE -->
                                    @if ($vehicule->adresse)
                                        <p class="mb-1 ms-1">{{ $vehicule->adresse->ville}} {{ $vehicule->adresse->code_postal}}</p>

                                    <!-- SINON PAS D'ADRESSE -->
                                    @else
                                        <p class="mb-1 ms-1">Aucune adresse associée</p>
                                    @endif


                                    <!-- SI VEHICULE A DES AVIS -->
                                    @if ($vehicule->avis->count() > 0)
                                        <p class="mb-1 ms-1">
                                            <small><i class="fa-solid fa-star fs-5 me-2"></i></small>
                                            {{ number_format($vehicule->avis->avg('note'), 1) }}
                                        </p>

                                    <!-- SINON PAS D'AVIS -->
                                    @else
                                        <p class="mb-1 ms-1">
                                            <i class="fa-solid fa-star fs-5 me-2"></i>
                                            Non noté
                                        </p>
                                    @endif

                                    <!-- PRIX LOCATION -->
                                    <p class="mb-1 ms-1"><small class="fw-light">À partir de : </small>{{ $vehicule->prix }}€/j</p>
                                </div>


                            </div>
                        </a>


                    </div>
                @endforeach
            @endif





        </div>
    </div>





    <!-- FOOTER
    ============================================================= -->
    @include('footer')





@endsection