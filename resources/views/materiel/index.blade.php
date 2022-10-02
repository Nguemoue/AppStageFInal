@extends("template")


@section("main")
    <h4 class="my-2 text-center">Les Materiels Affectees a l'unite</h4>
    <div class="card mx-4">
        <div class="card-header"><h6>Statistiques sur le  materiels</h6></div>
        <div class="card-body d-flex">
            <div class="card w-25 p-4 mx-2">
                Nombres de Materiels Total:
                <strong>{{ $materiels?$materiels->count():0 }}</strong>
            </div>
            <div class="card w-25 p-4 mx-2">
                Nombres de Materiels Ajouter pendant les 6 derniers mois
                <strong>{{ $materiels?$materiels->count():0 }}</strong>
            </div>
        </div>

    </div>
@endsection
