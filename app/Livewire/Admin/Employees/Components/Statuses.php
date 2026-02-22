<?php

namespace App\Livewire\Admin\Employees\Components;

use App\Livewire\Forms\AdminStatusForm;
use App\Models\StatusType;
use Livewire\Component;

class Statuses extends Component
{
    public $employee;

    public $admin;
    public $status_id;

    public $selectedStatusTypeId;

    // public AdminStatusForm $form;

     public function mount($employee)
    {
        $this->employee = $employee;

        $this->admin = $this->employee->admin ?? null;

        $this->selectedStatusTypeId = $this->admin->status->statusType->id ?? null;

    }

     public function saveEmployeeAdminStatus()
    {
        // $this->form->update();
        $this->validate([
            'selectedStatusTypeId' => "required|exists:status_types,id|not_in:{$this->admin->status->statusType->id}",
        ]);
        if ($this->employee->admin) {
            $this->employee->admin->statuses()->create([
                'status_type_id' => $this->selectedStatusTypeId,
            ]);
        }
        $this->dispatch('updated-employee');
        $this->dispatch('close-modal', 'update-admin-modal');
    }
    public function render()
    {
        return view('livewire.admin.employees.components.statuses',[
             'statusTypes' => StatusType::whereIn('slug', ['active', 'inactive'])->get(),
        ]);
    }
}
