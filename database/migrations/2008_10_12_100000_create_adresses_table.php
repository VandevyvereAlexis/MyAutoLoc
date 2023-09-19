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
        Schema::create('adresses', function (Blueprint $table) 
        {
            $table->id();                                           // colonne "id" auto-incrémentatée, clé primaire

            $table->string('adresse', 100);                         // colonne "adresse" type chaîne de caractères limite 100 caractères 

            $table->string('ville', 50);                            // colonne "ville" type chaîne de caractères limite 50 caractères 

            $table->char('code_postal', 5);                         // colonne "code_postal" type chaîne de caractères longueur fixe 5 caractères 

            $table->timestamps();                                   // colonne "created_at" et "updated_at" type timestamp pour timestamps de création et mise à jour

            $table->foreignId('user_id')->constrained();            // colonne "role_id" type clé étrangère liée à table "user"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adresses');       // supprime la table "adresses" si elle existe
    }
};

