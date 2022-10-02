<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Mixed_;

class Chat extends Component
{
    public $msgText = '';
    public $listMessages = [];
    public $message = null;
    public function sendMessage(){
        $this->message = null;
        //je verifie si le message est vide
        if($this->msgText != ''){
            $message = Message::query()->create(
                [
                    'message'=>$this->msgText,
                    'element_id'=>auth()->user()->getPersonnel()->id,
                    'unite_id'=>auth()->user()->getPersonnel()->unite->id,
                ]
            );
            $this->listMessages[] = $message;
            $this->msgText = '';
            session()->put('messages.count',(session()->get('messages.count',0) + 1 ));
        }
    }
    public function render()
    {
        return view('livewire.chat');
    }

    public function mount(){
        #je recupere tous mes messages
        $this->listMessages = Message::query()->where("element_id","=",auth()->user()->getPersonnel()
            ->id)->get();
    }

}
