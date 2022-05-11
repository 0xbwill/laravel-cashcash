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
            ->orderBy('clients.numeroClient', 'asc')
            ->get();

        return view('techniciens/liste-intervention', compact('mesInterventions'));
    }

    public function filterInterventionDate()
    {
        $mesInterventions = DB::table('clients')
            ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
            ->select('clients.*', 'intervention.*')
            ->where('numeroIntervenant', Auth::user()->id)
            ->orderBy('dateVisite', 'asc')
            ->get();

        return view('techniciens/liste-intervention', compact('mesInterventions'));
    }

    public function filterInterventionClient()
    {

        $mesInterventions = DB::table('clients')
            ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
            ->select('clients.*', 'intervention.*')
            ->where('numeroIntervenant', Auth::user()->id)
            ->orderBy('clients.numeroClient', 'asc')
            ->get();

        return view('techniciens/liste-intervention', compact('mesInterventions'));
    }

    public function filterInterventionDistance()
    {

        $mesInterventions = DB::table('clients')
            ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
            ->select('clients.*', 'intervention.*')
            ->where('numeroIntervenant', Auth::user()->id)
            ->orderBy('clients.distanceKm', 'asc')
            ->get();

        return view('techniciens/liste-intervention', compact('mesInterventions'));
    }

    //Fonction recherche matériel
    public function rechercheMateriel(Request $request2)
    {
        // On stock dans $materiel la valeur saisie dans l'input
        $materiel = $request2->input('search');

        // On réecris dans $materiel, un tableau contenant les détails du client recherché
        $materiel = DB::table('materielreseau')
            ->join('materiel', 'materielreseau.NumeroSerie', '=', 'materiel.numeroDeSerie')
            ->select('materielreseau.*', 'materiel.*')
            ->where('NumeroSerie', $materiel)
            ->get();

        // On retourne la vue 'info-materiel-reseau' se trouvant dans le répertoire 'view/techniciens/'
        return view('techniciens/info-materiel-reseau', compact('materiel'));
    }
    //Fin Fonction recherche matériel


    

    //Fonction de recherche client
    public function rechercheClient(Request $request)
    {
        // On stock dans $client la valeur saisie dans l'input
        $client = $request->input('search');

        // On réecris dans $client, un tableau contenant les détails du client recherché
        $client = DB::table('clients')
            ->where('numeroClient', $client)
            ->get();

        // On retourne la vue 'rechercher.blade.php' se trouvant dans le répertoire 'view/techniciens/'
        return view('techniciens/rechercher', compact('client'));
    }
    //Fin fonction recherche client

    public function editRecherche($numeroClient)
    {

        $editUser = DB::table('clients')
            ->where('numeroClient', $numeroClient)
            ->first();

        return view('techniciens/rechercher-modif', compact('editUser'));
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

        // Mets à jours les données du clients dans la table
        DB::table('clients')->where('numeroClient', $numeroClient)->update($data);

        return redirect()->route('dashboard')->with(
            'success',
            'Utilisateur mis à jour avec succès !'
        );
    }


    public function validerIntervention(Request $request, $id)
    {

        $data = array();
        $data['commentaire'] = $request->commentaire;
        $data['isValid'] = 1;

        DB::table('intervention')->where('id', $id)->update($data);

        return redirect()->route('interventions')->with('success', 'Intervention confirmée avec succès.');
    }
}
