<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;            // Cette ligne importe la classe Request du framework Laravel pour gérer les requêtes HTTP.
use App\Models\Adresse;                 // Cette ligne importe la classe Adresse depuis le modèle de données (Model) 'Adresse'.
use Illuminate\Support\Facades\Auth;    // Cette ligne importe la classe Auth du framework Laravel pour gérer l'authentification.


// Cette ligne déclare la classe AdresseController qui hérite de la classe Controller.
class AdresseController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */

    // Cette méthode est utilisée pour traiter la soumission du formulaire de création d'une adresse.
    public function store(Request $request)
    {
        // Cette partie valide les données du formulaire en spécifiant des règles pour chaque champ.
        $request->validate([
            'adresse'       => 'required|min:5|max:100',
            'code_postal'   => 'required|min:5|max:5',
            'ville'         => 'required|min:3|max:50',
        ]);

        // Crée une nouvelle instance de la classe Adresse.
        $adresse = new Adresse;

        // Attribue les valeurs des champs du formulaire à l'instance Adresse créée précédemment.
        $adresse->adresse = $request->input('adresse');
        $adresse->code_postal = $request->input('code_postal');
        $adresse->ville = $request->input('ville');
        $adresse->user_id = $request->input('user_id');

        // Enregistre l'adresse dans la base de données.
        $adresse->save();

        // Redirige l'utilisateur vers la page d'édition de l'utilisateur actuellement authentifié avec un message de confirmation.
        return redirect()->route('user.edit', Auth::user())->with('message', 'Votre adresse a bien été enregistrée');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Cette méthode est destinée à afficher les détails d'une adresse spécifique,
    }




    /**
     * Update the specified resource in storage.
     */

     // Cette méthode est utilisée pour mettre à jour une adresse existante.
    public function update(Request $request, Adresse $adresse)
    {
        // Cette partie valide les données du formulaire d'édition en spécifiant des règles pour chaque champ.
        $request->validate([
            'adresse'       => 'required|min:5|max:50',
            'code_postal'   => 'required|min:5|max:5',
            'ville'         => 'required|min:3|max:50',
        ]);

        // Met à jour les valeurs de l'adresse existante avec les données du formulaire.
        $adresse->adresse = $request->input('adresse');
        $adresse->code_postal = $request->input('code_postal');
        $adresse->ville = $request->input('ville');
        $adresse->user_id = $request->input('user_id');

        // Enregistre les modifications dans la base de données.
        $adresse->save();

        // Redirige l'utilisateur vers la page d'édition de l'utilisateur actuellement authentifié avec un message de confirmation.
        return redirect()->route('user.edit', Auth::user())->with('message', 'Votre adresse a bien été mise à jour');
    }




    /**
     * Remove the specified resource from storage.
     */

    // Cette méthode est utilisée pour supprimer une adresse existante.
    public function destroy(string $id)
    {
        // Recherche l'adresse à supprimer dans la base de données.
        $adresse = Adresse::find($id);

        // Supprime l'adresse de la base de données.
        $adresse->delete();

        // Redirige l'utilisateur vers la page d'édition de l'utilisateur actuellement authentifié avec un message de confirmation de suppression.
        return redirect()->route('user.edit', Auth::user())->with('message', 'L\'adresse a été supprimée avec succès');
    }
}
