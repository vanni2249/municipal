<?php

namespace App\Livewire\Admin\Employees;

use App\Livewire\Forms\Admin\EmployeeForm;
use Illuminate\Support\Facades\Auth;
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
        $this->form->blocked = $this->form->employee->blocked_at ? true : false;
        $this->form->blocked_at = $this->form->employee->blocked_at;
        $this->form->blocked_by = $this->form->employee->blocked_by;
        $this->form->blocked_reason = $this->form->employee->blocked_reason;
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'form.blocked') {
            if ($this->form->blocked) {
                $this->form->blocked_at = now();
                $this->form->blocked_by = Auth::guard('admin')->user()->id;
            } else {
                $this->form->blocked_at = null;
                $this->form->blocked_by = null;
                $this->form->blocked_reason = null;
            }
        }
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
