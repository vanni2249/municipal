<?php

namespace App\Livewire\Guest\Types;

use Livewire\Component;

class Show extends Component
{
    public $type;

    public function mount($type)
    {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.guest.types.show', [
            'type' => $this->type,
        ]);
    }
}
