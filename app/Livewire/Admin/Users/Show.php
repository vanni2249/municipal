<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;

class Show extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user->load('category');
    }
    public function render()
    {
        return view('livewire.admin.users.show', [
            'user' => $this->user,
        ]);
    }
}
