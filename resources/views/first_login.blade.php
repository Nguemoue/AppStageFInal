<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>!! Identifiez vous !!!</title>
</head>

<body>
    <div class="container">
        <div class="card my-4">
            <div class="card-header bg-success bg-gradient">
                <h4 class="card-title text-center">
                    Veuillez vous identifiez!
                </h4>
            </div>
            <div class="card-body shadow">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div> {{ $error }} </div>
                        @endforeach
                    </div>
                @endif
                <fieldset>
                    <legend>Formulaire de connexion</legend>
                    <form action="{{ route('post.first.login') }}" class="form-check" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="login" class="form-label">Votre login</label>
                            <input required name="login" autocomplete="fax" type="text" class="form-control"
                                placeholder="Entrez Votre Login">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label ">Mot de Passe</label>
                            <input type="password" name="password" required class="form-control "
                                placeholder="Votre Mot de Passe">
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="reset" class="btn btn-outline-danger">Reset</button>
                            <button type="submit" class="btn btn-success">Se Connecter</button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="javascript"></script>
</body>

</html>
