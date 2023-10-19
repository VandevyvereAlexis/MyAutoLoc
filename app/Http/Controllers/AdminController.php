<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\User;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eager loading : je récupère tous les véhicules avec le propriétaire, la catégorie et l'adresse de chacun
        $vehicules = Vehicule::with('user', 'categorie', 'adresse')->get();

        // Récupère tous les utilisateurs
        $users = User::all();

        // Récupère tous les avis
        $avis = Avis::all();


        return view('admin.index', [
            'vehicules'     => $vehicules,
            'users'         => $users,
            'avis'          => $avis,
        ]);

    }
}
