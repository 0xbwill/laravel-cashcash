<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg text-white">


                <div class="container mt-3">
                    <div class="row d-flex justify-center">
                        <div class="col-md-5">

                            <div class="card-dark rounded-lg" style="width: 30rem;border: 4px solid #282f3d">
                                <div class="card-body" style="background-color: #0e131c">
                                    <h5 class="card-title">
                                        @foreach ($technicien as $unTechnicien)
                                            <h4 class="h5">Technicien selectionnée :
                                                {{ $unTechnicien->name . ' ' . $unTechnicien->surname }}</h4>
                                            <br>
                                        @endforeach
                                    </h5>
                                    <p class="card-text">{{ 'Intervention(s) terminée : ' . $interventionsTerminee }}</p>
                                    <p class="card-text">{{ 'Nombres de kilomètres parcouru : ' }}</p>
                                    <p class="card-text">{{ 'Durée passée à controler le matériel : ' }}</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</x-app-layout>
