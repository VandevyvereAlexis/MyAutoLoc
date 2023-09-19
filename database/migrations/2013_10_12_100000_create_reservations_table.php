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
            $table->dateTime('date_debut');                         // colonne "date_debut" type date

            $table->dateTime('date_fin');                           // colonne "date_fin" type date

            $table->timestamps();                                   // colonne "created_at" et "updated_at" type timestamp pour timestamps de création et mise à jour

            $table->foreignId('vehicule_id')->constrained();        // colonne "vehicule_id" type clé étrangère liée à table "vehicules"

            $table->foreignId('user_id')->constrained();            // colonne "user_id" type clé étrangère liée à table "users"

            $table->foreignId('forfait_id')->constrained();         // colonne "forfait_id" type clé étrangère liée à table "forfaits"
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

