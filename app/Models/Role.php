<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'role',          // Champ qui stocke l'identifiant du rôle associé à cet utilisateur.
    ];

    // Relation de cardinalité 1.n (un à plusieurs)
    public function users() 
    {
        return $this->hasMany(User::class);
    }
}

