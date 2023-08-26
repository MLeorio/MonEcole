<?php

namespace App\Http\Controllers\Professeur;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Note;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $prof = Session()->get('user');
        $classes = $prof->classes()->where('annee-scolaire', date('Y'))->get();

        return view('professeur.classes', [
            'classes' => $classes
        ]);
    }

    public function show(Classe $classe)
    {
        $prof = Session()->get('user');
        $matieres = $prof->matieres()
            ->where('annee-scolaire', date('Y'))
            ->where('classe_id', $classe['id'])
            ->get();

        return view('professeur.classe', [
            'classe' => $classe,
            'matieres' => $matieres
        ]);
    }

    public function note(Classe $classe, Matiere $matiere)
    {
       return view('professeur.matieres',[
        'classe' => $classe,
        'matiere' => $matiere
       ]);
    }

    public function addNote(Request $request)
    {
        $request->validate([
            'matiere' => 'required',
            'eleve' => 'required',
            'type' => 'required',
            'periode' => 'required',
            'note' => 'required|numeric'
        ]);

        $prof = Session()->get('user');

        $note = new Note();
        $note->note = $request['note'];
        $note->typeNote = $request['type'];
        $note->periode = $request['periode'];
        $note['annee-scolaire'] = date('Y');
        $note->matiere_id = $request['matiere'];
        $note->eleve_id = $request['eleve'];

        $prof->notes()->save($note);

        return redirect()->back()->with('success', 'Ajout de note réussi');
    }

}
