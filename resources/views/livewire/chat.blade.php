@php($user = auth()->user())
<div class="my-4">

    <div class="card w-75 mx-auto">
        <div class="card-header">
            <h6 class="card-title">Message a envoyer a l'unite</h6>
        </div>
        <div class="card-body">
            <div class="card-text  p-2" style="min-height: 50vh" >
                <div class="">
                    @forelse($listMessages as $message)
                        <x-message-component :message="$message" class="mb-2"/>
                    @empty
                        <span class="badge bg-secondary d-block text-center">aucun message n'as encore ete envoyes.</span>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class='input-group'>
                <div class='input-group-text'>
                    <span class='mdi mdi-message'></span>

                </div>
                <textarea wire:model.defer="msgText" cols="1" rows="1"  type="search" class="form-control" placeholder="votre message">
                </textarea>
                    <div class="input-group-text">
                    <button wire:click="sendMessage" class="btn btn-success mdi mdi-send"></button>
                </div>
            </div>
        </div>

    </div>

</div>

