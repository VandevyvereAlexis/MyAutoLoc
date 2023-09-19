<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ORDRE DES MIGRATIONS
        $this->call([
            RoleSeeder::class,          // Appelle Seeder "RoleSeeder" pour remplir la table des "Roles"

            UserSeeder::class,          // Appelle Seeder "UserSeeder" pour remplir la table des "Users"

            AdresseSeeder::class,       // Appelle Seeder "AdresseSeeder" pour remplir la table des "Adresses"

            CategorieSeeder::class,     // Appelle Seeder "CategorieSeeder" pour remplir la table des "Categories"

            VehiculeSeeder::class,      // Appelle Seeder "VehiculeSeeder" pour remplir la table des "Vehicules"

            AvisSeeder::class,          // Appelle Seeder "AvisSeeder" pour remplir la table des "Avis"

            ForfaitSeeder::class,       // Appelle Seeder "ForfaitSeeder" pour remplir la table des "Forfaits"

            ReservationSeeder::class,   // Appelle Seeder "ReservationSeeder" pour remplir la table des "Reservations"
        ]);
    }
}


