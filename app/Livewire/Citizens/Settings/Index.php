<?php

namespace App\Livewire\Citizens\Settings;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public function placeholder()
    {
        return view('placeholders.views.citizens.settings-index');
    }

    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.settings.index');
    }
}
