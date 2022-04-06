<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PDFController extends Controller
{
   
    public function generatePDF($id)
    {

        $dateVisiteIntervention = DB::table('intervention')
        ->where('id', $id)
        ->value('dateVisite');

        $heureVisiteIntervention = DB::table('intervention')
        ->where('id', $id)
        ->value('heureVisite');

        $idTechnicien = DB::table('intervention')
        ->where('id', $id)
        ->value('numeroIntervenant');


        $nom = DB::table('clients')
	    ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
	    ->select('clients.nom')
        ->where('id', $id)
	    ->latest()
        ->value('nom');

        $prenom = DB::table('clients')
	    ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
	    ->select('clients.prenom')
        ->where('id', $id)
	    ->latest()
        ->value('prenom');

        $email = DB::table('clients')
	    ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
	    ->select('clients.email')
        ->where('id', $id)
	    ->latest()
        ->value('email');

        $tel = DB::table('clients')
	    ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
	    ->select('clients.tel')
        ->where('id', $id)
	    ->latest()
        ->value('tel');

        $adresse = DB::table('clients')
	    ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
	    ->select('clients.adresse')
        ->where('id', $id)
	    ->latest()
        ->value('adresse');

        $numeroAgence = DB::table('clients')
	    ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
	    ->select('clients.numeroAgence')
        ->where('id', $id)
	    ->latest()
        ->value('numeroAgence');

        $dureeDeplacement = DB::table('clients')
	    ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
	    ->select('clients.dureeDeplacement')
        ->where('id', $id)
	    ->latest()
        ->value('dureeDeplacement');

        $distanceKm = DB::table('clients')
	    ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
	    ->select('clients.distanceKm')
        ->where('id', $id)
	    ->latest()
        ->value('distanceKm');

        $numeroClient = DB::table('clients')
	    ->join('intervention', 'clients.numeroClient', '=', 'intervention.numeroClient')
	    ->select('clients.numeroClient')
        ->where('id', $id)
	    ->latest()
        ->value('numeroClient');

        $data = [
            'title' => 'Fiche - Intervention'.' N°'.$id,
            'date' => date('d/m/Y'),
            'dateVisite' => $dateVisiteIntervention,
            'heureVisite' => $heureVisiteIntervention,
            'idTechnicien' => $idTechnicien,
            'nom' => $nom,
            'prenom' => $prenom,
            'numeroClient' => $numeroClient,
            'email' => $email,
            'tel' => $tel,
            'adresse' => $adresse,
            'numeroAgence' => $numeroAgence,
            'dureeDeplacement' => $dureeDeplacement,
            'distanceKm' => $distanceKm,
        ];
          
        $pdf = PDF::loadView('techniciens/myPDF', $data);
    
        return $pdf->download('itsolutionstuff.pdf');
    }
}