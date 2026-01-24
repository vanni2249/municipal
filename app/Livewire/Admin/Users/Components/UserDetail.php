<?php

namespace App\Livewire\Admin\Users\Components;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class UserDetail extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }
    public function placeholder()
    {
        return view('placeholders.card-detail-skeleton');
    }

    public function render()
    {
        return view('livewire.admin.users.components.user-detail');
    }
}
