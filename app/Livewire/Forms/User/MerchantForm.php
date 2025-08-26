<?php

namespace App\Livewire\Forms\User;

use App\Models\Register;
use App\Traits\RegisterCode;
use Livewire\Form;

class MerchantForm extends Form
{
    use RegisterCode;

    public $merchant;
    public $name;
    public $lastname;
    public $date_of_birth;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $postal_code;
    public $register_id;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|numeric',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
        ];
    }

    public function store()
    {
        $merchant = Register::create([
            'type_id' => 2, 
            'code' => $this->createRegisterCode(),
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'date_of_birth' => $this->date_of_birth,
            // 'address' => $this->address,
            // 'city' => $this->city,
            // 'postal_code' => $this->postal_code,
            'register_id' => $this->register_id,
            'created_by' => 'accountant'
        ]); 

        $merchant->addresses()->create([
            'name' => 'Por defecto',
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'is_primary' => true,
        ]);

        $this->reset([
            'name',
            'phone',
            'date_of_birth',
            'address',
            'city',
            'postal_code',
        ]);

        return redirect()->route('users.merchants.show', ['merchant' => $merchant->id])
            ->with('success', 'Comerciante creado exitosamente.');

    }

    public function update()
    {
        $this->merchant->update([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'date_of_birth' => $this->date_of_birth,
            // 'address' => $this->address,
            // 'city' => $this->city,
            // 'postal_code' => $this->postal_code,
        ]);

        $this->merchant->addresses()->create([
            'name' => 'Por defecto',
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'is_primary' => true,
        ]);

        return redirect()->route('users.merchants.show', ['merchant' => $this->merchant->id])
            ->with('success', 'Comerciante actualizado exitosamente.');
    }
}
