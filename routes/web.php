<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\CategorieController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Configuration des routes d'authentification.
Auth::routes();


// Route pour la page d'accueil (accès au site pour les non inscrits) depuis HomeController@index.
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route pour la page d'accueil depuis HomeController@index.
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route pour afficher la page de politique depuis HomeController@politique.
Route::get('/politique', [App\Http\Controllers\HomeController::class, 'politique'])->name('politique');


// Route de ressources pour gérer les utilisateurs, à l'exception des actions index, create et store.
Route::resource('/user', App\Http\Controllers\UserController::class)->except('index', 'create', 'store');


// Route de ressources pour gérer les adresses, à l'exception des actions index, create et edit.
Route::resource('/adresse', App\Http\Controllers\AdresseController::class)->except('index', 'create', 'edit', 'show');


// Route pour mettre à jour le mot de passe d'un utilisateur avec UserController@updatePassword.
Route::put('/user/updatepassword/{user}', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('updatepassword');


// Route de ressources pour la gestion des véhicules avec le contrôleur VehiculeController.
Route::resource('/vehicules', VehiculeController::class);


// Route pour afficher les détails d'un véhicule en fonction de son ID.
Route::get('/vehicules/{vehicule}', [VehiculeController::class, 'show'])->name('vehicules.show');


// Route pour afficher une catégorie spécifique en utilisant son identifiant
Route::get('/categorie/{categorie}', [CategorieController::class, 'show'])->name('categories.show');


// Route pour gérer les opérations CRUD (Create, Read, Update, Delete) pour les réservations
Route::resource('/reservations', App\Http\Controllers\ReservationController::class);


// Route pour accéder à la page d'administration
Route::get('/admin', [AdminController::class, 'index'])->name('admin');//->middleware('admin');







