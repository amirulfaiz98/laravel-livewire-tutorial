<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    // public function handleClick()
    // {
    //     dump('clicked');
    // }

    public $username = 'test';

    public function createNewUser()
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
    }


    public function render()
    {
        $title = 'Test';

        $users = User::all();

        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users
        ]); // can also return using compact(['title', 'users']) instead of array
    }
}
