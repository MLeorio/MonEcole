<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'numero',
        'email',
        'genre',
        'nationalite',
        'birthday',
        'dateEmbauche',
        'specialite',
        'adresse',
        'username',
        'password'
    ];

    public function personnel()
    {
        return $this->belongsTo(Personnel::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function matieres()
    {
        return $this->belongsToMany(Matiere::class, 'enseigners')
        ->withPivot('annee-scolaire')
        ->withTimestamps();
    }

    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'enseigners')
        ->withPivot('role', 'annee-scolaire')
        ->withTimestamps();
    }
}
