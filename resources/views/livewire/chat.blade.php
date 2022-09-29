<div>
    <div class="card">
        <div class="card-header">
            <img src="{{ asset('assets/'.$user->profile_photo_path) }}" alt="Image" class="rounded-circle"/>
            <span class="text-danger"> {{ $user->nom}}</span>
        </div>
        <div class="card-body">
            <div class="card-text">
                
            </div>
        </div>
        <div class="card-footer">
            <div class='input-group'>
                <div class='input-group-text'>
                    <span class='mdi mdi-message'></span>
                </div>
                <input type="search" class="form-control" placeholder="votre message">
                <div class="input-group-text">
                    <span class="mdi mdi-send"></span>
                </div>
            </div>
        </div>

    </div>

</div>
