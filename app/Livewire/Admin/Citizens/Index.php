<?php

namespace App\Livewire\Admin\Citizens;

use App\Models\Register;
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
            'citizens' => Register::whereIn('type_id',[1,3])->paginate(10),
        ]);
    }
}
