<?php

namespace App\Livewire\Guest\Services;

use App\Models\AccountType;
use App\Models\Service;
use App\Models\ServiceType;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $type;

    public function mount($type)
    {
        $this->type = AccountType::where('slug', $type)->firstOrFail();
    }
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.guest.services.index', [
            'services' => $this->type,
        ]);
    }
}
