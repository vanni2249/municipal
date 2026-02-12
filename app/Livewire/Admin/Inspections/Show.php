<?php

namespace App\Livewire\Admin\Inspections;

use App\Models\Inspection;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $inspection;

    public function mount($inspection)
    {
        $this->inspection = Inspection::where('ulid', $inspection)->with(['inspectable', 'status', 'status.statusType'])->firstOrFail();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.inspections.show', [
            'inspection' => $this->inspection,
        ]);
    }
}
