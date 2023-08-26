<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Eleve;
use App\Models\elevee;
use App\Models\Professeur;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function persLogin()
    {
        return view('Auth.logPers');
    }

    public function profLogin()
    {
        return view('Auth.logProf');
    }

    public function eleveLogin()
    {
        return view('Auth.logEle');
    }



    public function loginPers(Request $request)
    {

        $request->validate([
            'uname' => 'required|string',
            'pass' => 'required|min:6|max:12'
        ]);

        $pers = Personnel::where('username', $request['uname'])->first();

        if ($pers) {
            if (Hash::check($request['pass'], $pers['password'])) {
                $request->session()->put('user', $pers);
                return redirect()->route('homePers');
            } else {
                return back()->with('fail', 'Mot de passe est incorrect.');
            }
        } else {
            return back()->with('fail', 'Utilisateur non trouvé.');
        }
    }


    public function loginProf(Request $request)
    {

        $request->validate([
            'uname' => 'required|string',
            'pass' => 'required|min:6|max:12'
        ]);

        $prof = Professeur::where('username', $request['uname'])->first();

        if ($prof) {
            if (Hash::check($request['pass'], $prof['password'])) {
                $request->session()->put('user', $prof);
                return redirect()->route('homeProf');
            } else {
                return back()->with('fail', 'Mot de passe est incorrect.');
            }
        } else {
            return back()->with('fail', 'Utilisateur non trouvé.');
        }
    }


    public function loginEleve(Request $request)
    {
        $request->validate([
            'uname' => 'required|string',
            'pass' => 'required|min:6|max:12'
        ]);

        $eleve = Eleve::where('matricule', $request['uname'])->first();

        if ($eleve) {
            if (Hash::check($request['pass'], $eleve['password'])) {
                $classe = $eleve->classes()->where('annee-scolaire', date('Y'))->get()->first();
                $request->session()->put('user', $eleve);
                $request->session()->put('classe', $classe);
                return redirect()->route('homeEle');
            } else {
                return back()->with('fail', 'Mot de passe est incorrect.');
            }
        } else {
            return back()->with('fail', 'Utilisateur non trouvé.');
        }
    }


    public function logout()
    {
        if (Session()->has('loginId')) {
            Session()->pull('loginId');
        }
        return redirect()->route('home');
    }
}
