<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\User;

class SearchElement extends Component
{
    public $message = '';
    public string $q = '';
    public String $filter = '';
    private $data = 0;
    
    public function render()
    {
        return view('livewire.search-element',[
            'data'=>$this->data
        ]);
    }    
    function search(){
        $this->data = [];
        $attr = ["nom","adresse","telephone","sexe","date_incorporation"];
        if(Str::lower($this->filter) == "nom"){
            // je filtre selon la ville
            $this->data = User::query()->where("nom","like","%{$this->q}%")->get($attr)->toArray();
            $this->message = "utilisateur trouve";
            
        }else if(Str::lower($this->filter) == "telephone"){
            $this->data = User::query()->where("telephone","like","%{$this->q}%")->get($attr)->toArray();
        }else if(Str::lower($this->filter) == "element"){
            $this->data = User::query()->where("element","like","%{$this->q}%")->get($attr)->toArray();
        }else{
            $this->message = "aucun element ne corespond a votre recherche";
            $this->data = [];
        }

    }

}
