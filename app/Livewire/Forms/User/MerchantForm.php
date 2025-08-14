<?php

namespace App\Livewire\Forms\User;

use App\Models\Merchant;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MerchantForm extends Form
{
    public $merchant;
    public $name;
    public $date_of_birth;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $postal_code;
    public $user_id;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
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
        $merchant = Merchant::create([
            'type_id' => 2, 
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date_of_birth' => $this->date_of_birth,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'user_id' => $this->user_id,
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
            'email' => $this->email,
            'phone' => $this->phone,
            'date_of_birth' => $this->date_of_birth,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
        ]);

        return redirect()->route('users.merchants.show', ['merchant' => $this->merchant->id])
            ->with('success', 'Comerciante actualizado exitosamente.');
    }
}
