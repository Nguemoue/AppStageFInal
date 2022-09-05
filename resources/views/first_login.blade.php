<!Doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('logo-gendamerie.jpg') }}" type="image/x-icon">
    {{-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"
        integrity="sha512-fXnjLwoVZ01NUqS/7G5kAnhXNXat6v7e3M9PhoMHOTARUMCaf5qNO84r5x9AFf5HDzm3rEZD8sb/n6dZ19SzFA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="stylesheet" href="{{ asset('mdi/css/materialdesignicons.min.css') }}">
    <title> {{ env('APP_NAME') }} | Identification sur la plateforme</title>
    <style>
        *{
            border: none;
            outline: none !important;
        }
        * {
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(60deg,#b1b4b3,#111,#999);
            background-repeat: no-repeat;
            min-height: 100vh;
        }
        .form-control:focus,.btn:focus{
            box-shadow: none;
        }
        .card{
            background: rgba(200, 200, 200, .9);
            border: none;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
</head>

<body class="min-h-screen h-screen d-flex justify-content-center align-items-center">
    <div class="container">        
        {{-- <h2 class="text-muted text-center my-4 text-uppercase">Bienvenue Sur Notre Plateforme</h2> --}}
        <div class="card w-75 shadow mx-auto my-4">
            <div class="card-header text-h4 font-weight-bolder text-uppercase text-center"
                style="font-weight: bolder;font-style:italic">
                <span id="tp-elt">Identifiez vous en reseignant vos informations sur cette plateforme</span>
            </div>
            <div class="card-header py-1 bg-gradient" style="">
                <h4 class="card-title text-uppercase text-center">
                    {{-- Identifiez vous! --}}
                    <img src="{{ asset('logo-gendamerie.jpg') }}" alt="logo gendamerie"
                        class="d-inline-block border p-2 rounded-circle mx-auto text-center bg-danger" loading="lazy" decoding="async">
                </h4>
            </div>
            <div class="card-body">
                <div aria-live="polite" aria-atomic="true"
                    class="d-flex justify-content-center align-items-center w-100">

                </div>
                {{-- @if ($errors->any())
                    <!-- Flexbox container for aligning the toasts -->
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div> {{ $error }} </div>
                        @endforeach
                    </div>
                @endif --}}
                <fieldset>
                    <form action="{{ route('post.first.login') }}" class="form-check" novalidate method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="login" class="form-label">Votre login</label>
                            <div class="input-group">
                                <span class="input-group-text mdi mdi-account"></span>
                                <input required name="login" autocomplete="none" value="{{ old('login') }}" type="text" class="form-control"
                                    placeholder="Entrez Votre Login">
                            </div>
                            @error('login')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label ">Mot de Passe</label>
                            <div class="input-group">
                                <span class="input-group-text mdi mdi-key"></span>
                                <input type="password" name="password" id="password" required class="form-control "
                                    placeholder="Votre Mot de Passe">
                                <span class="input-group-text mdi mdi-eye" id="show-password" style="cursor:pointer"
                                    title="voir le mot de passe" data-bs-toggle="tooltip"
                                    data-bs-placement="top"></span>
                            </div>
                            @error('password')
                                <span class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <button type="reset" class="btn btn-outline-danger">Reinitialiser</button>
                            <button type="submit" class="btn btn-success">S'identifier <span
                                    class="mdi mdi-login"></span> </button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.19.0/core.min.js"
        integrity="sha512-t4NGjfaRaGCjmiTGBsiG3w8FCp8ZY7dPlwZAXfeoGPARUT/rt3OP0NpQkblSgZy/2R8vPTXiEcq/zcWIJ8NusQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>

<script>
    // initialisation des popovers
    (function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    })();

    // j'initialise mes toast
    (function() {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl, {
                animation: true
            })
        })
    })()


    // varaibles
    const elt = document.getElementById('tp-elt')
    let showPassword = document.getElementById("show-password")
    let passwordField = document.getElementById("password")
    let content = elt.textContent

    showPassword.addEventListener("click", (event) => {
        if (passwordField.getAttribute("type") == "password") {
            event.target.classList.toggle("mdi-eye")
            event.target.classList.toggle("mdi-eye-off")
            passwordField.type = "text"
            event.target.title = "voir le mot de passe"

        } else {
            event.target.title = "masquer le mot de passe"
            passwordField.type = "password"
            event.target.classList.toggle("mdi-eye")
            event.target.classList.toggle("mdi-eye-off")
        }
    })
    const tp = new Typewriter(elt, {
        loop: false,
        cursor: "",
        delay: 60,
        // delaySpeed:90
    })

    tp.pauseFor(400).typeString(content).pauseFor(100).typeString(" Merci! ").start()
</script>

</html>
