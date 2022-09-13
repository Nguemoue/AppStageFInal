<div class="my-1 mx-2">
    <form action="" wire:submit.prevent='search'>
        @csrf
        <div class="input-group">
            <input type="text" style="box-shadow: none" required wire:model.defer='q' id="search"
                class="form-control" placeholder="rechercher une Unite , Element , ...">
            <span class="input-group-text">
                <select required name="filter" wire:model.defer='filter' class="w-100 h-100 p-2">
                    <option value="" selected hidden>---Filtrer par-----</option>
                    <option value="nom">Nom</option>
                    <option value="telephone">Telephone</option>
                    <option value="adresse">Adresse</option>
                </select>
            </span>
            <button type="button" wire:click="search" class="input-group-text btn btn-secondary">
                <span class="mdi mdi-magnify"></span>
            </button>
        </div>
        <div wire:loading class="text-danger text-center">Recherche des informations en cours .... <span
                class="mdi mdi-24px mdi-spin mdi-loading"></span> </div>
                
        @if ($data != 0)
            <x-result-search-component :datas="$data"/>
        @endif
    </form>
</div>
