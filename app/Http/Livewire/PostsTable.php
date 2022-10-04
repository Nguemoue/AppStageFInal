<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class PostsTable extends Component
{

    use WithPagination;
    private const  placeholderPrefix = "Filtrer par ";
    public  string $search = '';
    public int  $editId = 0;
    public string  $filter = '';
    public string $placeholder = '';
    public function setEditId(int $id){

        $this->editId = $id;
    }
    protected $queryString = [
        'search'=> ['except'=>'']
    ];
    public function increment(){
        $this->count +=1;
    }

    function updating($name,$value){
        if($name == "search") {
            $this->resetPage();
        }
    }

    public function  mount(){
        $this->filter = "Nom";
        $this->placeholder = self::placeholderPrefix.$this->filter;
    }
    public function render()
    {

        return view('livewire.posts-table',[
            'users'=>User::query()->join("elements","personnels.id","=","elements.personnel_id")
                ->where("nom","like","%{$this->search}%")
                ->where("elements.unite_id","=",auth()->user()->getPersonnel()->unite_id)
                ->whereKeyNot(auth()->user()->id)->select("personnels.*")->paginate(4)
        ]);
    }
}
