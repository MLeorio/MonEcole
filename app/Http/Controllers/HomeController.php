<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Personnel;
use App\Models\Professeur;
use Illuminate\Http\Request;

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
        return view('eleve.home');
    }
}
