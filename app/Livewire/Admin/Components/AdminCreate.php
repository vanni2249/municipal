<?php

namespace App\Livewire\Admin\Components;

use App\Livewire\Forms\AdminForm;
use App\Models\Admin;
use App\Models\Department;
use App\Models\Position;
use Livewire\Component;

class AdminCreate extends Component
{
    public $departments = [];
    public $positions = [];

    public AdminForm $form;

    public function mount($employee)
    {
        $this->form->employee = $employee;
        $this->departments = Department::all();
    }

    public function updatedFormDepartmentId($value)
    {
        $this->form->position_id = null;
        $this->positions = Position::where('department_id', $this->form->department_id)->get();
    }

    public function save()
    {
        $this->form->store();

        return $this->redirect(route('admin.employees.show', ['department' => request()->department(), 'employee' => $this->form->employee->ulid]), navigate: true);


        $this->dispatch('close-modal', 'create-admin-modal');
    }

    public function render()
    {
        return view('livewire.admin.components.admin-create');
    }
}
