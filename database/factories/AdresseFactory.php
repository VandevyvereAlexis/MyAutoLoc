<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;                                    // importe la classe "User"

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adresse>
 */
class AdresseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'adresse'       => $this->faker->secondaryAddress(),                        // Génération aléatoire d'une adresse secondaire en utilisant la méthode secondaryAddress() de l'objet faker.

            'code_postal'   => substr($this->faker->departmentNumber() . '000', 0, 5),  // Génération aléatoire d'un code postal en utilisant la méthode departmentNumber() de l'objet faker, suivi de zéros ajoutés pour avoir une longueur de 5 caractères.
            
            'ville'         => $this->faker->city(),                                    // Génération aléatoire d'une ville en utilisant la méthode city() de l'objet faker.

            'user_id'       => rand(1, User::count()),                                  // Attribution aléatoire d'un ID utilisateur en utilisant la fonction rand() et la méthode count() du modèle User. Cela relie cet enregistrement à un utilisateur existant dans la base de données.
        ];
    }
}

