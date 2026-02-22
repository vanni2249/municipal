<?php

namespace App\Livewire\Admin\Employees\Components;

use Livewire\Attributes\On;
use Livewire\Component;

class Positions extends Component
{
    public $employee;

    public $admin;

    public function mount($employee)
    {
        $this->employee = $employee;
        $this->admin = $employee->admin;
    }

    public function render()
    {
        return view('livewire.admin.employees.components.positions');
    }
}
