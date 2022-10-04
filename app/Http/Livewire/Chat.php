<?php

namespace App\Http\Livewire;

use App\Models\Element;
use App\Models\Message;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Mixed_;

class Chat extends Component
{
    public $msgText = '';
    public  $senders = [];
    public $listMessages = [];
    public $recievesMsg = [];
    public $isElementSelected = false;
    public $selectedElementId = 0;
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
        if (auth()->user()->getPersonnelName() == "Chef"){
            $this->getRecievesMessage();
        }
        return view('livewire.chat');
    }

    function getRecievesMessage(){
        //je recuperes ceux qui ont envoyers de messages
        $senders = Element::with('messages')
            ->groupBy("messages.element_id",'personnels.profile_photo_path')
            ->join("personnels","personnels.id","=","elements.personnel_id")
            ->join("messages","messages.element_id","=","elements.id")
            ->select("messages.element_id")->selectRaw("count(*) as nb , personnels.profile_photo_path")
            ->get();
//        dd($senders);
        $this->senders = $senders;
    }
    public function mount(){


        #je recupere tous mes messages
        $this->listMessages = Message::query()->where("element_id","=",auth()->user()->getPersonnel()
            ->id)->get();
    }


    function setSelectedElementIndex($id){
        if($id != $this->selectedElementId){
            $this->selectedElementId = $id;
            $this->recievesMsg = Message::query()->where("element_id","=",$this->selectedElementId)->get();
            if($this->isElementSelected == false){
                $this->isElementSelected = true;
            }
        }
    }
}
