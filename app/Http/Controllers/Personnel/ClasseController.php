<?php

namespace App\Http\Controllers\Personnel;


use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Personnel;
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
        if (Session()->has('loginId')) {
            $user = Personnel::where('id', Session()->get('loginId'))->first();
        }

        $allClasses = Classe::all();

        return view('personnel.list-classe', [
            'data' => $user,
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
        if (Session()->has('loginId')) {
            $user = Personnel::where('id', Session()->get('loginId'))->first();
        }

        return view('personnel.add-classe', [
            'data' => $user,
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
        Classe::create([
            'libelle' => $request->libelle,
            'description' => $request->description,
            'niveau' => $request->niveau
        ]);

        return redirect('personnel/dashboard/classe');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        if (Session()->has('loginId'))
        {
            $user = Personnel::find(Session()->get('loginId'))->first();
        }

        $matieres = Matiere::all();


        return view('personnel.detail-classe', [
            'data' => $user,
            'classe' => $classe,
            'matieres' => $matieres
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
       dd($request);
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
}