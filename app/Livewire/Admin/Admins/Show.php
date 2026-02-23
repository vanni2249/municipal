<?php

namespace App\Livewire\Admin\Admins;

use App\Models\Admin;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Show extends Component
{
    
    public $admin;

    public function mount($admin)
    {
        $this->admin = Admin::where('ulid', $admin)->firstOrFail();
    }

    public function placeholder()
    {
        return view('placeholders.views.admins.admins-show');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.admins.show', [
            'admin' => $this->admin,
        ]);
    }
}
