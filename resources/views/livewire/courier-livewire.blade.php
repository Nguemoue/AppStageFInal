<div class="container-fluid">
    <h3 class="my-2 text-decoration-underline text-center">Courier</h3>
    <hr>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Mes Couriier</h3>
        </div>
        <div class="card-body">
            <span class="badge bg-secondary">Liste des couriers envoyes </span>
        </div>
        <div class="card-footer">
            <button class="btn btn-success" wire:click="showCourierBox"><span class="mdi mdi-send"></span> nouveau courier</button>
        </div>
    </div>
    @if($isSendable)
        <div class="card mt-3">
            <div class="card-header d-flex justify-content-between">
                <h6 class="card-title">Envoie D'un Nouvel Courier</h6>
                <button class="btn btn-danger" wire:click="hideCourierBox"><span class="mdi mdi-close-box"></span></button>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="nom">Intitule</label>
                            <input type="text" id="nom" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="content" >Intitule</label>
                            <input type="text" placeholder="contenue"  id="content" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

</div>
