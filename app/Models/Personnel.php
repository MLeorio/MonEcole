<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'numero',
        'email',
        'nationalite',
        'birthday',
        'dateEmbauche',
        'adresse',
        'username',
        'password',
        'password'
    ];

    public function professeurs()
    {
        return $this->hasMany(Professeur::class);
    }

    public function eleves()
    {
        return $this->hasMany(Eleve::class);
    }

    
}
