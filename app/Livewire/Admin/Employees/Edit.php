<?php

namespace App\Livewire\Admin\Employees;

use App\Livewire\Forms\Admin\EmployeeForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public EmployeeForm $form;

    public function mount($employee)
    {
        $this->form->employee = \App\Models\Admin::findOrFail($employee);
        $this->form->name = $this->form->employee->name;
        $this->form->lastname = $this->form->employee->lastname;
        $this->form->date_of_birth = $this->form->employee->date_of_birth;
        $this->form->email = $this->form->employee->email;
        $this->form->phone = $this->form->employee->phone;
        $this->form->username = $this->form->employee->username;
    }

    public function save()
    {
        $this->validate();

        $this->form->update();
    }
    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.employees.edit');
    }
}
