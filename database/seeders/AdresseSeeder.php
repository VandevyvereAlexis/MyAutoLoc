<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Adresse;                     // importe la classe "Adresse"

class AdresseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Adresse::factory(76)->create();    // utilise la factory d'Adresse pour réer 100 enregistrements dans la table Adresses
    }
}


