<?php

namespace App\Livewire\Admin\Employees;

use App\Livewire\Forms\EmployeeForm;
use App\Models\Employee;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public EmployeeForm $form;

    public function mount()
    {
    }

    public function save()
    {
        $employee =$this->form->store();


        return $this->redirect(route('admin.employees.show', ['department' => request()->department(), 'employee' => $employee->ulid]), navigate: true);

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
