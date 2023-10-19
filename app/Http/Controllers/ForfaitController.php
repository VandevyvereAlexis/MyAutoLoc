<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;        // Importe la classe Request du framework Laravel pour gérer les requêtes HTTP.
use App\Models\Forfait;             // Importe la classe Forfait depuis le modèle de données (Model) 'Forfait'.





class ForfaitController extends Controller
{






    public function show($forfait_id)
    {
        // Récupère un forfait par son identifiant passé dans l'URL.
        $forfait = Forfait::find($forfait_id);

        // Rend la vue 'dossier.show' en passant le forfait à afficher.
        return view('dossier.show', ['forfait' => $forfait]);
    }





}
