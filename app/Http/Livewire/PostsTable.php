<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class PostsTable extends Component
{

    use WithPagination;
    public  string $search = '';
    public int  $editId = 0;

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
        if($name == "search"){
            $this->resetPage();
        }
    }
    public function render()
    {
        return view('livewire.posts-table',[
            'users'=>User::query()->where("nom","like","%{$this->search}%")->paginate(7)
        ]);
    }
}
