<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Avis;                        // importe la classe "Avis"

class AvisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Avis::factory(100)->create();       // crée 100 instances de la classe Avis et les insère dans la base de données
    }
}



