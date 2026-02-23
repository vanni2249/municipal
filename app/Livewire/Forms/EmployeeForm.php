<?php

namespace App\Livewire\Forms;

use App\Models\Employee;
use App\Traits\EmployeeNumber;
use App\Traits\EmployeeUlid;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EmployeeForm extends Form
{
    use EmployeeUlid, EmployeeNumber;
    public ?int $employee = null;
    public $name;
    public $last_name;
    public $birth_date;
    public $gender;
    public $email;
    public $phone;
    public $hired_at;

    public function setEmployee(Employee $employee)
    {
        $this->employee = $employee->id;
        $this->name = $employee->name;
        $this->last_name = $employee->last_name;
        $this->birth_date = $employee->birth_date;
        $this->gender = $employee->gender;
        $this->email = $employee->email;
        $this->phone = $employee->phone;
        $this->hired_at = $employee->hired_at;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|unique:employees,email,' . $this->employee,
            'phone' => 'nullable|string|max:20',
            'hired_at' => ['required', 'date', Rule::date()->format('Y-m-d')],
        ]);

        $employee = Employee::create([
            'ulid' => $this->createEmployeeUlid(),
            'number' => $this->generateEmployeeNumber(),
            'name' => $this->name,
            'last_name' => $this->last_name,
            'birth_date' => $this->birth_date,
            'gender' => $this->gender,
            'email' => $this->email,
            'phone' => $this->phone,
            'hired_at' => $this->hired_at,
        ]);

        return $employee;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|unique:employees,email,' . $this->employee,
            'phone' => 'nullable|string|max:20',
            'hired_at' => 'required|date',
        ]);

        $employee = Employee::findOrFail($this->employee);
        
        $employee->update([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'birth_date' => $this->birth_date,
            'gender' => $this->gender,
            'email' => $this->email,
            'phone' => $this->phone,
            'hired_at' => $this->hired_at,
        ]);

    }
}
