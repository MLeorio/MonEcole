<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'note',
        'typeNote'
    ];

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }
}
