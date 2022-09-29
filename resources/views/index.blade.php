@extends('template')

@section('main')
    <div class="container-fluid">
        @livewire('search-element')
        <br>
        <div class="my-3 accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Les Services Centraux
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <li class="list-group-item">Cabinet Sed</li>
                            <li class="list-group-item">DDC</li>
                            <li class="list-group-item">DCGC</li>
                            <li class="list-group-item">DAG</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Le Commandement Territoriale
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <ul class="">
                            <li class="">
                                <div class="accordion">
                                    <div class="accordion-item show">
                                        <h2 class="accordion-header" id="region-acc">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordionRegion">Les
                                                Regions</button>
                                        </h2>
                                        <div id="accordionRegion" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <div class="card">
                                                    <h6 class="card-header">Les Legions</h6>
                                                    <div class="card-body">
                                                        <ul class="list-group list-group-horizontal">
                                                            <li class="ml-1 list-group-item">Groupement de gendamerie</li>
                                                            <a href="{{ route('index') }}" class="ml-2 list-group-item ">les
                                                                compagnies</a>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Les Formations Specialise
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        Aucun element pour le moment ...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6332bc5d37898912e96b82b7/1gdv59a36';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
@endsection


@push('styles')
    <style>
        :root {
            font-family: "sans-serif";
            font-family: cursive "Helvetica" !important;
            font-size: .93em;
        }

        * {
            outline: none !important;
        }

        img {
            -webkit-box-reflect: below 0 linear-gradient(rgba(0, 0, 0, 0.2),
                    rgba(0, 0, 0, .3));
        }
    </style>
@endpush
