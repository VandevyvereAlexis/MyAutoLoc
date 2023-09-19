<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->lastName(),                                                    // Génération aléatoire d'un nom en utilisant la méthode lastName() de l'objet faker.

            'prenom' => fake()->firstName (),                                               // Génération aléatoire d'un prénom en utilisant la méthode firstName() de l'objet faker.

            'pseudo' => fake()->userName(),                                                 // Génération aléatoire d'un pseudo en utilisant la méthode userName() de l'objet faker.

            'image' => 'par_defaut.jpg',                                                    // Chemin d'accès par défaut vers l'image du profil de l'utilisateur, tous les utilisateurs auront la même image par défaut "par_defaut.jpg".

            'age' => rand(30, 45),                                                          // Génération aléatoire d'un âge entre 18 et 60 ans.

            'numero' => '0123456789',                                                       // Numéro de téléphone fictif.

            'numero_permis' => '21873872DVHJ83Y287',                                        // Numéro de permis fictif.          

            'pays_permis' => 'France',                                                      // Pays dans lequel le permis a été délivré.

            'date_permis' => fake()->dateTimeBetween('-10 years'),                          // Génération aléatoire d'une date de délivrance de permis en utilisant la méthode date() de l'objet faker.

            'email' => fake()->unique()->safeEmail(),                                       // Génération aléatoire d'une adresse e-mail unique et valide en utilisant les méthodes unique() et safeEmail() de l'objet faker.

            'email_verified_at' => now(),                                                   // Date et heure actuelles pour la vérification de l'adresse e-mail.

            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',   // Mot de passe fictif haché pour la colonne "password".

            'remember_token' => Str::random(10),                                            // Génération d'un jeton de rappel (remember token) aléatoire de 10 caractères.
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,                                                    // colonne "email_verified_at" définie sur null pour indiquer que l'adresse e-mail n'est pas vérifiée
        ]);
    }
}

