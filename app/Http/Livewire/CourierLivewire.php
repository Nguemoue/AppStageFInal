<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class CourierLivewire extends Component
{
    use WithFileUploads;
    public $attachmentFile = null;
    public $isShowBoxAttachment  = false;
    public $isSendable = false;
    public $listCourier = [];

    public function render()
    {
        return view('livewire.courier-livewire');
    }

    function updatedPhoto(){

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

    function save(){

    }
    function hideBoxAttachment(){
        if($this->isShowBoxAttachment == true)
            $this->isShowBoxAttachment = false;
    }
    function showBoxAttachment(){
        if($this->isShowBoxAttachment == false)
            $this->isShowBoxAttachment = true;
    }
    function mount(){
        // j'initialise mes traitements
    }
}
