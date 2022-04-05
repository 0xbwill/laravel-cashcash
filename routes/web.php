<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Gestionnaire;
use App\Http\Controllers\Technicien;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/dashboard', function () {
    $agences = DB::table('agences')->get();
    return view('dashboard', compact('agences'));
})->middleware('auth:sanctum', 'verified')->name('dashboard');


// Route pour les techniciens
Route::get('/rechercher', [Technicien::class, 'rechercheClient'])->name('rechercher');
Route::get('/recherche/modifier/{numeroClient}', [Technicien::class, 'editRecherche'])->name('modifier.rechercher');
Route::post('/recherche/update/{numeroClient}', [Technicien::class, 'updateRecherche'])->name('update.rechercher');
Route::get('/interventions', [Technicien::class, 'listeInterventions'])->name('interventions');



// Routes pour les gestionnaires
Route::get('/agence', [Gestionnaire::class, 'selectAgence'])->name('selection.agence');
Route::get('/assigner/intervention/{numeroClient}', [Gestionnaire::class, 'newIntervention'])->name('assigner.intervention');
Route::post('/insert/new/intervention', [Gestionnaire::class, 'insertNewIntervention'])->name('insert.intervention');
