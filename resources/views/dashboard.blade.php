<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg text-white">
                @if (Auth::user()->isTechnicien == 1)
                    <h1 class="h1 text-center">Interface de gestion d'intervention</h1>

                    <div class="d-flex justify-center mt-3">
                        <form action="{{ route('rechercher') }}" method="GET" >
                            <input class="text-dark rounded-lg" type="text" name="search" required placeholder="Entrez un numéro client" />
                            <button type="submit" class="btn btn-primary ml-3">Rechercher</button>
                        </form>
                    </div>
                    @endif
            </div>
        </div>
    </div>
</x-app-layout>
