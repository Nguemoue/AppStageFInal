<?php

namespace App\Http\Livewire;

use App\Models\Unite;
use App\Models\Element;
use Livewire\Component;

class SearchElement extends Component
{
    public Element $element;
    public Unite $unite;
    public function render()
    {
        return view('livewire.search-element',[
            
        ]);
    }
}
