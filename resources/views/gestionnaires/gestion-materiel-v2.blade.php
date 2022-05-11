<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-center text-white h3">Liste matériel v2</h1>
            <p class="text-center text-white">Affichage du numéro de série, de l'OS, version de l'OS, ID faille, nom faille ainsi que la date du correctif</p>

            <div class="flex col-xl-12 flex-wrap justify-center">


                {{-- foreach de chaque matériel, puis affichage de chaque élément correspondant --}}
                @foreach ($materiel as $unMateriel)
                <div class="card-dark text-white rounded-lg col-xl-12 my-4"  style="background-color: #0e131c;" style="width: 50rem;border: 4px solid #282f3d">
                    <div class="card-body">
                        <h5 class="card-title">
                        
                            <p><span style="font-weight: 800"> Numéro de série :</span> {{ $unMateriel->numeroDeSerie }}</p><br>
                            <p><span style="font-weight: 800">Système exploitation :</span> {{ $unMateriel->OS }}</p><br>
                            <p><span style="font-weight: 800">Version OS :</span> {{ $unMateriel->OSVersion }}</p><br>
                            <p><span style="font-weight: 800">ID de la faille de sécurité : {{ $unMateriel->id }}</span></p><br>
                            <p><span style="font-weight: 800">Nom de la faille : {{ $unMateriel->nomDeLaFaille }}</span></p><br>
                            <p><span style="font-weight: 800">Date correctif de la faille : {{ $unMateriel->dateDuCorrectif }}</span></p>

                            </p>
                            
                        </h5>
                    </div>
                </div>
                @endforeach
            </div>



            </table>
        </div>
    </div>
</x-app-layout>
