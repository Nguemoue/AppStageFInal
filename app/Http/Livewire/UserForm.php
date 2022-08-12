<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserForm extends Component
{
    public User $user;
    protected $rules = [
        'user.name'=>"required",
        "user.email"=>"required"
    ];
    public function render()
    {
        return view('livewire.user-form');
    }
}
