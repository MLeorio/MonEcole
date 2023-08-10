<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'matricule',
        'nationalite',
        'birthday',
        'dateEntree',
        'adresse',
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

    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'eleve_classe')
        ->using(EleveClasse::class)
        ->withTimestamps();
    }
}
