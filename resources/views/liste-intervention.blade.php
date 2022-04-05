<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <strong> {{ session('success') }}</strong>
                </div>
            @endif
            <div class="overflow-hidden sm:rounded-lg text-white">
                <h1 class="h1 text-center mb-5">Vos interventions</h1>
                <div class="d-flex">
                    @foreach ($mesInterventions as $uneIntervention)
                    <div class="card text-white mb-3 rounded-lg mx-3" style="max-width: 18rem;background-color:#0e131c;border:2px #282f3d solid">
                        <div class="card-header">Client : {{$uneIntervention->numeroClient}}</div>
                        <div class="card-body">
                          <h5 class="card-title">{{ \Carbon\Carbon::parse($uneIntervention->dateVisite)->format('d/m/Y').' à '.\Carbon\Carbon::parse($uneIntervention->heureVisite)->format('H:i')}}</h5>
                          <p class="card-text">Téléphone : {{$uneIntervention->tel}}</p>
                        </div>
                        <a href="{{ url('/rechercher?search=').$uneIntervention->numeroClient}}" class="btn btn-primary">Détails</a>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
