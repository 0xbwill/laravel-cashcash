<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg text-white">
                <div class="text-center mb-2">
                    <a href="{{ route('dashboard') }}">Changer d'agence</a>
                </div>
                <div class="d-flex justify-center">
                    <h4 class="h4 text-center">Agence selectionnée : <br>
                        @foreach ($agence as $uneAgence)
                            <span>{{ $uneAgence->numeroAgence . ' - ' }}
                                {{ $uneAgence->nomAgence }}</span>
                        @endforeach
                    </h4>
                </div>
                

                <div class="container mt-5">
                    <div class="row d-flex justify-center">
                        <div class="col-md-6 mx-5 rounded-lg h-100 pb-3"
                            style="border: 2px #282f3d solid;background-color: #0e131c">
                            <h5 class="h5 text-center my-4">Liste des clients :</h5>
                            @foreach ($listeClient as $unClient)
                                <div class="d-flex justify-content-between mt-3">
                                    <p class="align-self-center ">
                                        {{ $unClient->numeroAgence . ' | ' . $unClient->nom . ' ' . $unClient->prenom }}
                                    </p>
                                    <a href="{{ url('assigner/intervention/' . $unClient->numeroClient) }}"
                                        class="btn btn-primary">Assigner une intervention</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</x-app-layout>
