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
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('mdi/css/materialdesignicons.min.css') }}"/>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles()
    @stack('styles')
    <style>
        :root{
            font-family: "Fira Code" !important;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        @yield('sidebar')
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            @includeIf('_partials.dashboard_navbar')
            <!-- Page content-->
            @yield("main")
        </div>
    </div>
    @livewireScripts()
    <!-- Bootstrap core JS-->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

    <!-- Core theme JS-->
    <script src="{{asset('js/scripts.js')}}"></script>
    @stack("scripts")
    @includeIf("_partials.swal")

</body>

</html>
