<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Technicien extends Controller
{
    public function rechercheClient(Request $request) {

    $client = $request->input('search');

    $client = DB::table('clients')
    ->where('numeroClient', $client)
    ->get();

    return view('rechercher', compact('client'));
    }
}
