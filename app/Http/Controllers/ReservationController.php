<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use App\Models\User;                            // Importation de la classe User du modèle de données de l'application. Permet d'utiliser le modèle d'utilisateur dans ce fichier.
use App\Models\Vehicule;                        // Importaton de la classe Vehicule du modèle de données de l'application. Permet d'utiliser le modèle de véhicule dans ce fichier.
use Illuminate\Support\Facades\Validator;       // Importaton de la classe Validator du framework Laravel. Elle sera utilisée pour effectuer des validations sur les données fournies par l'utilisateur.
use Illuminate\Http\Request;                    // Importation de la classe Request du framework Laravel. Utilisée pour gérer les requêtes HTTP entrantes, y compris la récupération des données soumises par l'utilisateur.
use Illuminate\Support\Facades\Auth;            // Importation la classe Auth du framework Laravel. Permet d'accéder aux fonctionnalités d'authentification de l'application, notamment pour vérifier l'utilisateur connecté.

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    // Gère de manière exhaustive le processus de réservation de véhicules en tenant compte de nombreuses règles de validation et de conflits potentiels, tout en fournissant des messages informatifs à l'utilisateur lors de chaque étape du processus.
    public function store(Request $request)
    {



        // Validation des données de base
        $validator = Validator::make($request->all(), [
            'date_debut'            => 'required|date',                             // Verification que 'date_debut' est requis et est une date valide.
            'date_fin'              => 'required|date|after_or_equal:date_debut',   // Verification que 'date_fin' est requise, est une date valide, et est postérieure ou égale à 'date_debut'.
            'demi_journee_debut'    => 'in:avant-midi,apres-midi',                       // Verification que 'demi_journee_debut' est soit 'matin' ou 'apres-midi'.
            'demi_journee_fin'      => 'in:avant-midi,apres-midi',                       // Verification que 'demi_journee_fin' est soit 'matin' ou 'apres-midi'.
        ], [
            // Message d'erreur personnalisé en cas d'échec de validation pour 'date_fin'.
            'date_fin.after_or_equal' => 'La date de fin doit être postérieure ou égale à la date de début.',   
        ]);


        // Si la validation échoue ( si des erreurs ont été détectées ), le code suivant est exécuté.
        if ($validator->fails()) 
        {
            // Je retourne l'utilisateur à la page précédente "back()" avec les erreurs de validation (errors) et les données de la requête d'origine "withInput()" afin que l'utilisateur puisse les corriger.
            return back()->withErrors($validator)->withInput();
        }


        // Récupération de l'utilisateur actuellement connecté et le véhicule spécifié dans la requête.
        $user = User::find(Auth::user()->id);                   // Utilisation de la classe "User" ( représentant les utilisateurs ) pour trouver l'utilisateur actuellement authentifié. "Auth::user()" renvoie l'utilisateur connecté, puis on récupère son ID spécifique avec ->id.
        $vehicule = Vehicule::find($request->vehicule_id);      // Utilisation de la classe Vehicule ( représentant les véhicules ) pour trouver le véhicule correspondant à l'ID passé dans la requête. "$request->vehicule_id" suppose que l'ID du véhicule a été inclus dans la requête entrante.


        // Chargement de toutes les réservations associées au véhicule.
        $vehicule->load('reservations');            // Méthode "load('relation')" charge les données liées à une relation spécifique.
        $reservations = $vehicule->reservations;    // Récupération des réservations du véhicule dans une variable. Donne accès à la liste de réservations liées à ce véhicule.


        $dateDebutDemandee = $request->date_debut;                          // Récupération de la date de début demandée à partir de la requête et stockage dans la variable "$dateDebutDemandee".
        $demiJourneeDebutDemandee = $request->date_debut_demi_journee;      // Récupération de la demi-journée de début demandée à partir de la requête et la stocke dans la variable "$demiJourneeDebutDemandee".
        $dateFinDemandee = $request->date_fin;                              // Récupération de la date de fin demandée à partir de la requête et la stocke dans la variable "$dateFinDemandee".
        $demiJourneeFinDemandee = $request->date_fin_demi_journee;          // Récupération de la demi-journée de fin demandée à partir de la requête et la stocke dans la variable "$demiJourneeFinDemandee".


        // Boucle pour vérifier sid es conflits ou chevauchements existent entre les réservations existantes et la nouvelle réservation.
        foreach ($reservations as $reservation) 
        {

            $reservationDateDebut = $reservation->pivot->date_debut;                        // Création d'un objet "DateTime" à partir de la date de début de la réservation en cours. Cela permet de manipuler la date de début sous forme d'objet "DateTime" pour des comparaisons plus aisées.
            $reservationDateFin = $reservation->pivot->date_fin;                            // Création d'un objet "DateTime" à partir de la date de fin de la réservation en cours. Cela permet de manipuler la date de fin sous forme d'objet "DateTime" pour des comparaisons plus aisées.
            $reservationDebutDemiJournee = $reservation->pivot->date_debut_demi_journee;    // Récupération de la demi-journée de début de la réservation en cours et la stocke dans la variable $reservationDebutDemiJournee.
            $reservationFinDemiJournee = $reservation->pivot->date_fin_demi_journee;        // Récupération de la demi-journée de fin de la réservation en cours et la stocke dans la variable $reservationFinDemiJournee.


            // 1ÈRE CONDITION : Vérifie si la demi-journée de début demandée est déjà réservée pour le véhicule en comparant les dates et les demi-journées avec la réservation en cours.
            if (
                ($dateDebutDemandee == $reservationDateDebut && $demiJourneeDebutDemandee == $reservationDebutDemiJournee) ||   // 1. Si la date de début demandée correspond à la date de début de la réservation en cours, ET si la demi-journée de début demandée correspond à la demi-journée de début de la réservation en cours,
                ($dateDebutDemandee == $reservationDateFin && $demiJourneeDebutDemandee == $reservationFinDemiJournee)          // 2. OU si la date de début demandée correspond à la date de fin de la réservation en cours, ET si la demi-journée de début demandée correspond à la demi-journée de fin de la réservation en cours.
            ) {
                // Si l'une de ces conditions est vraie, cela signifie que la demi-journée de début demandée est déjà réservée pour le véhicule. Dans ce cas, une erreur est renvoyée à la page précédente avec un message d'erreur.
                return back()->withErrors(['erreur' => 'La demi-journée de début est déjà réservée pour ce véhicule.']);
            }


            // 2ÈRE CONDITION : Vérifie si la demi-journée de fin demandée est déjà réservée pour le véhicule en comparant les dates et les demi-journées avec la réservation en cours. 
            if (
                ($dateFinDemandee == $reservationDateDebut && $demiJourneeFinDemandee == $reservationDebutDemiJournee) ||       // 1. Si la date de fin demandée correspond à la date de début de la réservation en cours, ET si la demi-journée de fin demandée correspond à la demi-journée de début de la réservation en cours,
                ($dateFinDemandee == $reservationDateFin && $demiJourneeFinDemandee == $reservationFinDemiJournee)              // 2. OU si la date de fin demandée correspond à la date de fin de la réservation en cours, ET si la demi-journée de fin demandée correspond à la demi-journée de fin de la réservation en cours.
            ) {
                // Si l'une de ces conditions est vraie, cela signifie que la demi-journée de fin demandée est déjà réservée pour le véhicule. Dans ce cas, une erreur est renvoyée à la page précédente avec un message d'erreur.
                return back()->withErrors(['erreur' => 'La demi-journée de fin est déjà réservée pour ce véhicule.']);
            }


            // 3ÈRE CONDITION : Vérifie si une réservation existante chevauche l'intervalle de temps de la nouvelle réservation. En cas de chevauchement, une erreur est renvoyée à l'utilisateur pour signaler le conflit.
            if (
                // La première condition vérifie si le début demandé est après le début de la réservation et avant la fin de la réservation en cours. Elle examine également les demi-journées pour s'assurer qu'elles correspondent.
                (($dateDebutDemandee > $reservationDateDebut || ($dateDebutDemandee == $reservationDateDebut && $demiJourneeDebutDemandee == 'apres-midi')) &&
                ($dateDebutDemandee < $reservationDateFin || ($dateDebutDemandee == $reservationDateFin && $reservationFinDemiJournee == 'avant-midi'))) ||

                // ET

                // La deuxième condition vérifie si la fin demandée est après le début de la réservation en cours et avant la fin de la réservation. Elle examine également les demi-journées pour s'assurer qu'elles correspondent.
                (($dateFinDemandee > $reservationDateDebut || ($dateFinDemandee == $reservationDateDebut && $reservationDebutDemiJournee == 'apres-midi')) && 
                ($dateFinDemandee < $reservationDateFin || ($dateFinDemandee == $reservationDateFin && $demiJourneeFinDemandee == 'avant-midi')))  
            ) {
                // Si l'une de ces conditions est vraie, cela signifie qu'il y a une réservation existante qui chevauche l'intervalle demandé. Dans ce cas, une erreur est renvoyée à l'utilisateur.
                return back()->withErrors(['erreur' => 'Il y a une réservation existante pendant l\'intervalle que vous demandez.']);
            }


            // *********************** Condition 4 : Si ma réservation englobe la réservation existante ********************

            // 4ÈRE CONDITION : Vérifie si une réservation existante englobe complètement l'intervalle de temps de la nouvelle réservation demandée. Si c'est le cas, une erreur est renvoyée à l'utilisateur pour signaler le conflit.
            if (
                // La première condition vérifie si la date de début demandée est avant la date de début de la réservation en cours. Elle examine également les demi-journées pour s'assurer qu'elles correspondent.
                (($dateDebutDemandee < $reservationDateDebut || ($dateDebutDemandee == $reservationDateDebut && $demiJourneeDebutDemandee == 'avant-midi'))) && 

                // ET

                // La deuxième condition vérifie si la date de fin demandée est après la date de fin de la réservation en cours. Elle examine également les demi-journées pour s'assurer qu'elles correspondent.
                ($dateFinDemandee > $reservationDateFin || ($dateFinDemandee == $reservationDateFin && $demiJourneeFinDemandee == 'apres-midi')) // si ma fin est APRES la fin de la réservation
            ) {
                // Si les deux conditions sont remplies, cela signifie qu'il y a une réservation existante qui englobe complètement la nouvelle réservation demandée. Dans ce cas, une erreur est renvoyée à l'utilisateur.
                return back()->withErrors(['erreur' => 'Il y a une réservation existante pendant l\'intervalle que vous demandez.']);
            }

        }

        // recuperation de l'id du forfait choisi, 
        $forfait = Forfait::find($request->forfait_id);

        $vehicule = Vehicule::find($request->vehicule_id);

        $date_debut = strtotime($dateDebutDemandee); // Date de début au format "YYYY-MM-DD"
        $date_fin = strtotime($dateFinDemandee); // Date de fin au format "YYYY-MM-DD"
        $nombre_de_jours = (($date_fin - $date_debut) / 86400) + 1; // Arrondir le résultat

        $prix = $forfait->prix + $vehicule->prix * $nombre_de_jours;


        // Attache la réservation à l'utilisateur en utilisant la méthode attach() avec les détails fournis dans la requête, y compris la date, les demi-journées et le véhicule spécifié.
        $user->reservations()->attach($request->vehicule_id, [
            'forfait_id' => $request->forfait_id,                          // Attache la réservation à l'utilisateur courant et au véhicule spécifié dans la requête. Inclusion également des détails de la réservation sous forme de tableau associatif.
            'date_debut' => $request->date_debut,                       // Attribution la date de début de la réservation à partir des données fournies dans la requête.
            'date_debut_demi_journee' => $request->demi_journee_debut,  // Attribution de la demi-journée de début de la réservation à partir des données fournies dans la requête.
            'date_fin' => $request->date_fin,                           // Attribution de la date de fin de la réservation à partir des données fournies dans la requête.
            'date_fin_demi_journee' => $request->demi_journee_fin,      // Attribution de la demi-journée de fin de la réservation à partir des données fournies dans la requête.
            'prix' => $prix,      // Attribution de la demi-journée de fin de la réservation à partir des données fournies dans la requête.
        ]);


        // Redirection de l'utilisateur vers la page précédente avec un message de confirmation, indiquant que la location du véhicule a été enregistrée avec succès.
        return back()->with('message', 'La location du véhicule a été enregistrée avec succès.');
    }










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
