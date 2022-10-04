<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Livewire\Component;

class SearchElement extends Component
{
    public $message = '';
    public string  $q = '';
    public String  $filter = '';
    public $data = null;
    public $isSearched = false;
    public string  $entite = '';
    public function render()
    {
        return view('livewire.search-element', [
            'data' => $this->data,
        ]);
    }
    public function search()
    {
        $this->reset("data");
        // JE DEfinit mon tableau qui va contenir mes Element a recupere
        $entiteArray = ['App\Models\User', 'App\Models\Unite'];
        $selectedItemIndex = Str::lower($this->entite) == 'unite' ? 1 : 0;
        $selectedItem = app($entiteArray[$selectedItemIndex]);
        $queryTable = $selectedItem::query();
        $attr = "*";
        if (Str::lower($this->filter) == "nom") {
            // je filtre selon la ville
            if (Str::lower($this->entite) == "element") {
                $this->data = $queryTable->where("nom", "like", "%{$this->q}%")->with(["element"])->get($attr);
            } else {
                $this->data = $queryTable->join('villes', 'ville_id', '=', 'villes.id')->get(['unites.*', 'villes.libelle']);
            }

            $this->message = "utilisateur trouve";

        } else if (Str::lower($this->filter) == "telephone") {
            $telephone = "telephone";
            if (Str::lower($this->entite) == 'unite') {
                $this->data = $queryTable->join('villes', 'ville_id', '=', 'villes.id')->get(['unites.*', 'villes.libelle']);
            }else{
                $this->data = $queryTable->where("$telephone", "like", "%{$this->q}%")->get($attr);
            }
        } else if (Str::lower($this->filter) == "adresse") {
            if (Str::lower($this->entite) == 'unite') {
                $this->data = $queryTable->join('villes', 'unites.ville_id', '=', 'villes.id')
                    ->where("villes.libelle","like","%{$this->q}%")->get(['unites.*', 'villes.libelle']);
            }else{

                $this->data = $queryTable->where('adresse', "like", "%{$this->q}%")->get($attr);
            }

        } else {
            $this->message = "aucun element ne corespond a votre recherche";
            $this->data = [];
        }

        $this->isSearched = true;
    }

}
