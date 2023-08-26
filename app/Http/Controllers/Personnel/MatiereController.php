<?php

namespace App\Http\Controllers\Personnel;

use App\Http\Controllers\Controller;
use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allMatieres = Matiere::all();

        return view('personnel.list-mat', [
            'matieres' => $allMatieres
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnel.add-matiere');
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
            'code' => 'bail|string|required|max:20',
            'libelle' => 'bail|string|required|max:150',
            'description' => 'bail|string|required|max:255'
        ]);

        Matiere::create([
            'code' => $request['code'],
            'libelle' => $request['libelle'],
            'description' => $request['description']
        ]);

        return redirect()->route('matiere.list')->with('success', 'Matiere ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function show(Matiere $matiere, Request $request)
    {
        return view('personnel.mat-detail', [
            'matiere' => $matiere
        ]) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Matiere $matiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matiere $matiere)
    {
        $request->validate([
            'code' => 'bail|required|string|max:20',
            'libelle' => 'bail|required|string|max:150',
            'description' => 'bail|string|max:255'
        ]);

        $matiere->update([
            "code" => $request->code,
            "libelle" => $request->libelle,
            "description" => $request->description,
        ]);

        return redirect()->route('matiere.voir', $matiere)->with('success', "Modification éffectuée avec succès");
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matiere $matiere)
    {
        //
    }
}