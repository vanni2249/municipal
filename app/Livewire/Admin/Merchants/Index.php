<?php

namespace App\Livewire\Admin\Merchants;

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
        return view('livewire.admin.merchants.index',[
            'merchants' => \App\Models\Merchant::paginate(10),
        ]);
    }
}
