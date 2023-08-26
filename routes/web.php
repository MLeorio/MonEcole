<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Eleve\TacheController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Personnel\EleveController;
use App\Http\Controllers\Personnel\ClasseController;
use App\Http\Controllers\Personnel\MatiereController;
use App\Http\Controllers\Personnel\ProfesseurController;
use App\Http\Controllers\Professeur\ClasseController as ProfClasseController;
use App\Http\Controllers\Professeur\MatiereController as ProfMatiereController;
use App\Http\Controllers\Professeur\TacheController as ProfTacheController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
})->name('home');

/**
 * Routes d'authentification
 * les differentes routes pour les portails de connexion
 * ainsi que leurs actions sur le serveur (controlleurs)
 */


Route::middleware('alreadyLogged')->group(function () {
    Route::prefix('login')->group(function () {
        Route::get('/personnel', [AuthController::class, 'persLogin'])->name('logPers');
        Route::get('/professeur', [AuthController::class, 'profLogin'])->name('logProf');
        Route::get('/eleve', [AuthController::class, 'eleveLogin'])->name('logElev');

        Route::post('personnel', [AuthController::class, 'loginPers'])->name('loginPers');
        Route::post('professeur', [AuthController::class, 'loginProf'])->name('loginProf');
        Route::post('eleve', [AuthController::class, 'loginEleve'])->name('loginElev');
    });
});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');


/**
 * Route d'accueil pour les utilisateurs
 */

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Route pour les personnels

Route::middleware('isLogin')->group(function () {
    Route::prefix('personnel')->group(function () {
        Route::get("/dashboard", [HomeController::class, 'boardPers'])->name('homePers');
    
        Route::prefix('matiere')->group(function () {
            Route::get('/', [MatiereController::class, 'index'])->name('matiere.list');
            Route::get('/ajouter-matiere', [MatiereController::class, 'create'])->name('matiere.ajouter');
            Route::get('/detail/{matiere}', [MatiereController::class, 'show'])->name('matiere.voir');
            Route::post('/add-matiere', [MatiereController::class, 'store'])->name('matiere.save');
            Route::put('/modifier-matiere/{matiere}', [MatiereController::class, 'update'])->name('matiere.maj');
            Route::delete('/supprimer-matiere/{matiere}', [MatiereController::class, 'destroy'])->name('matiere.effacer');
        });
    
        Route::prefix('professeur')->group(function () {
            Route::get('/', [ProfesseurController::class, 'index'])->name('professeur.list');
            Route::get('/ajouter-prof', [ProfesseurController::class, 'create'])->name('professeur.ajouter');
            Route::get('/detail/{prof}', [ProfesseurController::class, 'show'])->name('professeur.voir');
            Route::post('/ajouter-prof', [ProfesseurController::class, 'store'])->name('professeur.save');
            Route::put('/modifier-prof/{prof}', [ProfesseurController::class, 'update'])->name('professeur.maj');
            Route::delete('/supprimer-prof/{prof}', [ProfesseurController::class, 'destroy'])->name('professeur.effacer');
        });
    
        Route::prefix('classe')->group(function () {
            Route::get('/', [ClasseController::class, 'index'])->name('classe.list');
            Route::get('/ajouter-classe', [ClasseController::class, 'create'])->name('classe.ajouter');
            Route::get('/detail/{classe}', [ClasseController::class, 'show'])->name('classe.voir');
            Route::post('/ajouter-classe', [ClasseController::class, 'store'])->name('classe.save');
            Route::put('/modifier-classe/{classe}', [ClasseController::class, 'update'])->name('classe.maj');
            Route::delete('/supprimer-classe/{classe}', [ClasseController::class, 'destroy'])->name('classe.effacer');
            
            Route::get('/detail/reglages/{classe}', [ClasseController::class, 'edit'])->name('classe.setting');
            Route::post('/admission', [ClasseController::class, 'admission'])->name('classe.admission');
            Route::post('/programmation-cours', [ClasseController::class, 'cours'])->name('classe.cours');
        });
    
        Route::prefix('eleve')->group(function () {
            Route::get('/', [EleveController::class, 'index'])->name('eleve.list');
            Route::get('/ajouter-eleve', [EleveController::class, 'create'])->name('eleve.ajouter');
            Route::get('/detail/{eleve}', [EleveController::class, 'show'])->name('eleve.voir');
            Route::post('/ajouter-eleve', [EleveController::class, 'store'])->name('eleve.save');
            Route::put('/modifier-eleve/{eleve}', [EleveController::class, 'update'])->name('eleve.maj');
            Route::delete('/supprimer-eleve/{eleve}', [EleveController::class, 'destroy'])->name('eleve.effacer');
        });
    });
    
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Route pour les professeurs
    
    Route::prefix('professeur')->group(function () {
    
        Route::get('/dashboard', [HomeController::class, 'boardProf'])->name('homeProf');
    
        Route::prefix('matiere')->group(function () {
            Route::get('/', [ProfMatiereController::class, 'index'])->name('prof.matieres');
            Route::get('/{matiere}', [ProfMatiereController::class, 'show'])->name('prof.matiere');
        });
    
        Route::prefix('classe')->group(function () {
            Route::get('/', [ProfClasseController::class, 'index'])->name('prof.classes');
            Route::get('/{classe}', [ProfClasseController::class, 'show'])->name('prof.classe');
        });
    });
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Route pour les eleves
    
    Route::prefix('eleve')->group(function () {
    
        Route::get('/dashboard', [HomeController::class, 'boardEle'])->name('homeEle');
    
        Route::get('/ma-classe', [TacheController::class, 'maclasse'])->name('ma_classe');
    
        Route::prefix('matiere')->group(function () {
            Route::get('/', [TacheController::class, 'mesmatieres'])->name('mes_matieres');
            Route::get('/{matiere}', [TacheController::class, 'lamatiere'])->name('la_matiere');
        });
    });
});
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Autres routes

Route::get('/test', [ProfTacheController::class, 'addNote'])->name('req');

Route::get('/moi', [ProfTacheController::class, 'addNote'])->name('moi');
