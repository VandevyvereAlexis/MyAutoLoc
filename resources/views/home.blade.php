@extends('layouts.app')

@section('content')





    <div class="container-fluid p-0">





        <!-- MESSAGES ALERTE SUCCESS/DANGER
        ============================================================= -->
        <div class="row mt-3">
            <div class="col">
                @include('messagehome')
            </div>
        </div>





        <!-- SECTION 1 
        ========================================================== -->
        <div class="row vh-100 m-0 align-items-start rounded-bottom" style="background-image: url('/images/fond_9.jpg');" id="home_section_1">

            <!-- Titre -->
            <h1 class="text-light text-center mt-5 pt-4 mx-auto display-2 lh-base"><span class="border-bottom rounded">Explorez le monde à votre rythme</span></h1>
            <!-- Lien vers catégories -->
            <a class="text-light text-center text-decoration-none mt-auto mx-auto mb-5" href="#home_section_2"><span class="rounded border fw-lighter py-3 px-5 fs-4">Découvrir les catégories</span></a>

        </div>





        <!-- SECTION 2 
        ========================================================== -->
        <div class="row mx-0 py-4" id="home_section_2">

            <!-- Boucle qui affiche les catégories --> 
            @foreach ($categories as $categorie)
                <div class="col-md-3 mx-auto">

                    <!-- Lien vers véhicules de la catégorie choisi -->
                    <a class="text-decoration-none" href="{{ route('categories.show', ['categorie' => $categorie->nom]) }}">

                        <!-- Crate catégorie -->
                        <div class="card text-center mx-auto col-9 my-2">
                            <p class="m-0 px-1 py-4 fw-bold">{{ $categorie->nom }}</p>
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
