<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;                                // importe la calsse "User"
use App\Models\Vehicule;                            // importe la classe "Vehicule"

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Avis>
 */
class AvisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'commentaire'   => $this->faker->sentence(),            // Génération aléatoire d'un paragraphe de commentaire en utilisant la méthode paragraph() de l'objet faker.

            'note'          => $this->faker->numberBetween(1,5),    // Génération aléatoire d'une note en utilisant la méthode numberBetween() de l'objet faker. La note sera un nombre entre 1 et 5.

            'user_id'       => rand(1, User::count()),              // Attribution aléatoire d'un ID utilisateur en utilisant la fonction rand() et la méthode count() du modèle User. Cela relie cet enregistrement à un utilisateur existant dans la base de données.

            'vehicule_id'   => rand(1, Vehicule::count()),          // Attribution aléatoire d'un ID de véhicule en utilisant la fonction rand() et la méthode count() du modèle Vehicule. Cela relie cet enregistrement à un véhicule existant dans la base de données.
        ];
    }
}



