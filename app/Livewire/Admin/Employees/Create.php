<?php

namespace App\Livewire\Admin\Employees;

use App\Livewire\Forms\Admin\EmployeeForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public EmployeeForm $form;

    public function save()
    {
        $this->validate();

        $this->form->save();
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'form.name' || $propertyName === 'form.lastname') {
            if (!empty($this->form->name) && !empty($this->form->lastname)) {
                // get first word of lastname and first letter of name and append 1 or increment if exists
                $firstWordLastname = explode(' ', $this->form->lastname)[0];
                $firstLetterName = substr($this->form->name, 0, 1);
                $username = strtolower($firstWordLastname) . strtolower($firstLetterName);
                $existingCount = \App\Models\Admin::where('username', 'like', $username . '%')->count();
                if ($existingCount > 0) {
                    $username .= ($existingCount + 1);
                } else {
                    $username .= '1';
                }
                $this->form->name = ucfirst($this->form->name);
                $this->form->lastname = ucfirst($this->form->lastname);

                $this->form->username = $username;
            }
        }
    }


    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.employees.create');
    }
}
