<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CourierLivewire extends Component
{
    public $isSendable = false;
    public $listCourier = [];

    public function render()
    {
        return view('livewire.courier-livewire');
    }

    function sendCourier(){

    }
    function showCourierBox(){
        if($this->isSendable == false){
            $this->isSendable = true;
        }
    }

    function hideCourierBox(){
        if($this->isSendable = true){
            $this->isSendable = false;
        }
    }

    function mount(){
        // j'initialise mes traitements
    }
}
