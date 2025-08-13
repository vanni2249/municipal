<?php

namespace App\Livewire\Admin\Employees;

use App\Models\Admin;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $employee;
    public $name;
    public $email;
    public $phone;

    public function mount($employee)
    {
        $this->employee = Admin::findOrFail($employee);
        $this->name = $this->employee->name;
        $this->email = $this->employee->email;
        $this->phone = $this->employee->phone;
    }

    public function items()
    {
        return collect([
            ['label' => 'Nombre', 'value' => $this->employee->name],
            ['label' => 'Apellidos', 'value' => $this->employee->lastname],
            ['label' => 'Correo Electronico', 'value' => $this->employee->email],
            ['label' => 'Usuario', 'value' => $this->employee->username],
            ['label' => 'ID de Empleado', 'value' => $this->employee->id],
            ['label' => 'Telefono', 'value' => $this->employee->phone],
            ['label' => 'Fecha de registro', 'value' => $this->employee->getCreatedAt()],
            ['label' => 'Fecha de actualizacion', 'value' => $this->employee->getUpdatedAt()],
            ['label' => 'Ultima conexion', 'value' => $this->employee->getLastLogin()],
            ['label' => 'Bloqueado', 'value' => $this->employee->getBlocked()],
            ['label' => 'Fecha de bloqueo', 'value' => $this->employee->getBlockedAt()],
        ]);
    }

    public function updateEmployee()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:admins,email,' . $this->employee->id,
            'phone' => 'nullable|string|max:20',
        ]);
        $this->employee->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        $this->dispatch('close-modal', 'edit-employee-modal');
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.employees.show', [
            'items' => $this->items(),
        ]);
    }
}
