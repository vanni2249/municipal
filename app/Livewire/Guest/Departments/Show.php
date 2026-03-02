<?php

namespace App\Livewire\Guest\Departments;

use App\Models\Department;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $department;

    public function mount($department)
    {
        $this->department = Department::where('slug', $department)->firstOrFail();
    }

    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.guest.departments.show', [
            'department' => $this->department,
            'departments' => Department::whereNot('slug', $this->department->slug)->limit(8)->get(),
        ]);
    }
}
