<?php

namespace App\Livewire\Admin\Accountants;

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
        return view('livewire.admin.accountants.index',[
            'accountants' => Register::whereIn('type_id', [4])->paginate(10),
        ]);
    }
}
