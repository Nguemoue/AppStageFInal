<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mdi/css/materialdesignicons.min.css') }}">
    @livewireStyles
    <title>Test de Livewire</title>
</head>
<body class="min-h-screen " style="background: #ccc;">

    @livewire('posts-table')

    @livewireScripts
</body>
</html>