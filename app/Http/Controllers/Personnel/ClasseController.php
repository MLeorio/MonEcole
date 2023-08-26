<?php

namespace App\Http\Controllers\Personnel;


use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Matiere;
use App\Models\Personnel;
use App\Models\Professeur;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allClasses = Classe::all()->sortBy('libelle');

        return view('personnel.list-classe', [
            'classes' => $allClasses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnel.add-classe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'bail|required|string|max:150',
            'description' => 'bail|string|max:250',
            'niveau' => 'bail|string|required|max:15'
        ]);

        Classe::create([
            'libelle' => $request->libelle,
            'description' => $request->description,
            'niveau' => $request->niveau
        ]);

        return redirect()->route('classe.list')->with('success', "Classe ajoutée avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe, Request $request)
    {
        return view('personnel.classe-detail', [
            'classe' => $classe
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        $eleves = Eleve::all()->sort();
        $profs = Professeur::all()->sort();
        $matieres = Matiere::all();

        return view('personnel.setting-classe', [
            'classe' => $classe,
            'eleves' => $eleves,
            'profs' => $profs,
            'matieres' => $matieres
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {
        $request->validate([
            'libelle' => 'bail|required|string|max:150',
            'description' => 'bail|string|max:250',
            'niveau' => 'bail|string|required|max:15'
        ]);
       
        $classe->update([
            'libelle' => $request['libelle'],
            'description' => $request['description'],
            'niveau' => $request['niveau'],
        ]);
        return redirect()->back()->with('success', 'Modification éffectuée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        //
    }

    public function admission(Request $request)
    {
        $request->validate([
            'classe' => 'required|bail',
            'eleve' => 'bail|required'
        ]);

        $classe = Classe::findorFail($request['classe']);
        $eleve = Eleve::findorFail($request['eleve']);

        $classe->eleves()->attach($eleve, ['annee-scolaire' => date('Y')]);
        
        return redirect()->back()->with('success', 'Admission éffectuée avec succès !');
    }

    public function cours(Request $request)
    {
        $request->validate([
            'classe' => 'required',
            'matiere' => 'required',
            'prof' => 'required',
        ]);

        $classe = Classe::findorFail($request['classe']);
        $matiere = Matiere::findorFail($request['matiere']);
        $prof = Professeur::findorFail($request['prof']);

        dd($classe, $matiere, $prof);

    }
}
