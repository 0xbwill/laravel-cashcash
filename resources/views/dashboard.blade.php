<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <strong> {{ session('success') }}</strong>
                </div>
            @endif
            <div class="overflow-hidden sm:rounded-lg text-white">
                @if (Auth::user()->isTechnicien == 1)
                    <h2 class="h2 text-center">Accéder à une fiche client</h1>

                        <div class="d-flex justify-center mt-3">


                            <form action="{{ route('rechercher') }}" method="GET">
                                <input class="text-dark rounded-lg" type="text" name="search" required
                                    placeholder="Entrez un numéro client" />
                                <button type="submit" class="btn btn-primary ml-3">Rechercher</button>
                            </form>

                            
                        </div>
                        
                        <!-- Section recherche numero de serie pour les matériels -->
                        <h2 class="h2 text-center mt-5">Accéder à une fiche matériels réseaux</h1>

                        <div class="d-flex justify-center mt-3">


                            <form action="{{ route('rechercherMateriel') }}" method="GET">
                                <input class="text-dark rounded-lg" type="text" name="search" required
                                    placeholder="Recherche de matériel" />
                                <button type="submit" class="btn btn-primary ml-3">Rechercher</button>
                            </form>

                            
                        </div>
                        <!-- Fin section recherche numero de serie pour les matériels -->
                    @else
                        <h4 class="h4 text-center">Liste des agences</h4>
                        <div class="container mt-3">
                            <div class="row d-flex justify-center">
                                <div class="col-md-4">
                                    <form action="{{ route('selection.agence') }}" class="d-flex" method="GET">
                                        @csrf
                                        <select name="selectAgence" id="" class="form-control">
                                            <option value="">Sélectionnez une agence</option>
                                            @foreach ($agences as $uneAgence)
                                                <option value="{{ $uneAgence->numeroAgence }}">
                                                    {{ $uneAgence->numeroAgence . ' | ' . $uneAgence->nomAgence }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary ml-3">Confirmer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
            </div>
            @endif
        </div>
    </div>
    </div>
</x-app-layout>
