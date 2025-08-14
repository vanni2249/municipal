<?php

namespace App\Livewire\Forms\User;

use Livewire\Attributes\Validate;
use Livewire\Form;

class MerchantBusinessForm extends Form
{
    public $merchant;
    public $business;
    public $business_category_id;
    public $name;
    public $merchant_number;
    public $address;
    public $place_id;
    public $postal_code;
    public $phone;
    public $email;

    public function rules(): array
    {
        return [
            'business_category_id' => 'required',
            'name' => 'required|string|max:255',
            'merchant_number' => 'nullable|string|max:50',
            'address' => 'required|string|max:255',
            'place_id' => 'required',
            'postal_code' => 'required|string|max:20',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
        ];
    }

    public function store()
    {

        $business = $this->merchant->businesses()->create([
            'business_category_id' => $this->business_category_id,
            'name' => $this->name,
            'merchant_number' => $this->merchant_number,
            'address' => $this->address,
            'place_id' => $this->place_id,
            'postal_code' => $this->postal_code,
            'phone' => $this->phone,
            'email' => $this->email,
        ]);

        return redirect()->route('users.merchants.businesses.show', [
            'merchant' => $this->merchant->id,
            'business' => $business->id,
        ]);

    }

    public function update()
    {
        $this->business->update([
            'business_category_id' => $this->business_category_id,
            'name' => $this->name,
            'merchant_number' => $this->merchant_number,
            'address' => $this->address,
            'place_id' => $this->place_id,
            'postal_code' => $this->postal_code,
            'phone' => $this->phone,
            'email' => $this->email,
        ]);

        return redirect()->route('users.merchants.businesses.show', [
            'merchant' => $this->business->merchant_id,
            'business' => $this->business->id,
        ]);
    }
}
