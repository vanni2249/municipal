<?php

namespace App\Livewire\Forms;

use App\Models\Employee;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AdminStatusForm extends Form
{
    public ?Employee $employee = null;
    public ?int $selectedStatusTypeId = null;

    public $adminStatusId;

    public function setEmployeeAdminStatus(Employee $employee)
    {
        $this->employee = $employee;
        $this->adminStatusId = $employee->admin->status->status_type_id ?? null;
    }

    public function update()
    {
        $this->validate([
            'selectedStatusTypeId' => "required|exists:status_types,id|not_in:{$this->adminStatusId}",
        ]);
        if ($this->employee->admin) {
            $this->employee->admin->statuses()->create([
                'status_type_id' => $this->selectedStatusTypeId,
            ]);
        }
    }
}
