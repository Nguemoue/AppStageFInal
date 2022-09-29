@extends("template")


@section("main")
    <h6 class="text-center">Les Materiels</h6>
    <div class="card">
        <div class="card-header"><h6>Statistiques sur le  materiels</h6></div>
        <div class="card-body">
            <div class="card w-25 p-4">
                Nombres de Materiels Total:
                <strong>{{ $materiels?$materiels->count():0 }}</strong>
            </div>
            <div class="card w-25 p-4">
                Nombres de Materiels Ajouter pendant les 6 derniers mois
                <strong>{{ $materiels?$materiels->count():0 }}</strong>
            </div>
        </div>
        
    </div>
@endsection