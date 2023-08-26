<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    protected $fillable  = [
        'code',
        'libelle',
        'niveau',
        'description',
    ];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'enseigners')
        ->withPivot('role', 'annee-scolaire')
        ->withTimestamps();
    }

    public function professeurs()
    {
        return $this->belongsToMany(Professeur::class, 'enseigners')
        ->withPivot('role', 'annee-scolaire', 'classe_id')
        ->withTimestamps();
    }
}