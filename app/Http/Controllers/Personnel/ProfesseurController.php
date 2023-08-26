<?php

namespace App\Http\Controllers\Personnel;

use App\Http\Controllers\Controller;
use App\Models\Matiere;
use App\Models\Personnel;
use App\Models\Professeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProfs = Professeur::all();

        return view('personnel.list-profs', [
            'profs' => $allProfs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnel.add-prof');
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
            'name' => 'bail|string|required|max:100',
            'lastname' => 'bail|string|required|max:200',
            'email' => 'bail|email|required',
            'gender' => 'bail|string|required|max:10',
            'birthday' => 'bail|date|required',
            'tel' => 'bail|string|required',
            'adresse' => 'bail|string|required|max:255',
            'nation' => 'bail|string|required|max:100',
            'specialite' => 'bail|string|required|max:255',
            'dateEmbauche' => 'bail|date|required'
        ]);

        $user = Session()->get('user');

        #Persistance des infos dans la base de donnees
        $prof = new Professeur();

        $prof->nom = $request->name;
        $prof->prenom = $request->lastname;
        $prof->email = $request->email;
        $prof->genre = $request->gender;
        $prof->birthday = $request->birthday;
        $prof->numero = $request->tel;
        $prof->adresse = $request->adresse;
        $prof->nationalite = $request->nation;
        $prof->specialite = $request->specialite;
        $prof->dateEmbauche = $request->dateEmbauche;
        $prof->username = $request->email;

        $user->professeurs()->save($prof);

        $request['name'] = "";
        $request['lastname'] = "";
        $request['email'] = "";
        $request['gender'] = "";
        $request['birthday'] = "";
        $request['tel'] = "";
        $request['adresse'] = "";
        $request['nation'] = "";
        $request['specialite'] = "";
        $request['dateEmbauche'] = "";
        

        return redirect()->back()->with('success', "Enrégistrement effectué avec succès");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function show(Professeur $prof)
    {
        return view('personnel.prof-detail', [
            'prof' => $prof
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function edit(Professeur $professeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professeur $prof)
    {
        $request->validate([
            'nom' => 'bail|string|required|max:150',
            'prenom' => 'bail|string|required|max:250',
            'email' => 'bail|email|required',
            'numero' => 'bail|required|max:15',
            'adresse' => 'bail|string|required',
            'nationalite' => 'bail|string|required',
            'specialite' => 'bail|string|required',
            'gender' => 'bail|string|required',
            'birthday' => 'bail|date|required',
            'dateEmbauche' => 'bail|date|required',
            'username' => 'bail|string|required'
        ]);
        
        $prof->update([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'email' => $request['email'],
            'genre' => $request['gender'],
            'birthday' => $request['birthday'],
            'numero' => $request['numero'],
            'adresse' => $request['adresse'],
            'nationalite' => $request['nationalite'],
            'specialite' => $request['specialite'],
            'dateEmbauche' => $request['dateEmbauche'],
            'username' => $request['username']
        ]);
        
        return redirect()->back()->with('success', 'Informations mises à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professeur $professeur)
    {
        //
    }
}
