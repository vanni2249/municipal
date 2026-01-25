<?php

namespace App\Livewire\Admin\Admins\Components;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class AdminSessions extends Component
{
    public $administrator;

    public function mount($administrator)
    {
        $this->administrator = $administrator;
    }
    public function placeholder()
    {
        return view('placeholders.card-elements-skeleton');
    }
    public function render()
    {
        return view('livewire.admin.admins.components.admin-sessions');
    }
}
