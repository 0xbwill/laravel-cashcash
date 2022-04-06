<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg text-white">
                <div class="text-center mb-2">
                    <h4 class="h4">Gestionnaire de techniciens</h4>
                </div>


                <div class="container mt-3">
                    <div class="row d-flex justify-center">
                        <div class="col-md-4">
                            <form action="{{ route('selection.technicien') }}" method="GET" class="d-flex">
                                @csrf
                                <select name="selectTechnicien" id="selectTechnicien" class="form-control">
                                    <option value="">Sélectionnez un technicien</option>
                                    @foreach ($techniciens as $unTechnicien)
                                        <option value="{{ $unTechnicien->id }}">
                                            {{ $unTechnicien->surname . ' ' . $unTechnicien->name }}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-primary ml-3" type="submit">Confirmer</button>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</x-app-layout>
