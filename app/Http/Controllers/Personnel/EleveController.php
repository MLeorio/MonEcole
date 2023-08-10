<?php

namespace App\Http\Controllers\Personnel;

use App\Http\Controllers\Controller;
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
        if (Session()->has('loginId')) {
            $user = Personnel::where('id', Session()->get('loginId'))->first();
        }

        $alleleves = Eleve::all();

        return view('personnel.list-eleve', [
            'data' => $user,
            'eleves' => $alleleves
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

        return view('personnel.add-eleve', [
            'data' => $user
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
        $eleve = new Eleve();

        $eleve->nom = $request->name;
        $eleve->prenom = $request->lastname;
        $eleve->genre = $request->gender;
        $eleve->birthday = $request->birthday;
        $eleve->adresse = $request->adresse;
        $eleve->nationalite = $request->nation;
        $eleve->dateEntree = $request->dateEntree;

        $matricule = "";
        for ($i=0; $i < 3; $i++) {
            $matricule = $matricule . $eleve['nom'][$i];
        }

        $matricule = $matricule . $eleve['prenom'][0] .  "-";

        $birth = explode('-', $eleve['dateEntree'] );

        $birthAn = $birth[0];

        $matricule = strtoupper($matricule . $birthAn . "-SC");

        $eleve->matricule = $matricule;

        $user->eleves()->save($eleve);


        return redirect('personnel/dashboard/eleve');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        if (Session()->has('loginId')) {
            $user = Personnel::where('id', Session()->get('loginId'))->first();
        }

        return view('personnel.eleve-detatil', [
           'data' => $user,
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
        //
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