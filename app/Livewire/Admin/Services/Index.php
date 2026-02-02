<?php

namespace App\Livewire\Admin\Services;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;

#[Lazy()]
class Index extends Component
{
    use WithPagination;

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
        return view('livewire.admin.services.index', [
            'services' => \App\Models\Service::orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
