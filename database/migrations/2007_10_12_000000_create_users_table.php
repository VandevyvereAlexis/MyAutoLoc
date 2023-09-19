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
        Schema::create('users', function (Blueprint $table) 
        {
            $table->id();                                               // colonne "id" auto-incrémentatée, clé primaire

            $table->string('nom', 60);                                  // colonne "nom" type chaîne de caractères limite 60 caractères 

            $table->string('prenom', 60);                               // colonne "prenom" type chaîne de caractères limite 60 caractères

            $table->string('pseudo', 60);                               // colonne "pseudo" type chaîne de caractères limite 60 caractères valeur unique

            $table->string('image', 50)->nullable();                    // colonne "image" type chaîne de caractères limite 50 caractères pouvant être nulle

            $table->string('numero', 15);                               // colonne "numero" type chaîne de caractères limite 15 caractères

            $table->string('numero_permis', 50);                        // colonne "numero_permis" type chaîne de caractères limite 50 caractères

            $table->string('pays_permis', 30);                          // colonne "pays_permis" type chaîne de caractères limite 30 caractères

            $table->string('email', 100)->unique();                     // colonne "email" type chaîne de caractères limite 100 caractères valeur unique

            $table->string('password', 255);                            // colonne "password" type chaîne de caractères limite 255 caractères

            $table->char('age', 2);                                     // colonne "age" type chaîne de caractères longueur fixe 2 caractères

            $table->date('date_permis', 255);                           // colonne "date_permis" type date limite 225 caractères

            $table->rememberToken();                                    // colonne "rememberToken" pour fonctionnalité de "remember me" de l'authentification

            $table->timestamp('email_verified_at')->nullable();         // colonne "email_verified_at" type timestamp pouvant être nulle

            $table->timestamps();                                       // colonne "created_at" et "updated_at" type timestamp pour timestamps de création et mise à jour

            $table->foreignId('role_id')->default(1)->constrained();    // colonne "role_id" type clé étrangère liée à table "roles" avec valeur par défaut 1
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');                                  // supprime la table "users" si elle existe
    }
};


