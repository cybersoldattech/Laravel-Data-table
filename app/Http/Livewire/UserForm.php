<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserForm extends Component
{
    public $userName;

    protected  $rules =[
        'userName' => 'required|min:3|string',
    ];

    public function mount(User $user)
    {
    }

    public function save()
    {
        $this->validate();
    }

    public function render()
    {

        return view('livewire.user-form');
    }
}
