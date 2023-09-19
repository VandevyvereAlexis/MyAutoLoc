<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;                    // importe la classe "User"
use Illuminate\Support\Facades\Hash;    // importe la "façade Hash" pour gérer le "hachage des mots de passe"
use Illuminate\Support\Str;             // importe la "classe Str" pour "générer des chaines aléatoires"


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ADMIN
        User::create([
            'nom'               => 'Admin',                     // Nom de l'administrateur.
            'prenom'            => 'Admin',                     // Prénom de l'administrateur.
            'pseudo'            => 'Admin',                     // Pseudo de l'administrateur.
            'age'               => '30',                        // Âge de l'administrateur.
            'image'             => 'user.png',                  // Image de profil par défaut.
            'numero'            => '0736484629',                // Numéro de téléphone de l'administrateur.
            'numero_permis'     => '37824879BJ89297',           // Numéro de permis de l'administrateur.
            'pays_permis'       => 'France',                    // Pays de délivrance du permis de l'administrateur.
            'date_permis'       => '2017-08-17',                // Date de délivrance du permis de l'administrateur.
            'password'          => Hash::make('Admin2023!'),    // Mot de passe haché sécurisé "Admin2023!".
            'email'             => 'admin@admin.fr',            // valeur "admin@admin.fr" pour colonne "email"
            'email_verified_at' => now(),                       // Date et heure actuelles pour la vérification de l'adresse e-mail.
            'remember_token'    => Str::random(10),             // Jeton de rappel aléatoire.
            'role_id'           => 2,                           // ID du rôle d'administrateur.
        ]);

        // USER
        User::create([
            'nom'               => 'User',                      // Nom de l'utilisateur.
            'prenom'            => 'User',                      // Prénom de l'utilisateur.
            'pseudo'            => 'User',                      // Pseudo de l'utilisateur.
            'age'               => '30',                        // Âge de l'utilisateur.
            'image'             => 'user.png',                  // Image de profil par défaut.
            'numero'            => '0775940802',                // Numéro de téléphone de l'utilisateur.
            'numero_permis'     => '37849899BDJS297',           // Numéro de permis de l'utilisateur.
            'pays_permis'       => 'France',                    // Pays de délivrance du permis de l'utilisateur.
            'date_permis'       => '2014-05-14',                // Date de délivrance du permis de l'utilisateur.
            'password'          => Hash::make('User2023!'),     // Mot de passe haché sécurisé "User2023!".
            'email'             => 'user@user.fr',              // Adresse e-mail de l'utilisateur.
            'email_verified_at' => now(),                       // Date et heure actuelles pour la vérification de l'adresse e-mail.
            'remember_token'    => Str::random(10),             // Jeton de rappel aléatoire.
            'role_id'           => 1,                           // ID du rôle d'utilisateur standard.
        ]);

        User::factory(76)->create();                            // crée 76 instances de la classe méthode factory() et les insère dans la base de données
    }
}







