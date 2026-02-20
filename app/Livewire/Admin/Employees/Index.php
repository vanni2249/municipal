<?php

namespace App\Livewire\Admin\Employees;

use App\Models\Employee;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function mount()
    {
    }
    public function placeholder()
    {
        return view('placeholders.views.partials.header-table-skeleton');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.employees.index', [
            'employees' => Employee::with('admin')
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
