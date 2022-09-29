<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ResultSearchComponent extends Component
{
    public $type = null;
    public $value = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value , $type)
    {
        $this->value = $value;
        $this->type= $type;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.result-search-component');
    }
}
