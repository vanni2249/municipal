<?php

namespace App\Livewire\Admin\Inspections;

use App\Models\Inspection;
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
        return view('livewire.admin.inspections.index', [
            'inspections' => Inspection::with(['inspectionType', 'status', 'status.statusType'])->paginate(20),
        ]);
    }
}
