<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',          // Champ qui stocke l'identifiant du rôle de l'utilisateur.
        'nom',              // Champ qui stocke le nom de l'utilisateur.
        'prenom',           // Champ qui stocke le prénom de l'utilisateur.
        'email',            // Champ qui stocke l'adresse e-mail de l'utilisateur.
        'password',         // Champ qui stocke le mot de passe de l'utilisateur (haché).
        'pseudo',           // Champ qui stocke le pseudo de l'utilisateur.
        'age',              // Champ qui stocke l'âge de l'utilisateur.
        'image',            // Champ qui stocke le nom de l'image de profil de l'utilisateur.
        'numero',           // Champ qui stocke le numéro de téléphone de l'utilisateur.
        'numero_permis',    // Champ qui stocke le numéro de permis de conduire de l'utilisateur.
        'pays_permis',      // Champ qui stocke le pays où le permis de conduire a été délivré.
        'date_permis',      // Champ qui stocke la date de délivrance du permis de conduire de l'utilisateur.
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relation de cardinalité 0.n (zéro à plusieurs)
    public function vehicules() 
    {
        return $this->hasMany(Vehicule::class);
    }

    // Relation de cardinalité 0.n (zéro à plusieurs)
    public function adresses() 
    {
        return $this->hasMany(Adresse::class);
    }

    // Relation de cardinalité 0.n (zéro à plusieurs)
    public function reservations() 
    {
        return $this->belongsToMany(Vehicule::class, 'reservations')->withPivot(['forfait_id', 'date_debut_demi_journee', 'date_debut', 'date_fin_demi_journee', 'date_fin', 'prix']);
    }

    // Relation de cardinalité 1.1 (un à un)
    public function role() 
    {
        return $this->belongsTo(Role::class);
    }

    // Relation de cardinalité 0.n (zéro à plusieurs)
    public function avis() 
    {
        return $this->hasMany(Avis::class);
    }

    // Méthode de vérification du rôle d'administrateur (1.1)
    public function isAdmin() 
    {
        return $this->role_id = 2;
    }
}


