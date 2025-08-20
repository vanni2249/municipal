<?php

namespace App\Livewire\Users\Merchants;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $user;
    public $register;

    public function mount()
    {
        $this->user = Auth::user();
        $this->register = $this->user->register;
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.merchants.index', [
            'merchants' => $this->register->registers()->get(),
        ]);
    }
}
