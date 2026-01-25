<?php

namespace App\Livewire\Admin\Admins\Components;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class AdminHeader extends Component
{
    public $administrator;

    public function mount($administrator)
    {
        $this->administrator = $administrator;
    }

    public function placeholder()
    {
        return view('placeholders.header-skeleton');
    }
    public function render()
    {
        return view('livewire.admin.admins.components.admin-header');
    }
}
