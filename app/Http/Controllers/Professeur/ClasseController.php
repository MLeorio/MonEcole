<?php

namespace App\Http\Controllers\Professeur;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $prof = Session()->get('user');
        $classes = $prof->classes;

        return view('professeur.classes', [
            'classes' => $classes
        ]);
    }

    public function show(Classe $classe)
    {
        return view('professeur.classe', [
            'classe' => $classe
        ]);
    }
}
