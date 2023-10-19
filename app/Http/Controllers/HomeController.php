<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;        // Importe la classe Request pour gérer les requêtes HTTP.
use App\Models\Categorie;           // Importe la classe Categorie depuis le modèle 'Categorie'.





class HomeController extends Controller
{





    /*
    @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        // Récupère toutes les catégories depuis la base de données.
        $categories = Categorie::all();

        // Rend la vue 'home' en passant les catégories pour affichage.
        return view('home', ['categories' => $categories]);
    }





    /*
    @return \Illuminate\Contracts\Support\Renderable 
    */
    public function politique()
    {
        // Méthode qui renvoie la vue nommée "politique".
        return view('politique');
    }





}


