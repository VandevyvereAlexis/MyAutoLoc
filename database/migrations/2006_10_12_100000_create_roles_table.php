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
        Schema::create('roles', function (Blueprint $table) 
        {
            $table->id();                   // colonne "id" auto-incrémentatée, clé primaire

            $table->string('role', 20);     // colonne "role" type chaîne de caractères limite 20 caractères 

            $table->timestamps();           // colonne "created_at" et "updated_at" type timestamp pour timestamps de création et mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');      // supprime la table "roles" si elle existe
    }
};

