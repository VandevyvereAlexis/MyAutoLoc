<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicule;        // Importe la classe Vehicule depuis le modèle de données (Model) 'Vehicule'.
use App\Models\Categorie;       // Importe la classe Categorie depuis le modèle de données (Model) 'Categorie'.





class CategorieController extends Controller
{





    public function show($categorie)
    {
        // Recherche la catégorie correspondante dans la base de données en fonction de son nom.
        $categorie = Categorie::where('nom', $categorie)->first();

        // Recherche tous les véhicules liés à la catégorie trouvée.
        $vehicules = Vehicule::where('categorie_id', $categorie->id)->get();

        // Retourne la vue 'vehicules.categorie' en passant les variables $categorie et $vehicules à la vue.
        return view('vehicules.categorie', compact('categorie', 'vehicules'));
    }





}
