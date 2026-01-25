<?php

namespace App\Livewire\Admin\Admins;

use App\Models\Admin;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $administrator;

    public function mount($administrator)
    {
        $this->administrator = Admin::where('ulid', $administrator)->firstOrFail();
    }
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.admins.show');
    }
}
