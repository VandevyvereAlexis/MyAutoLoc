<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Forfait;
use App\Models\User;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehiculeController extends Controller
{





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





    public function create()
    {
        // L'utilisateur connecté
        $user = User::find(Auth::user()->id);       
        
        $user->load('adresses');                //EAGER LOADING

        $categories = Categorie::all();

        // Affiche un formulaire pour créer un nouveau véhicule
        return view('vehicules.create', compact('user', 'categories'));
    }





    public function store(Request $request)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'marque'                => 'required',
            'modele'                => 'required',
            'energie'               => 'required',
            'image'                 => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'immatriculation'       => 'required|unique:vehicules',
            'annee'                 => 'required|integer',
            'kilometrage'           => 'required|numeric',
            'description'           => 'required',
            'prix'                  => 'required|numeric',
            'nombre_places'         => 'required|integer',
            'date_controle'         => 'required|date',
        ]);

        // Ajoutez l'ID de l'utilisateur connecté au tableau des données validées
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['adresse_id'] = $request->adresse_id;
        $validatedData['categorie_id'] = $request->categorie_id;
        $validatedData['image'] = uploadImage($request['image']);        // Image de profil, soit téléchargée via la fonction 'uploadImage' si présente, sinon image par défaut 'user.png'.  

        // Enregistrez le nouveau véhicule dans la base de données
        Vehicule::create($validatedData);

        // Redirigez l'utilisateur vers la page de liste des véhicules
        return redirect()->route('vehicules.index')->with('message', 'L\'annonce a bien été enregistrée');
    }





    // Affiche la vue 'vehicules.show' avec les données du véhicule.
    public function show(Vehicule $vehicule)
    {
        // Récupérez les avis associés à ce véhicule avec les informations de l'utilisateur et la note
        $avis = $vehicule->avis()->with('user')->get();

        $forfaits = Forfait::all();

        // Affiche la vue 'vehicules.show' avec les données du véhicule et des avis
        return view('vehicules.show', compact('vehicule', 'avis', 'forfaits'));
    }





    public function update(Request $request, Vehicule $vehicule)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'marque'                => 'required',
            'modele'                => 'required',
            'energie'               => 'required',
            'image'                 => 'sometimes|image', 
            'immatriculation'       => 'required|unique:vehicules,immatriculation,' . $vehicule->id,
            'annee'                 => 'required|integer',
            'kilometrage'           => 'required|numeric',
            'description'           => 'required',
            'prix'                  => 'required|numeric',
            'nombre_places'         => 'required|integer',
            'date_controle'         => 'required|date',
        ]);

        // Mettez à jour les informations du véhicule
        $vehicule->update($validatedData);

        // Redirigez l'utilisateur vers la page de détails du véhicule
        return redirect()->route('vehicules.show', $vehicule->id);
    }





    public function destroy(Vehicule $vehicule)
    {
        // Supprimez le véhicule de la base de données
        $vehicule->delete();

        // Redirigez l'utilisateur vers la page de liste des véhicules ou une autre page appropriée
        return back()->with('message', 'Votre annonce à bien été supprimé');
    }





}
