<?php

namespace App\Livewire\Forms\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EmployeeForm extends Form
{
    public $employee;
    public $name;
    public $lastname;
    public $date_of_birth;
    public $email;
    public $phone;
    public $username;

    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'max:50',
                'min:6',
            ],
            'lastname' => 'required|string|max:50',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|max:255|unique:admins,email' . ($this->employee ? ',' . $this->employee->id : ''),
            'phone' => 'required|string|max:20',
        ];
    }

    public function save()
    {
        $employee = \App\Models\Admin::create([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'password' => bcrypt('password'), // Default password, should be changed later
            'phone' => $this->phone,
            'username' => $this->username,
            'admin_id' => Auth::guard('admin')->user()->id, // Assuming the admin creating the employee is logged in
        ]);

        return redirect()->route('admin.employees.show', $employee->id)
            ->with('success', 'Empleado creado exitosamente.');
    }

    public function update()
    {

        if ($this->employee) {
            $this->employee->update([
                'date_of_birth' => $this->date_of_birth,
                'email' => $this->email,
                'phone' => $this->phone,
            ]);
        }

        return redirect()->route('admin.employees.show', $this->employee->id)
            ->with('success', 'Empleado actualizado exitosamente.');
    }
}
