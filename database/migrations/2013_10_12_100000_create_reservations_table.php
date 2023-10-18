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
            $table->date('date_debut');                                                 // colonne "date_debut" type date

            $table->enum('date_debut_demi_journee', ['avant-midi', 'après-midi']);      // colonne "date_debut_demi_journee" de type enum

            $table->date('date_fin');                                                   // colonne "date_fin" type date

            $table->enum('date_fin_demi_journee', ['avant-midi', 'après-midi']);        // colonne "date_fin_demi_journee" de type enum

            $table->float('prix');        // colonne "date_fin_demi_journee" de type enum

            $table->timestamps();                                                       // colonne "created_at" et "updated_at" type timestamp pour timestamps de création et mise à jour

            $table->foreignId('vehicule_id')->constrained();                            // colonne "vehicule_id" type clé étrangère liée à table "vehicules"

            $table->foreignId('user_id')->constrained();                                // colonne "user_id" type clé étrangère liée à table "users"

            $table->foreignId('forfait_id')->constrained();                             // colonne "forfait_id" type clé étrangère liée à table "forfaits"
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

