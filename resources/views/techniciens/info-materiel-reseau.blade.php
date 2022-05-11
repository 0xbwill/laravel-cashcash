<x-app-layout>

    <div class="py-12">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <strong> {{ session('success') }}</strong>
            </div>
        @endif
        <div class="col-xl-11 mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg text-white mb-3">
                <h2 class="h2 text-center">Résultat recherche du materiel réseau</h2>
            </div>

            {{-- Vérification que la variable $materiel n'est pas vide, si elle ne l'est pas pour afficher le formulaire de modification --}}
            @if ($materiel->isNotEmpty())
        
            <div class="table-responsive"> 
                <table class="table border border-white text-white mt-2 text-center" style="background-color:#0e131c">
                    <thead>
                        <tr>
                            <th scope="col">Numéro du client</th>
                            <th scope="col">Numéro du contrat</th>
                            <th scope="col">Numéro de serie</th>
                            <th scope="col">Version du SE</th>
                            <th scope="col">Date de sortie du correctif</th>
                            <th scope="col">Prix de vente</th>
                            <th scope="col">Date de vente</th>
                            <th scope="col">Date de l'installation</th>
                            <th scope="col">Emplacement de l'installation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                             {{-- Permet de faire une boucle sur la variable $materiel et d'afficher toutes les infos du materiel reseau --}}
                            @foreach ($materiel as $unMateriel)
                                <td>{{ $unMateriel->numeroClient }}</p>
                                <td>{{ $unMateriel->numeroContrat }}</p>
                                <td>{{ $unMateriel->NumeroSerie }}</p>
                                <td>{{ $unMateriel->versionSE }}</p>
                                <td>{{ $unMateriel->dateSortieCorrectif }}</p>
                                <td>{{ $unMateriel->prixVente }}</p>
                                <td>{{ $unMateriel->dateDeVente }}</p>
                                <td>{{ $unMateriel->dateInstallation }}</p>
                                <td>{{ $unMateriel->emplacement }}</p>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>

            <center>
            <a href="{{ route('dashboard') }}"
            class="btn btn-primary text-center h-50 mt-1 ml-3 align-self-center">Retour</a>
            </center>
            
            @else
                <div class="d-flex justify-center">
                    <h3 class="h3 text-white text-center mt-3">Aucun materiel trouvé</h2><br>
                        <a href="{{ route('dashboard') }}"
                            class="btn btn-primary text-center h-50 mt-1 ml-3 align-self-center">Retour</a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
