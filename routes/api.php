<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('/etudiant', EtudiantController::class);

// Route::controller(EtudiantController::class)->group(function(){
//     Route::get('/etudiants', 'index');
//     Route::post('/etudiant', 'store');
//     Route::get('/etudiant/{etudiant}', 'show');
//     Route::put('/etudiant/{etudiant}', 'update');
//     Route::delete('/etudiant/{etudiant}', 'destroy');
// });