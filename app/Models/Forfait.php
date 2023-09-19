<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'kilometres',  // Champ qui stocke le nombre de kilomètres parcourus par le véhicule.
        'prix',        // Champ qui stocke le prix associé au véhicule.
    ];

    // Relation de cardinalité 0.n (zéro à plusieurs)
    public function reservations() 
    {
        return $this->hasMany(Reservation::class);
    }
}


