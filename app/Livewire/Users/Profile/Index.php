<?php

namespace App\Livewire\Users\Profile;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{

    public function mount()
    {
    }

    public function placeholder()
    {
        return view('placeholders.views.users.profile-skeleton');
    }

    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.profile.index', [
            'user' => auth()->user()->with('status.statusType')->find(auth()->id()),
        ]);
    }
}
