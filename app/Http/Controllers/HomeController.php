<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function boardPers()
    {
        return view('personnel.home');
    }

    public function boardProf()
    {
        return view('professeur.home');
    }

    public function boardEle()
    {
        $user = Session()->get('user');
        $classe = $user->classes()->where('annee-scolaire', '2023')->get()->first();
        $effMasculin = $classe->eleves()->where('genre', 'Masculin')->count();
        $effFeminin = $classe->eleves()->where('genre', 'Feminin')->count();
        $effTotal = $classe->eleves->count();

        return view('eleve.home', [
            'garcon' => $effMasculin,
            'fille' => $effFeminin,
            'total' => $effTotal
        ]);
    }
}
