<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg text-white">


                <div class="container mt-3">
                    <div class="row d-flex justify-center">
                        <div class="col-md-5">
                            <a href="{{ url('/gestion-techniciens')}}" class="h5"><p class="text-center mb-4"> Changer de technicien</p></a>
                            <div class="card-dark rounded-lg" style="width: 30rem;border: 4px solid #282f3d">
                                <div class="card-body" style="background-color: #0e131c">
                                    <h5 class="card-title">
                                        @foreach ($technicien as $unTechnicien)
                                            <h4 class="h5">Technicien selectionné :
                                                {{ $unTechnicien->name . ' ' . $unTechnicien->surname }}</h4>
                                        @endforeach
                                    </h5>
                                    <p class="card-text">{{ 'Intervention(s) en cours : ' . $interventionsEnCours }}</p><br>
                                    <p class="card-text">{{ 'Intervention(s) terminée(s) : ' . $interventionsTerminee }}</p>
                                    <p class="card-text">{{ 'Nombre de kilomètres parcourus : '.$nombreKmParcouru.' km'}}</p>
                                    {{-- <p class="card-text">{{ 'Temps total : '.$dureeControle}}</p> --}}
                                </div>
                            </div>


                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</x-app-layout>
