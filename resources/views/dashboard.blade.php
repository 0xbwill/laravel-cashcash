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
                    <h1 class="h1 text-center">Gestion des clients</h1>

                    <div class="d-flex justify-center mt-3">
                        <form action="{{ route('rechercher') }}" method="GET">
                            <input class="text-dark rounded-lg" type="text" name="search" required
                                placeholder="Entrez un numéro client" />
                            <button type="submit" class="btn btn-primary ml-3">Rechercher</button>
                        </form>
                    </div>
                @else
                    <h1 class="h1 text-center">Liste des agences</h1>
                    <div class="mt-3 d-flex justify-center">
                        <form action="{{ route('selection.agence') }}" class="d-flex" style="width:60vh">
                            <select name="selectAgence" id="" class="form-control">
                                <option value="">Sélectionnez une agence</option>
                                @foreach ($agences as $uneAgence)
                                    <option value="{{ $uneAgence->numeroAgence }}">
                                        {{ $uneAgence->numeroAgence . ' | ' . $uneAgence->nomAgence }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary ml-3">Confirmer</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
