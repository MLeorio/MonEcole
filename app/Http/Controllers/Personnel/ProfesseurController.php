<?php

namespace App\Http\Controllers\Personnel;

use App\Http\Controllers\Controller;
use App\Models\Matiere;
use App\Models\Personnel;
use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session()->has('loginId')) {
            $user = Personnel::where('id', Session()->get('loginId'))->first();
        }

        $allProfs = Professeur::all();

        return view('personnel.list-profs', [
            'data' => $user,
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
        if (Session()->has('loginId')) {
            $user = Personnel::where('id', Session()->get('loginId'))->first();
        }

        $matieres = Matiere::all();

        return view('personnel.add-prof', [
            'data' => $user,
            'matieres' => $matieres
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

        $user = Personnel::where('id', Session()->get('loginId'))->first();

        #Persistance des donnes dans la base de donnes
        $prof = new Professeur();

        $prof->nom = $request->name;
        $prof->prenom = $request->lastname;
        $prof->email = $request->email;
        $prof->genre = $request->gender;
        $prof->birthday = $request->birthday;
        $prof->numero = $request->tel;
        $prof->adresse = $request->adresse;
        $prof->nationalite = $request->nation;
        $prof->specialite = $request->spec;
        $prof->dateEmbauche = $request->dateEmbauche;
        $prof->username = $request->email;


        $user->professeurs()->save($prof);

        return redirect('personnel/dashboard/professeur');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function show(Professeur $professeur)
    {
        //
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
    public function update(Request $request, Professeur $professeur)
    {
        //
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
