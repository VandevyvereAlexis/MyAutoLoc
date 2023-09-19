<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use App\Models\Categorie;           // importe la classe "Categorie"


class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create([
            'nom' => 'Compactes'    // création catégorie "Compactes"
        ]);

        Categorie::create([
            'nom' => 'Berlines'     // création catégorie "Berlines"
        ]);

        Categorie::create([
            'nom' => 'Coupés'       // création catégorie "Coupés"
        ]);

        Categorie::create([
            'nom' => 'Cabriolets'   // création catégorie "Cabriolets"
        ]);

        Categorie::create([
            'nom' => 'Breaks'       // création catégorie "Breaks"
        ]);

        Categorie::create([
            'nom' => 'Monospaces'   // création catégorie "Monospaces"
        ]);

        Categorie::create([
            'nom' => 'SUV'          // création catégorie "SUV"
        ]);
    }
}



