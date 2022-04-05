<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Gestionnaire extends Controller
{
    public function selectAgence(Request $request) {

        $selectedAgence = $request->input('selectAgence');

        $agence = DB::table('agences')
        ->where('numeroAgence', $selectedAgence)
        ->get();

        $listeClient = DB::table('clients')
        ->where('numeroAgence', $selectedAgence)
        ->get();

        return view('affecter-intervention', compact('agence', 'selectedAgence', 'listeClient'));
    }

    public function newIntervention($numeroClient) {

        $newIntervention = DB::table('clients')->where('numeroClient', $numeroClient)->first();

        $intervenants = DB::table('users')
        ->where('isTechnicien', 1)
        ->where('numeroAgence', $newIntervention->numeroAgence)
        ->get();

        return view('new-intervention', compact('newIntervention', 'intervenants'));

    }

    public function insertNewIntervention(Request $request) {

        $data = array();
        $data['numeroIntervenant'] = $request->numeroIntervenant;
        $data['dateVisite'] = $request->dateVisite;
        $data['heureVisite'] = $request->heureVisite;
        $data['numeroClient'] = $request->numeroClient;

        DB::table('intervention')->insert($data);
      
        return redirect()->route('dashboard')->with('success', 
        'Intervention assignée avec succès !');

    }
}
