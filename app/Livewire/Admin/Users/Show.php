<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = User::where('ulid', $user)->firstOrFail();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.users.show', [
            'user' => $this->user,
        ]);
    }
}
