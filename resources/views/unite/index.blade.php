@extends("template")

@section("main")
<div class="container-fluid">
    
    <h3 class="text-center text-muted">Mon unite</h3>

    <div class="card mb-3">
        <div class="card-header"><h6>Information sur mon unite</h6></div>
        <div class="card-body d-flex justify-content-between">
            <div class="card p-3">
                Nom de L'unite : <strong>Brigade {{ $unite->nom }}</strong>
            </div>
            <div class="card p-3">
                Adresse : <strong>{{ $unite->code }}</strong>
            </div>
            <div class="card p-3">
                Ville : <strong>{{ $unite->ville->libelle }}</strong>
            </div>
            <div class="card p-3">
                Nombre D'element: <strong>{{ $unite->nbPersonnels() }} Elements Ratache</strong>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h6>Localisation</h6>
        </div>
        <div class="card-body">
            la <map name="unite-map">map</map>
        </div>
    </div>

    <hr>
    <div class="card">
        <div class="card-header"><h6>Gerer son unite</h6></div>
        <div class="card-body d-flex justify-content-around">
            <div class="card p-4">
                <a href="{{ route('element.index') }}" class="h-100 text-decoration-none">
                    Rubrique  personnels
                </a>
            </div>
            <div class="card">
                <a href="{{ route('materiel.index') }}" class="h-100 p-4 text-decoration-none d-block">
                    <span>Rubrique  Materiel</span>
                </a>
            </div>
            <div class="card p-4">
                <a href="">
                    Rubrique Services
                </a>
            </div>
            <div class="card p-4">
                <a href="">
                    Rubrique garde a vues
                </a>
            </div>
        </div>
    </div>
</div>
@endsection