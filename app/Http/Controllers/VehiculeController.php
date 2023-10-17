<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Forfait;
use App\Models\Vehicule;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Affiche la liste des véhicules avec leurs adresses associées.
    public function index()
    {
         // Récupérez les véhicules avec leurs adresses associées
        $vehicules = Vehicule::with('adresse')->get();

        // Récupérez toutes les catégories
        $categories = Categorie::all(); // Vous pouvez ajuster cela en fonction de votre modèle de catégorie

        // Renvoyez la vue 'vehicules/index' avec les données des véhicules et des catégories
        return view('vehicules/index', ['vehicules' => $vehicules, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // Affiche la vue 'vehicules.show' avec les données du véhicule.
    public function show(Vehicule $vehicule)
    {
        // Récupérez les avis associés à ce véhicule avec les informations de l'utilisateur et la note
        $avis = $vehicule->avis()->with('user')->get();

        $forfaits = Forfait::all();

        // Affiche la vue 'vehicules.show' avec les données du véhicule et des avis
        return view('vehicules.show', compact('vehicule', 'avis', 'forfaits'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
