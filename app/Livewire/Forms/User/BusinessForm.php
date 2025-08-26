<?php

namespace App\Livewire\Forms\User;

use App\Models\Business;
use App\Traits\BusinessCode;
use Livewire\Attributes\Validate;
use Livewire\Form;

class BusinessForm extends Form
{
    use BusinessCode;

    public $business;
    public $business_type_id;
    public $business_category_id;
    public $business_address;
    public $name;
    public $number;
    public $place_id;
    public $address;
    public $city;
    public $postal_code;
    public $phone;
    public $register;
    public $user;

    public function rules()
    {
        return [
            'business_type_id' => ['required'],
            'business_category_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:50'],
            'place_id' => ['required', 'exists:places,id'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:100'],
            'postal_code' => ['required', 'string', 'max:20'],
            'phone' => ['nullable', 'string', 'max:20'],
        ];
    }

    public function store()
    {
        $business = Business::create([
            'business_type_id' => $this->business_type_id,
            'business_category_id' => $this->business_category_id,
            'code' => $this->createBusinessCode(),
            'name' => $this->name,
            'number' => $this->number,
            'phone' => $this->phone,
            'register_id' => $this->register->id,
        ]);

        $business->addresses()->create([
            'name' => 'Sede Principal',
            'place_id' => $this->place_id,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'is_primary' => true,
        ]);

        return redirect()->route('users.businesses.show', ['business' => $business])->with('success', 'Negocio creado exitosamente.');
    }

    public function update()
    {
        $this->business->update([
            'business_type_id' => $this->business_type_id,
            'business_category_id' => $this->business_category_id,
            'name' => $this->name,
            'number' => $this->number,
            'phone' => $this->phone,
        ]);

        $this->business->addresses()->update([
            'place_id' => $this->place_id,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
        ]);

        return redirect()->route('users.businesses.show', ['business' => $this->business])->with('success', 'Negocio actualizado exitosamente.');
    }
}
