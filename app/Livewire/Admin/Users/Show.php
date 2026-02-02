<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Show extends Component
{
    public $user;

    public function mount($user)
    {
        sleep(1);
        $this->user = User::where('ulid', $user)->firstOrFail();
    }

    public function placeholder()
    {
        return view('placeholders.views.admins.users-show');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.users.show', [
            'user' => $this->user,
        ]);
    }
}
