<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// importe la classe 'Schema' du namespace 'Illuminate\Support\Facades'. Permet d'utiliser les fonctionnalités de la classe 'Schema' sans devoir spécifier le namespace complet à chaque fois.
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicules', function (Blueprint $table) 
        {
            $table->id();                                           // colonne "id" auto-incrémentatée, clé primaire

            $table->string('marque', 50);                           // colonne "marque" type chaîne de caractères limite 50 caractères 

            $table->string('modele', 50);                           // colonne "energie" type chaîne de caractères limite 50 caractères

            $table->enum('energie', [                               // colonne "energie" type énumération permet de créer un type de données personnalisé avec un ensemble restreint de choix possibles.
                'Essence',
                'Diesel',
                'Hybride',
                'Électrique',
                'Hybride rechargeable',
            ]);                          

            $table->string('image', 50);                            // colonne "image" type chaîne de caractères limite 50 caractères

            $table->string('immatriculation', 10);                  // colonne "immatriculation" type chaîne de caractères limite 10 caractères

            $table->char('annee', 4);                               // colonne "année" type chaîne de caractères longueur fixe 4 caractères

            $table->char('kilometrage', 6);                         // colonne "kilometrage" type chaîne de caractères longueur fixe 6 caractères

            $table->text('description');                            // colonne "description" type texte

            $table->integer('prix');                                // colonne "prix" type entier

            $table->integer('nombre_places');                       // colonne "nombre_places" type entier 

            $table->date('date_controle');                          // colonne "date_controle" type date

            $table->foreignId('adresse_id')->constrained();         // colonne "adresse_id" type clé étrangère liée à table "adresse"

            $table->timestamps();                                   // colonne "created_at" et "updated_at" type timestamp pour timestamps de création et mise à jour

            $table->foreignId('categorie_id')->constrained();       // colonne "categorie_id" type clé étrangère liée à table "categorie"

            $table->foreignId('user_id')->constrained();            // colonne "role_id" type clé étrangère liée à table "user"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');                          // supprime la table "vehicules" si elle existe
    }
};


