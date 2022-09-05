<x-guest-layout>
    <h2 class="text-center text-uppercase text-white" style="text-shadow: 1px 1px 3px white" id="tp-elt">Connectez-Vous a votre Compte</h2>
    <div class="card">
        <div class="card-header">
            <nav class="w-fill">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link text-uppercase text-dark border d-inline-block w-50 active" id="nav-home-tab" data-bs-toggle="tab"
                        data-bs-target="#form-element" type="button" style="font-weight: bold;font-family:cursive" role="tab" aria-controls="form-element"
                        aria-selected="true">
                        En tant Que Element</button>
                    <button class="nav-link text-uppercase border text-dark d-inline-block w-50" id="nav-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#form-chef" type="button" role="tab" style="font-weight: bold;font-family:cursive" aria-controls="nav-profile"
                        aria-selected="false" >En tant que Chef</button>
                </div>
            </nav>
        </div>
        <div class="card-body bg-gradient" style="background-color: rgba(200,10,10,.4);">

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="form-element" role="tabpanel"
                    aria-labelledby="formulaire de connexion en tant que element" tabindex="0">
                    <div class="card">
                        <div class="card-header border">
                            <h4>Element</h4>
                        </div>
                        <div class="card-body shadow border">
                            <div class="mb-4">
                                <label for="matricule" class="form-label">Matricule <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="matricule"
                                    placeholder="saisissez votre matricule">
                            </div>
                            <hr>
                            <div class="mb-4">
                                <label for="password" class="form-label">Mot de Passe <span
                                        class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="entrez votre mot de passe...">
                            </div>
                            <hr>
                            <button class="btn btn-success">
                                <span class="mdi mdi-send"></span>
                                Connexion
                            </button>
                        </div>
                    </div>


                </div>
                <div class="tab-pane fade" id="form-chef" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">
                      <div class="card">
                        <div class="card-header border">
                            <h4>Chef</h4>
                        </div>
                        <div class="card-body shadow border">
                            <div class="mb-4">
                                <label for="matricule" class="form-label">Login <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="login"
                                    placeholder="saisissez votre login">
                            </div>
                            <hr>
                            <div class="mb-4">
                                <label for="password" class="form-label">Mot de Passe <span
                                        class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="entrez votre mot de passe...">
                            </div>
                            <hr>
                            <button class="btn btn-success">
                                <span class="mdi mdi-send-circle"></span>
                                login
                            </button>
                        </div>
                    </div>

                  
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
