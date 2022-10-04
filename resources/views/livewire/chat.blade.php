@php($user = auth()->user())
<div class="my-4 container">

    @if(auth()->user()->getPersonnelName()== "Chef")
        <h4>Selectionner un element pour voir ses messages</h4>
        <div class="card">
            <div class="card-header">
                <div class="card-title"> Elements Ayant envoyer un messages</div>
            </div>
            <div class="card-body d-flex border justify-content-between p-2 flex-wrap">
                @foreach($senders as $sender)
                    <div  class="mx-2" wire:click="setSelectedElementIndex({{$sender->element_id}})">
                        <div class="position-relative">
                            <img src="{{asset('storage/'.$sender->profile_photo_path)}}" width="100"
                                 class="img rounded-end bg-danger" alt="Photo">
                            <span style="right: 0" class="position-absolute  badge bg-dark">{{$sender->nb}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{--   si le chef a cliquez sur un element     --}}
        @if($isElementSelected)
            <div class="card w-75  mt-2">
                <div class="card-header">
                    <h6 class="card-title">Listes des Messages Recues</h6>
                    <div class="text-center" wire:loading>
                        <span class="mdi mdi-sync mdi-spin"> Envoi du message ..</span>
                    </div>
                </div>
                <div class="card-body" style="max-height: 60vh;overflow-y: scroll">

                    <div class="card-text  p-2" style="min-height: 50vh" >
                        <div class="">
                            @forelse($recievesMsg as $message)
                                <x-message-component :message="$message" class="mb-2"/>
                            @empty
                                <span class="badge bg-secondary d-block text-center">aucun message n'as encore ete envoyes.</span>
                            @endforelse
                        </div>
                    </div>
                </div>

            </div>

        @endif

        {{--        --}}
    @else
        <div class="card w-75 mx-auto">
            <div class="card-header">
                <h6 class="card-title">Message a envoyer a l'unite</h6>
                <div class="text-center" wire:loading>
                    <span class="mdi mdi-sync mdi-spin"> Envoi du message ..</span>
                </div>
            </div>
            <div class="card-body" style="max-height: 60vh;overflow-y: scroll">

                <div class="card-text  p-2" style="min-height: 50vh">
                    <div class="">
                        @forelse($listMessages as $message)
                            <x-message-component :message="$message" class="mb-2"/>
                        @empty
                            <span
                                class="badge bg-secondary d-block text-center">aucun message n'as encore ete envoyes.</span>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class='input-group'>
                    <div class='input-group-text'>
                        <span class='mdi mdi-message'></span>

                    </div>
                    <textarea wire:model.defer="msgText" cols="1" rows="1" type="search" class="form-control"
                              placeholder="votre message">
                </textarea>
                    <div class="input-group-text">
                        <button wire:click="sendMessage" class="btn btn-success mdi mdi-send"></button>
                    </div>
                </div>
            </div>

        </div>
    @endif

</div>

