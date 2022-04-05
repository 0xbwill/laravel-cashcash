<x-app-layout>
    <div class="container mt-5">
        <div class="row d-flex justify-center">
            <div class="col-md-5 mx-2 rounded-lg h-100 pb-4 px-4 " style="border: 2px #282f3d solid;background-color: #0e131c">
                <h5 class="h5 text-center my-4 text-white">Assigner une intervention</h5>
                <form action="{{ route('insert.intervention') }}" method="POST" class="text-white form-group">
                    @csrf
                    <label for="numeroIntervenant">Intervenant :</label>
                    <select class="form-control mb-4"  name="numeroIntervenant" id="numeroIntervenant">
                        <option value="">Sélectionnez un intervenant</option>
                        @foreach($intervenants as $unIntervant)
                        <option value="{{ $unIntervant->id }}">{{ $unIntervant->id.' | '.$unIntervant->name.' '.$unIntervant->surname  }}</option>
                        @endforeach
                    </select>

                    <label for="dateVisite">Date visite :</label>
                    <input class="form-control mb-4" type="date" name="dateVisite" id="dateVisite">

                    <label for="heureVisite">Heure visite :</label>
                    <input class="form-control mb-4" type="time" name="heureVisite" id="heureVisite">
                    
                    <button class="btn btn-primary mt-3" type="submit">Confirmer</button>
                    <input name="numeroClient" type="hidden" value="{{ $newIntervention->numeroClient }}">
                </form>
            </div>
            <div class="col-md-5 mx-5 rounded-lg h-100 pb-3 text-white px-4 pb-4" style="border: 2px #282f3d solid;background-color: #0e131c">
                <h5 class="h5 text-center my-4">Informations client</h5>
                <p>Numéro client : {{$newIntervention->numeroClient}}</p>
                <p>Nom & prénom : {{$newIntervention->nom. ' '.$newIntervention->prenom }}</p>
                <p>Adresse : {{$newIntervention->adresse}}</p>
                <p>Email : {{$newIntervention->email}}</p>
                <p>Téléphone : {{$newIntervention->tel}}</p>
                <p>SIREN : {{$newIntervention->siren}}</p>
                <p>Numéro agence : {{$newIntervention->numeroAgence}}</p>
                <p>Code APE : {{$newIntervention->codeApe}}</p>
                <p>Raison sociale : {{$newIntervention->raisonSociale}}</p>
                <p>Durée déplacement : {{$newIntervention->dureeDeplacement}}</p>
                <p>Distance : {{$newIntervention->distanceKm}} km</p>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
