<?php

namespace App\Livewire\Forms\User;

use App\Models\Register;
use Livewire\Form;

class MerchantRegisterForm extends Form
{
    public $merchant;
    public $name;
    public $email;
    public $phone;
    public $date_of_birth;
    public $address;
    public $city;
    public $postal_code;
    public $user_id;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:registers,email',
            'phone' => 'nullable|numeric',
            'date_of_birth' => 'required|date',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
        ];
    }

    public function store()
    {
        Register::create([
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

        $this->reset(['name', 'phone', 'date_of_birth', 'address', 'city', 'postal_code']);

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

    }
}
