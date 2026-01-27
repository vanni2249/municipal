<?php

namespace App\Livewire\Guest\Welcome;

use App\Models\Type;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{

    #[Layout('layouts.landing')]
    public function render()
    {
        return view('livewire.guest.welcome.index', [
            // 'types' => Type::with(['services'])->get()
        ]);
    }
}
