@extends('layouts.app')

@section('content')





    <div class="container-fluid pt-5 mb-5" style="min-height: 100vh">





        <!-- SECTION 1 ITTRE PAGE
        ============================================================= -->
        <div class="row py-2 mt-3 border-top border-secondary rounded-bottom" id="section_1_edit_user">
            <h1 class="text-center">BACKLOG</h1>
        </div>





        <!-- MESSAGES ALERTE SUCCESS/DANGER -->
        <div class="row mt-3">
            <div class="col">
                @include('messages')
            </div>
        </div>





        <!-- SECTION 2 ANNONCES 
        ============================================================= -->
        <div class="row col-md-11 mx-auto mt-5">
            <h3 class="text-center mb-3"><span class="border-bottom border-secondary">Annonces</span></h3>


            <div class="col border p-2 border-secondary rounded" style="overflow-y: scroll; overflow-x: auto; height: 400px;">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="px-5" scope="col">Marque</th>
                            <th class="px-5" scope="col">Modele</th>
                            <th class="px-5" scope="col">Energie</th>
                            <th class="px-5" scope="col">Image</th>
                            <th class="px-5" scope="col">Immatriculation</th>
                            <th class="px-5" scope="col">Année</th>
                            <th class="px-5" scope="col">Kilometrage</th>
                            <th class="px-5" scope="col">Prix</th>
                            <th class="px-5" scope="col">Places</th>
                            <th class="px-5" scope="col">CT</th>
                            <th class="px-5" scope="col">propriétaire</th>
                            <th class="px-5" scope="col">catégorie</th>
                            <th class="px-5" scope="col">Adresse</th>
                            <th class="px-5" scope="col">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicules as $vehicule)
                            <thead>
                                <tr>
                                    <th scope="row">{{ $vehicule->marque }}</th>
                                    <td>{{ $vehicule->modele }}</td>
                                    <td>{{ $vehicule->energie }}</td>
                                    <td><img class="rounded" src="{{ asset('images/' . $vehicule->image) }}" alt="Véhicule" style="width: 4rem"></td>
                                    <td>{{ $vehicule->immatriculation }}</td>
                                    <td>{{ $vehicule->annee }}</td>
                                    <td>{{ $vehicule->kilometrage }}</td>
                                    <td>{{ $vehicule->prix }}</td>
                                    <td>{{ $vehicule->nombre_places }}</td>
                                    <td>{{ $vehicule->date_controle }}</td>
                                    <td>{{ $vehicule->user->prenom . ' ' . $vehicule->user->nom }}</td>
                                    <td>{{ $vehicule->categorie->nom }}</td>
                                    <td>{{ $vehicule->adresse->adresse . " " . $vehicule->adresse->code_postal . " " . $vehicule->adresse->ville  }}</td>
                                    <td>
                                        <form method="post" action="{{ route('vehicules.destroy', $vehicule) }}">
                                        @csrf
                                        @method('delete')
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            </thead>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>





        <!-- SECTION 3 UTILISATEURS 
        ============================================================= -->
        <div class="row col-md-11 mx-auto mt-5">

            <h3 class="text-center mb-3"><span class="border-bottom border-secondary">Utilisateurs</span></h3>

            <div class="col border p-2 border-secondary rounded" style="overflow-y: scroll; overflow-x: auto; height: 400px;">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="px-5" scope="col">Nom</th>
                            <th class="px-5" scope="col">Prénom</th>
                            <th class="px-5" scope="col">Image</th>
                            <th class="px-5" scope="col">Pseudo</th>
                            <th class="px-5" scope="col">Numéro</th>
                            <th class="px-5" scope="col">Numéro ermis</th>
                            <th class="px-5" scope="col">E-mail</th>
                            <th class="px-5" scope="col">Age</th>
                            <th class="px-5" scope="col">Date permis</th>
                            <th class="px-5" scope="col">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <thead>
                                <tr>
                                    <th scope="row">{{ $user->nom }}</th>
                                    <td>{{ $user->prenom }}</td>
                                    <td><img class="rounded" src="{{ asset('images/' . $vehicule->user->image) }}" alt="" style="width: 4rem;"></td>
                                    <td>{{ $user->pseudo }}</td>
                                    <td>{{ $user->numero }}</td>
                                    <td>{{ $user->numero_permis }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->age }}</td>
                                    <td>{{ $user->date_permis }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('user.destroy', $user) }}">
                                        @csrf
                                        @method("delete")
                                            <button type="submit" class="btn btn-danger">{{ __('Supprimer le compte') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            </thead>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>





    </div>





    <!-- FOOTER
    ============================================================= -->
    @include('footer')





@endsection
