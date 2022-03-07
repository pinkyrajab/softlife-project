<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserComponent extends Component
{
    public function render()
    {
        $users = User::all();

        return view('livewire.admin.user-component',
        [
            'users' => $users

        ])->layout('layouts.livewire-admin');
    }
}
