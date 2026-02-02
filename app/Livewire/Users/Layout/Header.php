<?php

namespace App\Livewire\Users\Layout;

use Livewire\Component;

class Header extends Component
{
    public $user;

    public function mount()
    {
        $this->user = auth()->user()->with('status.statusType')->find(auth()->id());
    }

    public function render()
    {
        return view('livewire.users.layout.header');
    }
}
