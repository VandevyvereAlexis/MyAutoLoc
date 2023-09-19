<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'adresse_id',       // Champ qui stocke l'identifiant de l'utilisateur associé à cette adresse.
        'catégorie_id',     // Champ qui stocke l'identifiant de la catégorie à laquelle appartient cet élément.
        'user_id',          // Champ qui stocke l'identifiant de l'utilisateur associé à cet élément.
        'marque',           // Champ qui stocke le nom de la marque du véhicule.
        'modele',           // Champ qui stocke le modèle du véhicule.
        'annee',            // Champ qui stocke l'année de fabrication du véhicule.
        'energie',          // Champ qui stocke le type d'énergie (essence, diesel, etc.) du véhicule.
        'kilometrage',      // Champ qui stocke le nombre de kilomètres parcourus par le véhicule.
        'nombre_places',    // Champ qui stocke le nombre de places disponibles dans le véhicule.
        'description',      // Champ qui stocke la description du véhicule.
        'image',            // Champ qui stocke le nom de l'image associée au véhicule.
        'prix',             // Champ qui stocke le prix de location ou de vente du véhicule.
        'date_controle',    // Champ qui stocke la date du dernier contrôle technique du véhicule.
        'immatriculation',  // Champ qui stocke le numéro d'immatriculation du véhicule.
    ];

    // Relation de cardinalité 0.n (zéro à plusieurs)
    public function avis() 
    {
        return $this->hasMany(Avis::class);
    }

    // Relation de cardinalité 0.n (zéro à plusieurs)
    public function reservations() 
    {
        return $this->belongsToMany(User::class, 'reservations')->withPivot(['forfait_id', 'date_debut', 'date_fin']);
    }

    // Relation de cardinalité 1.1 (un à un)
    public function adresse() 
    {
        return $this->belongsTo(Adresse::class);
    }

    // Relation de cardinalité 1.1 (un à un)
    public function categorie() 
    {
        return $this->belongsTo(Categorie::class);
    }

    // Relation de cardinalité 1.1 (un à un)
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}


