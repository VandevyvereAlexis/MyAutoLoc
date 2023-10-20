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




    
    // Gère de manière exhaustive le processus de réservation de véhicules, y compris les règles de validation et les messages informatifs à l'utilisateur.
    public function store(Request $request)
    {

        // Validation des données de base
        $validator = Validator::make($request->all(), [
            'date_debut'            => 'required|date',                                     // Verification que 'date_debut' est requis et est une date valide.
            'date_fin'              => 'required|date|after_or_equal:date_debut',           // Verification que 'date_fin' est requise, est une date valide, et est postérieure ou égale à 'date_debut'.
            'demi_journee_debut'    => 'in:avant-midi,apres-midi',                          // Verification que 'demi_journee_debut' est soit 'matin' ou 'apres-midi'.
            'demi_journee_fin'      => 'in:avant-midi,apres-midi',                          // Verification que 'demi_journee_fin' est soit 'matin' ou 'apres-midi'.
        ], [
            // Message d'erreur personnalisé en cas d'échec de validation pour 'date_fin'.
            'date_fin.after_or_equal' => 'La date de fin doit être postérieure ou égale à la date de début.',
        ]);


        // Si la validation échoue ( si des erreurs ont été détectées ), le code suivant est exécuté.
        if ($validator->fails()) 
        {
            // Redirige l'utilisateur vers la page précédente avec les erreurs de validation et les données d'origine pour correction.
            return back()->withErrors($validator)->withInput();
        }


        // Récupération de l'utilisateur actuellement connecté et le véhicule spécifié dans la requête.
        $user = User::find(Auth::user()->id);                                                               // Obtient l'ID de l'utilisateur actuellement authentifié via "Auth::user()".
        $vehicule = Vehicule::find($request->vehicule_id);                                                  // Recherche du véhicule par son ID provenant de la requête entrante.


        // Chargement de toutes les réservations associées au véhicule.
        $vehicule->load('reservations');                                    // Méthode "load('relation')" charge les données liées à une relation spécifique.
        $reservations = $vehicule->reservations;                            // Récupération des réservations du véhicule dans une variable. Donne accès à la liste de réservations liées à ce véhicule.


        $dateDebutDemandee = $request->date_debut;                          // Récupération de la date de début demandée à partir de la requête et stockage dans la variable "$dateDebutDemandee".
        $demiJourneeDebutDemandee = $request->date_debut_demi_journee;      // Récupération de la demi-journée de début demandée à partir de la requête et la stocke dans la variable "$demiJourneeDebutDemandee".
        $dateFinDemandee = $request->date_fin;                              // Récupération de la date de fin demandée à partir de la requête et la stocke dans la variable "$dateFinDemandee".
        $demiJourneeFinDemandee = $request->date_fin_demi_journee;          // Récupération de la demi-journée de fin demandée à partir de la requête et la stocke dans la variable "$demiJourneeFinDemandee".


        // Boucle pour vérifier si des conflits ou chevauchements existent entre les réservations existantes et la nouvelle réservation.
        foreach ($reservations as $reservation) 
        {
            $reservationDateDebut = $reservation->pivot->date_debut;                        // Convertit la date de début de la réservation en objet "DateTime" pour des comparaisons facilitées.
            $reservationDateFin = $reservation->pivot->date_fin;                            // Convertit la date de fin de la réservation en objet "DateTime" pour des comparaisons facilitées.
            $reservationDebutDemiJournee = $reservation->pivot->date_debut_demi_journee;    // Stockage de la demi-journée de début de la réservation en cours dans $reservationDebutDemiJournee.
            $reservationFinDemiJournee = $reservation->pivot->date_fin_demi_journee;        // Stockage de la demi-journée de fin de la réservation en cours dans $reservationFinDemiJournee.


            // 1ÈRE CONDITION : Vérifie la disponibilité de la demi-journée de début demandée en la comparant à la réservation en cours.
            if (
                ($dateDebutDemandee == $reservationDateDebut && $demiJourneeDebutDemandee == $reservationDebutDemiJournee) ||       // Si la date et la demi-journée de début correspondent à celles de la réservation en cours, la demi-journée de début demandée est déjà réservée.
                ($dateDebutDemandee == $reservationDateFin && $demiJourneeDebutDemandee == $reservationFinDemiJournee)              // Si la date et la demi-journée de début correspondent à celles de la réservation en cours, soit en début ou en fin de la réservation, la demi-journée de début demandée est déjà réservée.
            ) {
                // Si l'une de ces conditions est vraie, une erreur est renvoyée avec un message.
                return back()->withErrors(['erreur' => 'La demi-journée de début est déjà réservée pour ce véhicule.']);
            }


            // 2ÈME CONDITION : Vérifie si la demi-journée de fin demandée est déjà réservée pour le véhicule en comparant les dates et les demi-journées avec la réservation en cours.
            if (
                ($dateFinDemandee == $reservationDateDebut && $demiJourneeFinDemandee == $reservationDebutDemiJournee) ||          // Si la date de fin est égale à la date de début de la réservation en cours et que la demi-journée de fin est égale à la demi-journée de début, la demi-journée de fin demandée est déjà réservée.
                ($dateFinDemandee == $reservationDateFin && $demiJourneeFinDemandee == $reservationFinDemiJournee)                 // Si la date de fin est égale à la date de fin de la réservation en cours et que la demi-journée de fin est égale à la demi-journée de fin, la demi-journée de fin demandée est déjà réservée.
            ) {
                // Si l'une de ces conditions est vraie, une erreur est renvoyée à la page précédente avec un message d'erreur.
                return back()->withErrors(['erreur' => 'La demi-journée de fin est déjà réservée pour ce véhicule.']);
            }


            // 3ÈME CONDITION : Vérifie les chevauchements de réservation, envoie une erreur en cas de conflit.
            if (
                // Si la date de début est avant la date de fin de la réservation en cours, ou si les dates de début sont identiques et que la demi-journée de fin est différente de celle de la réservation en cours, il y a un chevauchement de réservation.
                (($dateDebutDemandee > $reservationDateDebut || ($dateDebutDemandee == $reservationDateDebut && $demiJourneeDebutDemandee == 'apres-midi')) &&     
                ($dateDebutDemandee < $reservationDateFin || ($dateDebutDemandee == $reservationDateFin && $reservationFinDemiJournee == 'avant-midi'))) ||        

                // Si la date de fin est après la date de début de la réservation en cours, ou si les dates de fin sont identiques et que la demi-journée de fin est différente de celle de la réservation en cours, il y a un chevauchement de réservation.
                (($dateFinDemandee > $reservationDateDebut || ($dateFinDemandee == $reservationDateDebut && $reservationDebutDemiJournee == 'apres-midi')) &&      
                ($dateFinDemandee < $reservationDateFin || ($dateFinDemandee == $reservationDateFin && $demiJourneeFinDemandee == 'avant-midi')))                   
            ) {
                // Si l'une de ces conditions est vraie, une erreur est renvoyée à l'utilisateur.
                return back()->withErrors(['erreur' => 'Il y a une réservation existante pendant l\'intervalle que vous demandez.']);
            }


            // 4ÈME : Si une réservation existante englobe entièrement l'intervalle de temps de la nouvelle réservation, cela génère une erreur en cas de conflit.
            if (
                // Si la date de début est avant la date de début de la réservation en cours, et si la date de fin est après la date de fin de la réservation en cours, il y a un conflit.
                (($dateDebutDemandee < $reservationDateDebut || ($dateDebutDemandee == $reservationDateDebut && $demiJourneeDebutDemandee == 'avant-midi'))) &&         
                ($dateFinDemandee > $reservationDateFin || ($dateFinDemandee == $reservationDateFin && $demiJourneeFinDemandee == 'apres-midi'))                        
            ) {
                // Si l'une de ces conditions est vraie, une erreur est renvoyée à l'utilisateur.
                return back()->withErrors(['erreur' => 'Il y a une réservation existante pendant l\'intervalle que vous demandez.']);
            }
        }


        // Récupération de l'ID du forfait choisi à partir de la requête utilisateur.
        $forfait = Forfait::find($request->forfait_id);

        // Récupération de l'ID du véhicule choisi à partir de la requête utilisateur.
        $vehicule = Vehicule::find($request->vehicule_id);

        // Conversion de la date de début demandée au format "YYYY-MM-DD" en timestamp.
        $date_debut = strtotime($dateDebutDemandee);

        // Conversion de la date de fin demandée au format "YYYY-MM-DD" en timestamp.
        $date_fin = strtotime($dateFinDemandee);

        // Calcul du nombre de jours entre la date de début et la date de fin, en ajoutant 1 jour pour arrondir le résultat.
        $nombre_de_jours = (($date_fin - $date_debut) / 86400) + 1;

        // Calcul du prix total en combinant le prix du forfait et le prix du véhicule multiplié par le nombre de jours de location.
        $prix = $forfait->prix + $vehicule->prix * $nombre_de_jours;


        // Attache la réservation à l'utilisateur en utilisant la méthode attach() avec les détails fournis dans la requête, y compris la date, les demi-journées et le véhicule spécifié.
        $user->reservations()->attach($request->vehicule_id, [
            'forfait_id'                => $request->forfait_id,                            // Attache la réservation à l'utilisateur courant et au véhicule spécifié dans la requête. Inclusion également des détails de la réservation sous forme de tableau associatif.
            'date_debut'                => $request->date_debut,                            // Attribution la date de début de la réservation à partir des données fournies dans la requête.
            'date_debut_demi_journee'   => $request->date_debut_demi_journee,               // Attribution de la demi-journée de début de la réservation à partir des données fournies dans la requête.
            'date_fin'                  => $request->date_fin,                              // Attribution de la date de fin de la réservation à partir des données fournies dans la requête.
            'date_fin_demi_journee'     => $request->date_fin_demi_journee,                 // Attribution de la demi-journée de fin de la réservation à partir des données fournies dans la requête.
            'prix'                      => $prix,                                           // Attribution de la demi-journée de fin de la réservation à partir des données fournies dans la requête.
        ]);


        // Redirection de l'utilisateur vers la page précédente avec un message de confirmation, indiquant que la location du véhicule a été enregistrée avec succès.
        return back()->with('message', 'La location du véhicule a été enregistrée avec succès.');
    }





}
