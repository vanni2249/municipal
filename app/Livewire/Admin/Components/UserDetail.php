<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;

class UserDetail extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.admin.components.user-detail');
    }
}
