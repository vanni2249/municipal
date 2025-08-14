<?php

namespace App\Livewire\Forms\User;

use Livewire\Attributes\Validate;
use Livewire\Form;

class BusinessForm extends Form
{
    public $business;
    public $business_type_id;
    public $business_category_id;
    public $name;
    public $merchant_number;
    public $address;
    public $place_id;
    public $postal_code;
    public $phone;
    public $user;

    public function rules()
    {
        return [
            'business_type_id' => ['required'],
            'business_category_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'merchant_number' => ['required', 'string', 'max:50'],
            'address' => ['required', 'string', 'max:255'],
            'place_id' => ['required', 'exists:places,id'],
            'postal_code' => ['required', 'string', 'max:20'],
            'phone' => ['nullable', 'string', 'max:20'],
        ];
    }

    public function store()
    {
        $business = $this->user->businesses()->create([
            'business_type_id' => $this->business_type_id,
            'business_category_id' => $this->business_category_id,
            'name' => $this->name,
            'merchant_number' => $this->merchant_number,
            'address' => $this->address,
            'place_id' => $this->place_id,
            'postal_code' => $this->postal_code,
            'phone' => $this->phone,
        ]);

        return redirect()->route('users.businesses.show', ['business' => $business])->with('success', 'Negocio creado exitosamente.');
    }

    public function update()
    {
        $this->business->update([
            'business_type_id' => $this->business_type_id,
            'business_category_id' => $this->business_category_id,
            'name' => $this->name,
            'merchant_number' => $this->merchant_number,
            'address' => $this->address,
            'place_id' => $this->place_id,
            'postal_code' => $this->postal_code,
            'phone' => $this->phone,
        ]);

        return redirect()->route('users.businesses.show', ['business' => $this->business])->with('success', 'Negocio actualizado exitosamente.');
    }
}
