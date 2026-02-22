<?php

namespace App\Livewire\Admin\Employees;

use App\Livewire\Forms\AdminStatusForm;
use App\Livewire\Forms\AdminForm;
use App\Livewire\Forms\EmployeeForm;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\StatusType;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Component;

#[Lazy()]
class Show extends Component
{
    
    public $employee;

    public function mount($employee)
    {
        $this->employee = Employee::with(['admin', 'admin.statuses'])->where('ulid', $employee)->firstOrFail();

    }
    public function placeholder()
    {
        return view('placeholders.views.admins.admins-show');
    }

    #[On(['updated-employee'])]
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.employees.show');
    }
}
