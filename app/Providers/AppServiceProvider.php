<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // méthode pour enregistrer des services dans l'application.
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /* méthode d'initialisation des services au démarrage de l'application, elle défini la longueur
        par defaut des chaine de caractères utilisées dans les migrations de la base de données à 191.*/
        Schema::defaultStringLength(191); 
    }
}


