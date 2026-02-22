<?php

namespace App\Livewire\Admin\Employees\Components;

use App\Livewire\Forms\EmployeeForm;
use Livewire\Attributes\On;
use Livewire\Component;

class Details extends Component
{
    public $employee;
    public $name;
    public $last_name;
    public $birth_date;
    public $gender;
    public $email;
    public $phone;
    public $hired_at;

    public EmployeeForm $form;


     public function mount($employee)
    {
        $this->form->setEmployee($this->employee);
    }

     public function save()
    {
        $this->form->update();
        $this->dispatch('updated-employee');
        $this->dispatch('close-modal', 'update-employee-modal');
    }

    #[On('updated-employee')]
    public function render()
    {
        return view('livewire.admin.employees.components.details', [
            'employee' => $this->employee,
        ]);
    }
}
