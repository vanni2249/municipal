<?php

namespace App\Livewire\Guest\Welcome;

use App\Models\Type;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        return view('livewire.guest.welcome.index', [
            'types' => Type::with(['services'])->get()
        ]);
    }
}
