@extends("dashboard")
@push("styles")
    <style>
        body{
            font-family: "Fira Code" !important;
        }
    </style>
@endpush
@section("sidebar")
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">
            MON DAHSBOARD
        </div>
        <div class="list-group list-group-flush">
                <x-navlink-component class="border mt-1 active" link="{{ route('dashboard') }}" icon="mdi-store">
                    Tableau de bord
                </x-navlink-component>
                {{-- si il est chef --}}
                @if (auth()->user()->chef)
                    @includeIf('_partials.dashboard_sidebar.chef')
                @elseif (auth()->user()->element)
                    @includeIf('_partials.dashboard_sidebar.element')
                @endif
        </div>
    </div>


@endsection
@section("main")
    <hr>
    <h5 class="my-2 text-muted text-center"><span>Tableau de Bord</span></h5>
    <hr>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title text-center">Mes Informations</h5>
                        <a href="#!" class="btn btn-danger">Exporter en PDF <span class="mdi mdi-file-pdf-box"></span></a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                Nom: {{auth()->user()->nom}}
                            </li>
                            <li class="list-group-item">
                                Matricule: {{auth()->user()->matricule}}
                            </li>
                            <li class="list-group-item">
                                Email: {{auth()->user()->email}}
                            </li>
                            <li class="list-group-item">
                                Grade: {{auth()->user()->grade}}
                            </li>
                            <li class="list-group-item">
                                Adresse: {{auth()->user()->adresse}}
                            </li>
                            <li class="list-group-item">
                                Sexe: {{auth()->user()->grade}}
                            </li>
                            <li class="list-group-item">
                                Taille: {{auth()->user()->taille}} Metres
                            </li>
                            <li class="list-group-item">
                                Position: {{auth()->user()->positionPersonnel->intitule}}
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Mes Operations</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <a href="{{url('/user/profile')}}" class="list-group-item btn btn-success" >Modifier & Gerer Informations</a>
                            <a href="#" class="list-group-item btn btn-success my-1">Consulter la liste des materiels</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
