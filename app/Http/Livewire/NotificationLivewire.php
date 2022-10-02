<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationLivewire extends Component
{
    public $listNotifications = [];
    public function render()
    {
        return view('livewire.notification-livewire');
    }
    function mount(){
        $this->listNotifications = auth()->user()->notifications;
    }
}
