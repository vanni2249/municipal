<?php

namespace App\Livewire\Businesses\Settings;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public function placeholder()
    {
        return view('placeholders.views.businesses.settings-index');
    }

    #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.settings.index');
    }
}
