<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-center text-white h3">Liste matériel v1</h1>
            <p class="text-center text-white">Affichage du numéro de série, de l'OS ainsi que sa version</p>

            <div class="flex col-xl-12 flex-wrap justify-center">

                @foreach ($materiel as $unMateriel)
                    <div class="card-dark text-white rounded-lg col-xl-12 my-4" style="background-color: #0e131c;"
                        style="width: 50rem;border: 4px solid #282f3d">
                        <div class="card-body">
                            <h5 class="card-title">
                                <p><span style="font-weight: 800"> Numéro de série :</span>
                                    {{ $unMateriel->numeroDeSerie }}</p><br>
                                <p><span style="font-weight: 800">Système exploitation :</span> {{ $unMateriel->OS }}
                                </p><br>
                                <p><span style="font-weight: 800">Version OS :</span> {{ $unMateriel->OSVersion }}</p>
                            </h5>
                        </div>
                    </div>
                @endforeach
            </div>



            </table>
        </div>
    </div>

</x-app-layout>
