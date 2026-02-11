<?php

namespace App\Livewire\Admin\Admins;

use App\Models\Admin;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Show extends Component
{
    
    public $administrator;

    public function mount($administrator)
    {
        $this->administrator = Admin::where('ulid', $administrator)->firstOrFail();
    }

    public function placeholder()
    {
        return view('placeholders.views.admins.admins-show');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.admins.show');
    }
}
