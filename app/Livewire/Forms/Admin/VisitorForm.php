<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Register;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Livewire\Form;

class VisitorForm extends Form
{
    use \App\Traits\RegisterCode;
    public $visitor;
    public $visitor_address;
    public $name;
    public $lastname;
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
            'lastname' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'email' => 'nullable|email|unique:registers,email,' . ($this->visitor->id ?? 'NULL') . ',id',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:10',
        ];
    }

    public function save()
    {
        $register = Register::create([
            'type_id' => Type::where('key', 'visitor')->first()->id,
            'code' => $this->createRegisterCode(),
            'name' => $this->name,
            'lastname' => $this->lastname,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            // 'address' => $this->address,
            // 'city' => $this->city,
            // 'postal_code' => $this->postal_code,
            'created_by' => 'admin',
            'admin_id' => Auth::guard('admin')->id(),
        ]);

        $register->addresses()->create([
            'name' => 'Por defecto',
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'is_primary' => true,
        ]);

        return redirect()->route('admin.visitors.show', $register);
    }

    public function update()
    {
        $this->visitor->update([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            // 'address' => $this->address,
            // 'city' => $this->city,
            // 'postal_code' => $this->postal_code,
        ]);

        $this->visitor->addresses()->update([
            'name' => 'Por defecto',
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'is_primary' => true,
        ]);

        return redirect()->route('admin.visitors.show', $this->visitor);
    }
}
