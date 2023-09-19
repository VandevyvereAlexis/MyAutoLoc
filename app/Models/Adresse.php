<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',      // Champ qui stocke l'identifiant de l'utilisateur associé à cette entrée.
        'adresse',      // Champ qui stocke l'adresse (rue, numéro, etc.) associée à cette entrée.
        'code_postal',  // Champ qui stocke le code postal associé à cette entrée.
        'ville',        // Champ qui stocke le nom de la ville associée à cette entrée.
    ];

    // Relation de cardinalité 0.n (zéro à plusieurs)
    public function vehicules() 
    {
        return $this->hasMany(Vehicule::class);
    }

    // Relation de cardinalité 1.1 (un à un)
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}


