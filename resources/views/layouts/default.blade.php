<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="color-scheme" content="light dark"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="projet de surveillance des armmes" />
    <meta name="author" content="" />
    <title>{{ env('APP_NAME') }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('mdi/css/materialdesignicons.min.css') }}">
    @livewireStyles()
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        :root{

            color-scheme:light dark;
        }
        body{
            font-family: "Fira Code" !important;
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
    <div id="page-content-wrapper" style="height: 100vh;overflow-y: scroll;overflow-x: hidden; ">
        <!-- Top navigation-->
    @includeIf('_partials.navbar')
    <!-- Page content-->
        <div class="container">
            {{$slot}}
        </div>
    </div>
</div>
@livewireScripts()
<!-- Bootstrap core JS-->
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
<script>

</script>
@vite(['resources/js/app.js'])
@stack("scripts")
@includeIf("_partials.swal")
</body>

</html>
