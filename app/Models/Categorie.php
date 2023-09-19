<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',          // Champ qui stocke le nom (ou libellé) associé à cette entrée.
    ];

    // Relation de cardinalité 0.n (zéro à plusieurs)
    public function vehicules() 
    {
        return $this->hasMany(Vehicule::class);
    }
}



