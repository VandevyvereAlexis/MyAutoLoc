<?php

namespace App\Http\Controllers;

use App\Models\User;                        // Importer la classe "User"
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user/edit', ['user' => $user]);    // Renvoie la vue "user/edit" avec les données de l'utilisateur.

        // Affiche le formulaire de modification de l'utilisateur spécifié en paramètre et renvoie la vue correspondante.
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validatiion des données entrées par l'utilisateur
        $request->validate([
            'nom'           => 'required|max:60',                                               // Champ 'nom' requis, maximum 60 caractères.
            'prenom'        => 'required|max:60',                                               // Champ 'prenom' requis, maximum 60 caractères.
            'email'         => 'required|min:6|max:100',                                        // Champ 'email' requis, entre 6 et 100 caractères.
            'pseudo'        => 'required|max:60',                                               // Champ 'pseudo' requis, maximum 60 caractères.
            'image'         => 'nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048',   // Champ 'image' facultatif, doit être une image avec des extensions spécifiques, taille maximale de 2048 Ko.
            'numero_permis' => 'required', 'string', 'max:50',                                  // Champ 'numero_permis' requis, chaîne de caractères, maximum 50 caractères.
            'pays_permis'   => 'required', 'string', 'min:3', 'max:50',                         // Champ 'pays_permis' requis, chaîne de caractères, entre 3 et 50 caractères.
            'numero'        => 'required', 'digits:10', 'unique:users',                         // Champ 'numero' requis, doit avoir 10 chiffres, et doit être unique dans la table 'users'.
            'date_permis'   => 'required', 'date',                                              // Champ 'date_permis' requis, doit être une date.
        ]);


        // Mise à jour des propriétés de l'utilisatuer avec les nouvelle valeurs 
        $user->nom              = $request->input('nom');                                                       // Met à jour le nom de l'utilisateur.
        $user->prenom           = $request->input('prenom');                                                    // Met à jour le prénom de l'utilisateur.
        $user->email            = $request->input('email');                                                     // Met à jour l'email de l'utilisateur.
        $user->pseudo           = $request->input('pseudo');                                                    // Met à jour le pseudo de l'utilisateur.
        $user->image            = isset($request['image']) ? uploadImage($request['image']) : $user->image;     // Met à jour l'image de profil de l'utilisateur en utilisant 'uploadImage' si une image est fournie, sinon conserve l'image existante.  
        $user->numero_permis    = $request->input('numero_permis');                                             // Met à jour le numéro de permis de l'utilisateur.
        $user->pays_permis      = $request->input('pays_permis');                                               // Met à jour le pays de délivrance du permis de l'utilisateur.
        $user->numero           = $request->input('numero');                                                    // Met à jour le numéro de téléphone de l'utilisateur.
        $user->date_permis      = $request->input('date_permis');                                               // Met à jour la date de délivrance du permis de l'utilisateur.


        // Sauvegarde des modifications dans la base de données
        $user->save();


        //Redirection vers la page précédente avec un message de succès
        return back()->with('message', 'Vos informations ont bien été modifiées');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Vérifie si l'utilisateur connecté est l'utilisateur à supprimer
        if (Auth::user()->id == $user->id) 
        {
            // Supprime l'utilisateur de la base de données
            $user->delete();

            // Redirige vers la page d'accueil avec un message de succès
            return redirect()->route('home')->with('message', 'Le compte a bien été supprimé');

        } else {
            // Redirige vers la page précédente avec un erreur
            return redirect()->back()->withErrors(['erreur' => 'suppression du compte impossible']);
        }
    }
}
