<x-app-layout>

    <div class="py-12">
        <div class="container-fluid sm:px-6 lg:px-8 mx-auto">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <strong> {{ session('success') }}</strong>
                </div>
            @endif
            <div class="overflow-hidden sm:rounded-lg text-white">

                <h2 class="h2 text-center mb-5">Vos interventions</h2>

                <section class="">

                    <div class="d-flex mx-5 justify-center">
                        <form action="{{ route('interventions.filter.date') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary ml-4 mb-4" data-toggle="button"
                                aria-pressed="false" autocomplete="off">
                                Trier par date
                            </button>
                        </form>
                        <form action="{{ route('interventions.filter.client') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary ml-4 mb-4" data-toggle="button"
                                aria-pressed="false" autocomplete="off">
                                Trier par client
                            </button>
                        </form>
                        <form action="{{ route('interventions.filter.distance') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary ml-4 mb-4" data-toggle="button"
                                aria-pressed="false" autocomplete="off">
                                Trier par distance
                            </button>
                        </form>
                    </div>

                    <div class="d-flex flex-wrap justify-center">
                        @php($i = 0)
                        @foreach ($mesInterventions as $uneIntervention)
                            <div class="card col-md-6 text-white mb-3 rounded-lg mx-2"
                                style="max-width:22rem;background-color:#0e131c;border:2px #282f3d solid">
                                <div class="card-header">
                                    @php($i++)
                                    @if ($i == 1)
                                        @if (Route::current()->getName() == 'interventions.filter.distance')
                                            <i class="bi bi-exclamation-circle-fill mx-2 d-flex align-items-center                                        "
                                                style="color:rgb(255, 50, 50);position:absolute;top:1;right:0;">
                                                <p class="ml-1">Prioritaire</p>
                                            </i>
                                        @endif
                                    @endif
                                    <p>{{ $uneIntervention->numeroClient . ' - ' . $uneIntervention->nom . ' ' . $uneIntervention->prenom }}
                                    </p>
                                    <p>{{ 'Téléphone : ' . $uneIntervention->tel }}</p>
                                </div>

                                <div class="card-body">
                                    <p>{{ 'Date : ' . \Carbon\Carbon::parse($uneIntervention->dateVisite)->format('d/m/Y') }}
                                    </p>
                                    <p>{{ 'Heure : ' . $uneIntervention->heureVisite }}</p>
                                    <p>{{ 'Distance : ' . $uneIntervention->distanceKm . ' km' }}</p>
                                    <p>{{ 'Durée déplacement : ' . $uneIntervention->dureeDeplacement }}</p>
                                </div>
                                <div>

                                    <div class="col mx-2 ">
                                        <div class="d-flex justify-center mb-2">
                                            <a class="mx-1 btn btn-primary w-100"
                                                style="background-color: #0064a7;border:none"
                                                href="{{ url('/rechercher?search=') . $uneIntervention->numeroClient }}">Détails</a>
                                            <a class="mx-1 btn btn-success w-100"
                                                style="background-color: #003d69;border:none"
                                                href="{{ url('/generate-pdf/' . $uneIntervention->id) }}">
                                                Générer PDF</a>
                                        </div>
                                        <div class="d-flex justify-center mb-2">
                                            <!-- Button Modal -->
                                            @if ($uneIntervention->isValid == 1)
                                                <button class="mx-1 btn btn-success w-100 mb-2" data-bs-toggle="modal"
                                                    data-bs-target="#popupCommentaire{{ $uneIntervention->id }}">
                                                    Intervention validée
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade"
                                                    id="popupCommentaire{{ $uneIntervention->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content border"
                                                            style="background-color: #0e131c">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                                    Confirmation de l'intervention
                                                                    n°{{ $uneIntervention->id }}
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ url('/interventions/valider/' . $uneIntervention->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="commentaire"
                                                                            class="form-label">Commentaire</label>
                                                                        <input class="form-control rounded-lg"
                                                                            id="commentaire" name="commentaire"
                                                                            type="text"
                                                                            value="{{ $uneIntervention->commentaire }}"
                                                                            required>
                                                                    </div>

                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <button class="mx-1 btn btn-success w-100 mb-2" data-bs-toggle="modal"
                                                    data-bs-target="#popupValidation{{ $uneIntervention->id }}">
                                                    Valider
                                                </button>
                                            @endif
                                            <!-- Modal -->
                                            <div class="modal fade"
                                                id="popupValidation{{ $uneIntervention->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content border" style="background-color: #0e131c">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">
                                                                Confirmation de l'intervention
                                                                n°{{ $uneIntervention->id }}
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="{{ url('/interventions/valider/' . $uneIntervention->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="commentaire"
                                                                        class="form-label">Commentaire</label>
                                                                    <input class="form-control rounded-lg"
                                                                        id="commentaire" name="commentaire" type="text"
                                                                        required>
                                                                </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-primary">Confirmer</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>




</x-app-layout>
