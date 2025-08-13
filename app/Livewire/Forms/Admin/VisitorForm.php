<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class VisitorForm extends Form
{
    public $visitor;
    public $name;
    public $date_of_birth;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $postal_code;

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'email' => 'nullable|email|unique:visitors,email,' . ($this->visitor->id ?? 'NULL') . ',id',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:10',
        ];
    }

    public function save()
    {
        $visitor = Visitor::create([
            'name' => $this->name,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'admin_id' => Auth::guard('admin')->id(),
        ]);

        return redirect()->route('admin.visitors.show', $visitor);
    }

    public function update()
    {
        $this->visitor->update([
            'name' => $this->name,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
        ]);

        return redirect()->route('admin.visitors.show', $this->visitor);
    }
}
