<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Technicien extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function listeInterventions()
    {
        $mesInterventions = DB::table('clients')
            ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
            ->select('clients.*', 'intervention.*')
            ->where('numeroIntervenant', Auth::user()->id)
            ->orderBy('clients.distanceKm', 'asc')
            ->get();

        // $mesInterventions = DB::table('intervention')
        //     ->where('numeroIntervenant', Auth::user()->id)
        //     ->orderBy('dateVisite', 'asc')
        //     ->get();

        return view('liste-intervention', compact('mesInterventions'));
    }

    public function filterInterventionDate()
    {
        $mesInterventions = DB::table('clients')
            ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
            ->select('clients.*', 'intervention.*')
            ->where('numeroIntervenant', Auth::user()->id)
            ->orderBy('dateVisite', 'asc')
            ->get();

        return view('liste-intervention', compact('mesInterventions'));
    }

    public function filterInterventionClient()
    {

        $mesInterventions = DB::table('clients')
            ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
            ->select('clients.*', 'intervention.*')
            ->where('numeroIntervenant', Auth::user()->id)
            ->orderBy('clients.numeroClient', 'asc')
            ->get();

        return view('liste-intervention', compact('mesInterventions'));
    }

    public function filterInterventionDistance()
    {

        $mesInterventions = DB::table('clients')
            ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
            ->select('clients.*', 'intervention.*')
            ->where('numeroIntervenant', Auth::user()->id)
            ->orderBy('clients.distanceKm', 'asc')
            ->get();

        return view('liste-intervention', compact('mesInterventions'));
    }

    public function rechercheClient(Request $request)
    {

        $client = $request->input('search');

        $client = DB::table('clients')
            ->where('numeroClient', $client)
            ->get();

        return view('rechercher', compact('client'));
    }

    public function editRecherche($numeroClient)
    {

        $editUser = DB::table('clients')
            ->where('numeroClient', $numeroClient)
            ->first();

        return view('rechercher-modif', compact('editUser'));
    }

    public function updateRecherche(Request $request, $numeroClient)
    {
        $data = array();
        $data['prenom'] = $request->prenom;
        $data['nom'] = $request->nom;
        $data['email'] = $request->email;
        $data['tel'] = $request->tel;
        $data['adresse'] = $request->adresse;
        $data['numeroClient'] = $request->numeroClient;

        $data['siren'] = $request->siren;
        $data['numeroAgence'] = $request->numeroAgence;
        $data['codeApe'] = $request->codeApe;
        $data['raisonSociale'] = $request->raisonSociale;
        $data['dureeDeplacement'] = $request->dureeDeplacement;
        $data['distanceKm'] = $request->distanceKm;

        DB::table('clients')->where('numeroClient', $numeroClient)->update($data);

        return redirect()->route('dashboard')->with(
            'success',
            'Utilisateur mis à jour avec succès !'
        );
    }

    public function validerIntervention($id) {
        
    }
}
