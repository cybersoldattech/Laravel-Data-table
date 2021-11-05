<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserForm extends Component
{
    public $userName;

    protected $rules = [
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
