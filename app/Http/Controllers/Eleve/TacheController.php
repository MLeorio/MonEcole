<?php

namespace App\Http\Controllers\Eleve;

use App\Models\Matiere;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Note;

class TacheController extends Controller
{
    public function mesmatieres()
    {
        $user = Session()->get('user');
        $classe = $user->classes()->where('annee-scolaire', date('Y'))->get()->first();
        $matieres = $classe->matieres()->where('annee-scolaire', date('Y'))->get()->sort();

        return view('eleve.listMatieres', [
            'matieres' => $matieres
        ]);
    }

    public function lamatiere(Matiere $matiere)
    {
        $notes = Note::where('matiere_id', $matiere['id'])->where('annee-scolaire', date('Y'))->where('eleve_id', Session()->get('user')['id'])->get();

        return view('eleve.matiere', [
            'matiere' => $matiere,
            'notes' => $notes
        ]);
    }

    public function maclasse()
    {
        $classe = Session()->get('classe');
        $eleves = $classe->eleves()->where('annee-scolaire', date('Y'))->get();

        return view('eleve.camarade', [
            'camarades' => $eleves
        ]);
    }
}
