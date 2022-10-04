<div class="w-full px-4 my-4">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-around align-items-end align-content-center ">
            <div class="input-group">
                <input id="search" type="search" placeholder="{{$placeholder}}" style="outline: none;box-shadow: none" class="form-control w-50" wire:model.debounce.1000="search">
                <span class="input-group-text mdi mdi-filter"></span>
            </div>
        </div>
        <div class="card-body">
            <div class="text-center" wire:loading>
                <div class="text-center">
                    <span class="mdi mdi-sync mdi-spin">chargement en cours ... </span>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-between">
                @forelse($users as $user)
                    <x-element-component :key="$loop->index" class="mx-4 my-4" :personnel="$user"></x-element-component>
                @empty
                    <div class="text-muted">
                        <h4>Aucun Element</h4>
                    </div>
                @endforelse
            </div>
        </div>
        <div class="card-footer">
            {{ $users->links() }}
        </div>

    </div>
</div>
