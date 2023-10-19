<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) 
        {
            $table->date('date_debut');                                                 // Colonne "date_debut" de type date

            $table->enum('date_debut_demi_journee', ['avant-midi', 'après-midi']);      // Colonne "date_debut_demi_journee" de type enum avec deux options possibles

            $table->date('date_fin');                                                   // Colonne "date_fin" de type date

            $table->enum('date_fin_demi_journee', ['avant-midi', 'après-midi']);        // Colonne "date_fin_demi_journee" de type enum avec deux options possibles

            $table->float('prix');                                                      // Colonne "prix" de type float pour stocker des valeurs décimales

            $table->timestamps();                                                       // Colonnes "created_at" et "updated_at" de type timestamp pour gérer les horodatages de création et de mise à jour

            $table->foreignId('vehicule_id')->constrained()->onDelete('cascade');                            // Colonne "vehicule_id" de type clé étrangère liée à la table "vehicules"

            $table->foreignId('user_id')->constrained();                                // Colonne "user_id" de type clé étrangère liée à la table "users"

            $table->foreignId('forfait_id')->constrained();                             // Colonne "forfait_id" de type clé étrangère liée à la table "forfaits"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');                       // supprime la table "reservations" si elle existe
    }
};

