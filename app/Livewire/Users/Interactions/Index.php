<?php

namespace App\Livewire\Users\Interactions;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.interactions.index', [
            'interactions' => $this->user->interactions()->with(['service', 'messages'])->orderBy('created_at', 'desc')->get(),
        ]);
    }
}
