<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class FormClicker extends Component
{

    public $name;
    public $email;
    public $password;

    public function createUser()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
    }

    public function render()
    {
        $users = User::all();

        return view('livewire.form-clicker', compact('users'));
    }
}
