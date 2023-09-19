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
        Schema::create('avis', function (Blueprint $table) 
        {
            $table->id();                                           // colonne "id" auto-incrémentatée, clé primaire

            $table->string('commentaire', 255);                     // colonne "commentaire" type chaîne de caractères limite 255 caractères

            $table->integer('note');                                // colonne "note" type entier

            $table->timestamps();                                   // colonne "created_at" et "updated_at" type timestamp pour timestamps de création et mise à jour

            $table->foreignId('vehicule_id')->constrained();        // colonne "vehicule_id" type clé étrangère liée à table "vehicule"

            $table->foreignId('user_id')->constrained();            // colonne "user_id" type clé étrangère liée à table "user"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis');                                // supprime la table "avis" si elle existe
    }
};


