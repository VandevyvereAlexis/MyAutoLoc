<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',      // Champ qui stocke l'identifiant de l'utilisateur associé à cette entrée.
        'vehicule_id',  // Champ qui stocke l'identifiant du véhicule associé à cette entrée.
        'commentaire',  // Champ qui stocke un commentaire ou une description de l'entrée.
        'note',         // Champ qui stocke une note attribuée à l'entrée.
    ];

    // Relation de cardinalité 1.1 (un à un)
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    // Relation de cardinalité 1.1 (un à un)
    public function vehicule() 
    {
        return $this->belongsTo(Vehicule::class);
    }
}


