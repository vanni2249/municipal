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
        if ($propertyName === 'form.name') {
            // get second part of name and first letter of first part if exists add number 1 or sum
            $nameParts = explode(' ', $this->form->name);
            $username = strtolower($nameParts[1] ?? '') . substr(strtolower($nameParts[0] ?? ''), 0, 1) . 1;
            $existingUsernames = \App\Models\Admin::where('username', 'like', $username . '%')->pluck('username')->toArray();
            $counter = 1;
            while (in_array($username, $existingUsernames)) {
                $username = strtolower($nameParts[1] ?? '') . substr(strtolower($nameParts[0] ?? ''), 0, 1) . $counter;
                $counter++;
            }
        
            $this->form->username = $username;
        }
    }


    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.employees.create');
    }
}
