<?php

namespace App\Models;

use App\Models\Professeur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'niveau',
        'description'
    ];


    public function eleves()
    {
        return $this->belongsToMany(Eleve::class, 'classe_eleves')
        ->withPivot('annee-scolaire')
        ->withTimestamps();
    }

    public function matieres()
    {
        return $this->belongsToMany(Matiere::class, 'enseigners')
        ->withPivot('role', 'annee-scolaire')
        ->withTimestamps();
    }

    public function professeurs()
    {
        return $this->belongsToMany(Professeur::class, 'enseigners')
        ->withPivot('role', 'annee-scolaire')
        ->withTimestamps();
    }
}