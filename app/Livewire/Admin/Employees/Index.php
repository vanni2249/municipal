<?php

namespace App\Livewire\Admin\Employees;

use App\Models\Admin;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.employees.index', [
            'employees' => Admin::where('is_developer', false)->paginate(10),
        ]);
    }
}
