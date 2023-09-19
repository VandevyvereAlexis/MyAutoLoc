<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Importe la classe 'DB' du namespace 'Illuminate\Support\Facades'. Permet d'utiliser les fonctionnalités de la classe 'DB' sans devoir spécifier le namespace complet à chaque fois.
use Illuminate\Support\Facades\DB;
use App\Models\Forfait;             // Importe la classe "Forfait"
use App\Models\Vehicule;            // Importe la classe "Vehicule"
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Cette boucle "for" itère de 1 à 76 (77 exclus) pour générer des réservations.
        for($i = 1; $i < 77; $i++)                                                 
        {
            // Génère une date de début aléatoire entre aujourd'hui et 30 jours dans le futur.
            $startDate = Carbon::now()->addDays(rand(1, 30));       

            // Génère une date de fin aléatoire entre la date de début et 14 jours après.
            $endDate = $startDate->copy()->addDays(rand(1, 6));     

            // Convertit les dates en formats de chaîne (si nécessaire).
            $startDateString = $startDate->toDateTimeString();      // Format complet avec date et heure
            $endDateString = $endDate->toDateTimeString();          // Format complet avec date et heure

            // Dans chaque itération, j'insère une nouvelle entrée dans la table 'reservations'.
            DB::table('reservations')->insert([
                'vehicule_id'   => rand(1 , Vehicule::count()),       // Défini comme un ID de véhicule aléatoire entre 1 et le nombre total de véhicules enregistrés.
                'user_id'       => $i,                               // Défini comme la valeur actuelle de $i
                'forfait_id'    => rand(1 , Forfait::count()),       // Défini comme un ID de forfait aléatoire entre 1 et le nombre total de forfaits enregistrés.
                'date_debut'    => $startDateString,
                'date_fin'      => $endDateString,
            ]);
        }
    }
}


