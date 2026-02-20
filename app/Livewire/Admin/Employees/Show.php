<?php

namespace App\Livewire\Admin\Employees;

use App\Models\Employee;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Show extends Component
{
    public $employee;

    public function mount($employee)
    {
        $this->employee = Employee::where('ulid', $employee)->firstOrFail();
    }

    public function placeholder()
    {
        return view('placeholders.views.admins.admins-show');
    }
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.employees.show');
    }
}
