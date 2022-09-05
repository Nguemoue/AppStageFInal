<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ env('APP_NAME') }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('mdi/css/materialdesignicons.min.css') }}">
    @livewireStyles()
    <style>
         .accordion-item{
            box-shadow: 0 0 1px red !important;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        @includeIf('_partials.sidebar')
        <!-- Page content wrapper-->
        <div id="page-content-wrapper"  >
            <!-- Top navigation-->
            @includeIf('_partials.navbar')
            <!-- Page content-->
            @livewire('search-element')
            <div class="container-fluid">
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
                                <ul class="" >
                                    <li class="">
                                        <div class="accordion">
                                            <div class="accordion-item show">
                                                <h2 class="accordion-header" id="region-acc">
                                                    <button class="accordion-button collapsed" type="button" 
                                                    data-bs-toggle="collapse" data-bs-target="#accordionRegion">Region</button>
                                                </h2>
                                                <div id="accordionRegion" class="accordion-collapse collapse">
                                                    <div class="accordion-body">
                                                        <div class="card">
                                                            <div class="card-header">Legion</div>
                                                           <div class="card-body">
                                                            <ul>
                                                                <li class="ml-1">Groupement de gendamerie</li>
                                                                <li class="ml-2">les compagnies</li>
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
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts()
    <!-- Bootstrap core JS-->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
        // enabling the tooltip
        (function() {
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        })()
    </script>
</body>

</html>
