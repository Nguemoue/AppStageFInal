@extends("template")


@section("main")
    <h4 class="my-2 text-center">Les Materiels Affectees a l'unite</h4>
    <hr class="mx-2">
    <div class="row">
        @foreach($allMateriels as $materiel)
            <div class="col-6 my-2" >
                <div class="container">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">{{ $materiel->nom  }}</h4>

                        </div>
                        <div class="card-body ">
                            <div class="card-text d-flex justify-content-around align-items-baseline">
                                <span class="{{ IconProvider::getIcon($materiel->nom)  }} mdi-48px"></span>
                                <span class="h4"> {{$materiel->nb}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <hr>
    <br>
@endsection
