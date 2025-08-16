<?php

namespace App\Livewire\Admin\Visitors;

use App\Models\Register;
use App\Models\Visitor;
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
        return view('livewire.admin.visitors.index',[
            'visitors' => Register::where('type_id', 7)->paginate(10),
        ]);
    }
}
