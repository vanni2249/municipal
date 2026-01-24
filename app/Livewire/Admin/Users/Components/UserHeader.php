<?php

namespace App\Livewire\Admin\Users\Components;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy  ()]
class UserHeader extends Component
{
    public $user;

    public function mount($user)
    {
        sleep(1);
        $this->user = $user;
    }

    public function placeholder()
    {
        return view('placeholders.header-skeleton');
    }
    public function render()
    {
        return view('livewire.admin.users.components.user-header');
    }
}
