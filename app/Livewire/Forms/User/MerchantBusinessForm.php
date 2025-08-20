<?php

namespace App\Livewire\Forms\User;

use App\Traits\BusinessCode;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MerchantBusinessForm extends Form
{
    use BusinessCode;
    public $merchant;
    public $business;
    public $business_type_id;
    public $business_category_id;
    public $name;
    public $number;
    public $place_id;
    public $address;
    public $city;
    public $postal_code;
    public $phone;

    public function rules(): array
    {
        return [
            'business_type_id' => 'required',
            'business_category_id' => 'required',
            'name' => 'required|string|max:255',
            'number' => 'nullable|string|max:50',
            'place_id' => 'required',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'phone' => 'nullable|string|max:20',
        ];
    }

    public function store()
    {

        $business = $this->merchant->businesses()->create([
            'business_type_id' => $this->business_type_id,
            'business_category_id' => $this->business_category_id,
            'code' => $this->createBusinessCode(),
            'name' => $this->name,
            'number' => $this->number,
            'place_id' => $this->place_id,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'phone' => $this->phone,
        ]);

        return redirect()->route('users.merchants.businesses.show', [
            'merchant' => $this->merchant->id,
            'business' => $business->id,
        ]);

    }

    public function update()
    {
        $this->business->update([
            'business_type_id' => $this->business_type_id,
            'business_category_id' => $this->business_category_id,
            'name' => $this->name,
            'number' => $this->number,
            'place_id' => $this->place_id,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'phone' => $this->phone,
        ]);

        return redirect()->route('users.merchants.businesses.show', [
            'merchant' => $this->business->register_id,
            'business' => $this->business->id,
        ]);
    }
}
