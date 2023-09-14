<?php

namespace App\Http\Controllers\Personnel;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Personnel;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allStudents = Eleve::all()->sortBy('nom');

        return view('personnel.list-eleve', [
            'eleves' => $allStudents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classe::all()->sortBy('libelle');

        return view('personnel.add-eleve',[
            'classes' => $classes
        ]);
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
            'name' => 'bail|string|required|max:150',
            'lastname' => 'bail|string|required|max:255',
            'gender' => 'bail|string|required|max:10',
            'birthday' => 'bail|date|required',
            'adresse' => 'bail|string|required|max:100',
            'nation' => 'bail|string|required|max:50',
            'dateEntree' => 'bail|date|required',
            'classe' => 'bail|integer|required'
        ]);
        
        $user = Session()->get('user');

        #Persistance des donnes dans la base de donnes
        $eleve = new Eleve();

        $eleve->nom = $request->name;
        $eleve->prenom = $request->lastname;
        $eleve->genre = $request->gender;
        $eleve->birthday = $request->birthday;
        $eleve->adresse = $request->adresse;
        $eleve->nationalite = $request->nation;
        $eleve->dateEntree = $request->dateEntree;

        #Generation du numero matricule a revoir !!!!

        $matricule = "";
        for ($i=0; $i < 3; $i++) {
            $matricule = $matricule . $eleve['nom'][$i];
        }

        $matricule = $matricule . $eleve['prenom'][0] .  "-";

        $birth = explode('-', $eleve['dateEntree'] );

        $birthAn = $birth[0];

        $matricule = strtoupper($matricule . $birthAn . "-SC");

        $eleve->matricule = $matricule;
        
        if (isset($request['classe'])) {
            $eleve->etat = 1;
        }

        $user->eleves()->save($eleve);

        $classe = Classe::find($request['classe']);

        $eleve->classes()->attach($classe, ['annee-scolaire' => date('Y')]);

        return redirect()->back()->with('success', 'Eleve ajouté avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        return view('personnel.eleve-detatil', [
           'eleve' => $eleve
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleve $eleve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eleve $eleve)
    {
        $request->validate([
            'nom' => 'bail|string|required|max:150',
            'prenom' => 'bail|string|required|max:255',
            'genre' => 'bail|string|required|max:10',
            'nationalite' => 'bail|string|required|max:50',
            'adresse' => 'bail|string|required|max:100',
            'birthday' => 'bail|date|required'
        ]);

        $eleve->update([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'genre' => $request['genre'],
            'nationalite' => $request['nationalite'],
            'adresse' => $request['adresse'],
            'birthday' => $request['birthday']
        ]);
        
        return redirect()->route('eleve.voir', ['eleve' => $eleve])->with('success', 'Modification éffectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleve $eleve)
    {
        //
    }
}