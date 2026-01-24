<?php

namespace App\Livewire\Admin\Users\Components;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class UserAccounts extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }
    public function placeholder()
    {
        return view('placeholders.card-elements-skeleton');
    }
    public function render()
    {
        return view('livewire.admin.users.components.user-accounts');
    }
}
