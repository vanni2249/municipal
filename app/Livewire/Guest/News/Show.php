<?php

namespace App\Livewire\Guest\News;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class Show extends Component
{
    public function render()
    {
        return view('livewire.guest.news.show');
    }
}
