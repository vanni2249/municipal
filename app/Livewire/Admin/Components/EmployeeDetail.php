<?php

namespace App\Livewire\Admin\Components;

use App\Livewire\Forms\EmployeeForm;
use Livewire\Attributes\On;
use Livewire\Component;

class EmployeeDetail extends Component
{
    public EmployeeForm $form;
    public $employee;

    public function mount($employee)
    {
        $this->employee = $employee;
        $this->form->setEmployee($this->employee);
    }

    public function save()
    {
        $this->form->update();
        $this->dispatch('employee-updated');
        $this->dispatch('close-modal', 'update-employee-modal');
    }
    
    #[On('employee-updated')]
    public function render()
    {
        return view('livewire.admin.components.employee-detail',[
            'employee' => $this->employee,
        ]);
    }
}
