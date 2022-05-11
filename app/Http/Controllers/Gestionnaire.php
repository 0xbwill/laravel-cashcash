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

        $interventionsEnCours = DB::table('intervention')
            ->where('isValid', NULL)
            ->where('numeroIntervenant', $selectedTechnicien)
            ->count();

        $interventionsTerminee = DB::table('intervention')
            ->where('isValid', 1)
            ->where('numeroIntervenant', $selectedTechnicien)
            ->count();

        $nombreKmParcouru = DB::table('clients')
            ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
            ->select('clients.*', 'intervention.*')
            ->where('isValid', 1)
            ->where('numeroIntervenant', $selectedTechnicien)
            ->sum('distanceKm');

        // $dureeControle = DB::table('clients')
        //     ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
        //     ->select('clients.dureeDeplacement')
        //     ->where('isValid', 1)->where('numeroIntervenant', $selectedTechnicien)
        //     ->get();

        // foreach ($dureeControle as $uneDuree) {
        //     $dureeFinale = '0:00:00';
        //     $dureeFinale =+ $uneDuree->dureeDeplacement; 
        // } 


        return view('gestionnaires/techniciens-details', compact('technicien', 'interventionsTerminee', 'nombreKmParcouru', 'interventionsEnCours'));
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


    // Fonction v1 qui effectue la requête vers la BDD contenant l'ensemble des matériel, puis retourne la vue gestion-materiel (v1)
    public function showMateriel()
    {

        $materiel = DB::table('materiel')
            ->get();

        return view('gestionnaires/gestion-materiel', compact('materiel'));
    }


        // Fonction v2 qui effectue la requête vers la BDD avec une jointure
        // entre materiel et controllerFaille
        // et entre failleSecurite et controllerFaille
        // pour récupérer l'ensembles des failles de sécurité de chaque matériel

    public function showMaterielv2()
    {

        $materiel = DB::table('materiel')
            ->join('controllerFaille', 'materiel.numeroDeSerie', '=', 'controllerFaille.numeroDeSerie')
            ->join('failleSecurite', 'controllerFaille.idFaille', '=', 'failleSecurite.id')
            ->get();

        return view('gestionnaires/gestion-materiel-v2', compact('materiel'));
    }
}
