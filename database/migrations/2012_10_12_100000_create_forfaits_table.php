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
        Schema::create('forfaits', function (Blueprint $table) 
        {
            $table->id();                           // colonne "id" auto-incrémentatée, clé primaire

            $table->integer('kilometres');          // colonne "kilometres" type entier

            $table->integer('prix');                // colonne "prix" type entier

            $table->timestamps();                   // colonne "created_at" et "updated_at" type timestamp pour timestamps de création et mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forfaits');           // supprime la table "forfaits" si elle existe
    }
};


