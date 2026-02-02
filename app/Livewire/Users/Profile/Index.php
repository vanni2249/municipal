<?php

namespace App\Livewire\Users\Profile;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $user;

    public function mount()
    {
        $this->user = auth()->user()->with('status.statusType')->find(auth()->id());
    }
    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.profile.index');
    }
}
