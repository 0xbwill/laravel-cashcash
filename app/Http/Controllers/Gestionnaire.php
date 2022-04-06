<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Gestionnaire extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function selectAgence(Request $request)
    {

        $selectedAgence = $request->input('selectAgence');

        $agence = DB::table('agences')
            ->where('numeroAgence', $selectedAgence)
            ->get();

        $listeClient = DB::table('clients')
            ->where('numeroAgence', $selectedAgence)
            ->get();

        return view('gestionnaires/affecter-intervention', compact('agence', 'selectedAgence', 'listeClient'));
    }

    public function selectTechnicien(Request $request)
    {
        $selectedTechnicien = $request->input('selectTechnicien');

        $technicien = DB::table('users')
            ->where('id', $selectedTechnicien)
            ->get();

        $interventionsTerminee = DB::table('intervention')
        ->where('isValid', 1)
        ->where('numeroIntervenant', $selectedTechnicien)
        ->count();

        $nombreKmParcouru = DB::table('intervention')
        ->where('isValid', 1)
        ->where('numeroIntervenant', $selectedTechnicien)
        ->get();


        return view('gestionnaires/techniciens-details', compact('technicien','interventionsTerminee'));
    }

    public function newIntervention($numeroClient)
    {

        $newIntervention = DB::table('clients')->where('numeroClient', $numeroClient)->first();

        $intervenants = DB::table('users')
            ->where('isTechnicien', 1)
            ->where('numeroAgence', $newIntervention->numeroAgence)
            ->get();

        return view('gestionnaires/new-intervention', compact('newIntervention', 'intervenants'));
    }

    public function insertNewIntervention(Request $request)
    {

        $data = array();
        $data['numeroIntervenant'] = $request->numeroIntervenant;
        $data['dateVisite'] = $request->dateVisite;
        $data['heureVisite'] = $request->heureVisite;
        $data['numeroClient'] = $request->numeroClient;
        $data['tel'] = $request->tel;

        DB::table('intervention')->insert($data);

        return redirect()->route('dashboard')->with(
            'success',
            'Intervention assignée avec succès !'
        );
    }

    public function showTechniciens()
    {

        $techniciens = DB::table('users')
            ->where('isTechnicien', 1)
            ->get();

        return view('gestionnaires/gestion-techniciens', compact('techniciens'));
    }
}
