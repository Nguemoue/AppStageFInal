<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="color-scheme" content="light dark"/>
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
        :root{  
            color-scheme:light dark;
        }
         .accordion-item{
            box-shadow: 0 0 1px red !important;
        }
    </style>
    @stack('styles')
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
            @yield("main")
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
    @stack("scripts")
</body>

</html>
