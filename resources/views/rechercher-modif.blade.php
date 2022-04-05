<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 form-group border rounded-lg px-4 py-3">
                    <h2 class="h2 text-center my-4">Modification du client </h2>
                    <form action="{{ url('/recherche/update/' . $editUser->numeroClient) }}" method="POST">
                        @csrf
                        <div class="row d-flex justify-center">
                            <div class="col-xl col-md">

                                <label for="nom">Nom</label>
                                <input class="form-control mb-3 rounded-lg" type="text" name="nom" id="nom"
                                    value="{{ $editUser->nom }}">
                                    
                                <label for="prenom">Prénom</label>
                                <input class="form-control mb-3 rounded-lg" type="text" name="prenom" id="prenom"
                                    value="{{ $editUser->prenom }}">                                

                                <label for="email">Email</label>
                                <input class="form-control mb-3 rounded-lg" type="text" name="email" id="email"
                                    value="{{ $editUser->email }}">

                                <label for="tel">Téléphone</label>
                                <input class="form-control mb-3 rounded-lg" type="text" name="tel" id="tel"
                                    value="{{ $editUser->tel }}">

                                <label for="adresse">Adresse</label>
                                <input class="form-control mb-3 rounded-lg" type="text" name="adresse" id="adresse"
                                    value="{{ $editUser->adresse }}">

                                <label for="numeroClient">Numéro client</label>
                                <input class="form-control mb-3 rounded-lg" type="text" name="numeroClient"
                                    id="numeroClient" value="{{ $editUser->numeroClient }}">

                            </div>


                            <div class="col-xl col-md">
                                <label for="siren">SIREN</label>
                                <input class="form-control mb-3 rounded-lg" type="text" name="siren" id="siren"
                                    value="{{ $editUser->siren }}">

                                <label for="numeroAgence">Numéro d'agence</label>
                                <input class="form-control mb-3 rounded-lg" type="text" name="numeroAgence"
                                    id="numeroAgence" value="{{ $editUser->numeroAgence }}">

                                <label for="codeApe">Code APE</label>
                                <input class="form-control mb-3 rounded-lg" type="text" name="codeApe" id="codeApe"
                                    value="{{ $editUser->codeApe }}">

                                <label for="raisonSociale">Raison sociale</label>
                                <input class="form-control mb-3 rounded-lg" type="text" name="raisonSociale"
                                    id="raisonSociale" value="{{ $editUser->raisonSociale }}">

                                <label for="dureeDeplacement">Durée déplacement</label>
                                <input class="form-control mb-3 rounded-lg" type="time" name="dureeDeplacement"
                                    id="dureeDeplacement" value="{{ $editUser->dureeDeplacement }}">

                                <label for="distanceKm">Distance en KM</label>
                                <input class="form-control mb-3 rounded-lg" type="text" name="distanceKm"
                                    id="distanceKm" value="{{ $editUser->distanceKm }}">



                                </div>
                                <button class="btn text-white my-3 bg-primary" style="width: 80%" type="submit">Confirmer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
