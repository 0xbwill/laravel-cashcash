<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg text-white">
                <h1 class="h1 text-center">Résultat recherche</h1>
            </div>

            @if ($client->isNotEmpty())
                <table class="table border border-white text-white mt-2" style="background-color:#0e131c">
                    <thead>
                        <tr>
                            <th scope="col">Numéro client</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($client as $unClient)
                                <td>{{ $unClient->numeroClient }}</p>
                                <td>{{ $unClient->nom }}</p>
                                <td>{{ $unClient->prenom }}</p>
                                <td>{{ $unClient->tel }}</p>
                                <td><button type="button" class="btn btn-primary">Modifier</button></p>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            @else
                <div class="d-flex justify-center">
                    <h3 class="h3 text-white text-center mt-3">Aucun résultat</h2><br>
                    <a href="{{ route('dashboard')}}" class="btn btn-primary text-center h-50 mt-1 ml-3 align-self-center">Retour</a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
