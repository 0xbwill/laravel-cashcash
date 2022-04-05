<x-app-layout>

    <div class="py-12">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <strong> {{ session('success') }}</strong>
            </div>
        @endif
        <div class="col-xl-11 mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg text-white mb-3">
                <h2 class="h2 text-center">Résultat recherche</h2>
            </div>

            @if ($client->isNotEmpty())
            <div class="table-responsive"> 
                <table class="table border border-white text-white mt-2" style="background-color:#0e131c">
                    <thead>
                        <tr>
                            <th scope="col">Numéro client</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">email</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Num siren</th>
                            <th scope="col">Num agence</th>
                            <th scope="col">Code APE</th>
                            <th scope="col">Raison sociale</th>
                            <th scope="col">Durée déplacement</th>
                            <th scope="col">Distance en KM</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($client as $unClient)
                                <td>{{ $unClient->numeroClient }}</p>
                                <td>{{ $unClient->nom }}</p>
                                <td>{{ $unClient->prenom }}</p>
                                <td>{{ $unClient->email }}</p>
                                <td>{{ $unClient->tel }}</p>
                                <td>{{ $unClient->adresse }}</p>
                                <td>{{ $unClient->siren }}</p>
                                <td>{{ $unClient->numeroAgence }}</p>
                                <td>{{ $unClient->codeApe }}</p>
                                <td>{{ $unClient->raisonSociale }}</p>
                                <td>{{ $unClient->dureeDeplacement }}</p>
                                <td>{{ $unClient->distanceKm }}</p>
                                <td><a href="{{ url('recherche/modifier/' . $unClient->numeroClient) }}"
                                        class="btn btn-primary">Modifier</a></p>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            @else
                <div class="d-flex justify-center">
                    <h3 class="h3 text-white text-center mt-3">Aucun résultat</h2><br>
                        <a href="{{ route('dashboard') }}"
                            class="btn btn-primary text-center h-50 mt-1 ml-3 align-self-center">Retour</a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
