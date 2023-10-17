<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;       // Importation de class catégorie

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Categorie::all();
    
        return view('home', ['categories' => $categories]);
    }


    /**
     *  AFFICHE LA PAGE DE LA POLITIQUE.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function politique()
    {
        // METHODE QUI RENVOIE LA VUE NOMMEE "POLITIQUE"
        return view('politique');
    }

}


