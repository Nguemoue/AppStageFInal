<div class="mt-3 mx-2">
    <form action="" wire:submit.prevent='search'>
        @csrf
        <div class="input-group">
            <span class="input-group-text">
                <select name="entite"  id="entite" class="form-select">
                    <option value=""  hidden>l'objet de recherche</option>
                    <option value="unite" class="p-2">Unite</option>
                    <option value="element">ELement</option>
                </select>  
            </span>
            <input type="text" style="box-shadow: none" required wire:model.defer='q' id="search"
                class="form-control" placeholder="rechercher une Unite , Element , ...">
            <span class="input-group-text">
                <select required name="filter" wire:model.defer='filter' class="form-select">
                    <option value="" selected hidden> option 👇🏻</option>
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

        @if (empty($data))
            <x-result-search-component :datas="$data"/>
        @endif
    </form>
</div>
