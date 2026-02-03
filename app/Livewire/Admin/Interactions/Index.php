<?php

namespace App\Livewire\Admin\Interactions;

use App\Models\Interaction;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public function mount()
    {
        sleep(1);
    }

    public function placeholder()
    {
        return view('placeholders.views.partials.header-table-skeleton');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.interactions.index', [
            'interactions' => Interaction::with(['account', 'business', 'status'])->paginate(20),
        ]);
    }
}
