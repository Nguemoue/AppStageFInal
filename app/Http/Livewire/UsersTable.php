<?php

namespace App\Http\Livewire;

use Livewire\Component;
class UsersTable extends Component
{
    public string $tableName = 'users';
    public array $users = [];
    
    public $columnSearch = [
        'name' => null,
        'email' => null,
    ];

    function render(){
        return view("livewire.users-table",[]);
    }
}