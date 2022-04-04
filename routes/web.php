<?php

use App\Http\Controllers\Admin;
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

Route::get('/rechercher', [Technicien::class, 'rechercheClient'])->name('rechercher');
