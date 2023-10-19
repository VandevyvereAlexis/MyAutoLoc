<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // Utilisation de la classe DB pour gérer la base de données.
use App\Models\Forfait;             // Utilisation de la classe Forfait du modèle.
use App\Models\Vehicule;            // Utilisation de la classe Vehicule du modèle.
use Carbon\Carbon;                  // Utilisation de la classe Carbon pour gérer les dates et heures.

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // Génère des réservations aléatoires dans la table 'reservations'.
    public function run(): void
    {
        // Boucle de 1 à 76.
        for ($i = 1; $i < 77; $i++) 
        {
            // Génération d'une date de début aléatoire entre aujourd'hui et 30 jours dans le futur
            $startDate = Carbon::now()->addDays(rand(1, 30));

            // Génération d'une date de fin aléatoire entre la date de début et 6 jours dans le futur
            $endDate = $startDate->copy()->addDays(rand(1, 6));

            // Extraction de l'heure de début au format "H:i:s"
            $startTime = $startDate->format('H:i:s');

            // Extraction de l'heure de fin au format "H:i:s"
            $endTime = $endDate->format('H:i:s');

            // Détermination de "demi_journee" en fonction des heures de début et de fin
            $demiJournee = 'avant-midi'; // Par défaut à "avant-midi"

            // Détermine si la période est l'après-midi en fonction des heures de début et de fin.
            if ($startTime >= '12:00:00' && $endTime <= '23:59:59') 
            {
                $demiJournee = 'après-midi';
            }

            // Insertion d'une nouvelle réservation dans la table 'reservations' avec des données aléatoires
            DB::table('reservations')->insert([
                'vehicule_id' => rand(1, Vehicule::count()),    // ID de véhicule aléatoire entre 1 et le nombre total de véhicules

                'prix' => fake()->randomFloat(2, 40, 200),      // Prix aléatoire entre 40 et 200 avec 2 décimales

                'user_id' => $i,                                // Utilisation de la valeur actuelle de $i comme ID d'utilisateur

                'forfait_id' => rand(1, Forfait::count()),      // ID de forfait aléatoire entre 1 et le nombre total de forfaits

                'date_debut' => $startDate->toDateString(),     // Formatage de la date de début au format de chaîne

                'date_fin' => $endDate->toDateString(),         // Formatage de la date de fin au format de chaîne

                'date_fin_demi_journee' => $demiJournee,        // Utilisation de la valeur déterminée pour "demi_journee"

                'date_debut_demi_journee' => $demiJournee,      // Utilisation de la valeur déterminée pour "demi_journee"
            ]);
        }
    }
}



