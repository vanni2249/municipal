<?php

namespace App\Livewire\Forms;

use App\Models\Employee;
use App\Traits\AdminNumber;
use App\Traits\AdminUlid;
use App\Traits\AdminUsername;
use App\Traits\StatusTypeId;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AdminForm extends Form
{
    use AdminUlid, AdminNumber, AdminUsername, StatusTypeId;
    public ?Employee $employee = null;

    public $department_id;
    public $position_id;
    

    public function store()
    {
        $this->validate([
            'department_id' => 'required|exists:departments,id',
            'position_id' => 'required|exists:positions,id',
        ]);
        
        $admin = $this->employee->admin()->create([
            'ulid' => $this->createAdminUlid(),
            'number' => $this->createAdminNumber(),
            'username' => $this->createAdminUsername(),
            'password' => bcrypt('password'),
        ]);

        $admin->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
        ]);

        $admin->positions()->create([
            'position_id' => $this->position_id,
            'assigned_at' => now(),
            'is_active' => true,
            'is_default' => true,
        ]);

    }
}
