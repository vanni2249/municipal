<?php

namespace App\Livewire\Admin\Citizens;

use App\Models\Citizen;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $head = true;

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.citizens.index',[
            'citizens' => Citizen::paginate(10),
        ]);
    }
}
