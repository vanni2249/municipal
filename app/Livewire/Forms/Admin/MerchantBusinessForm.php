<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Business;
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
            'business_category_id' => ['required', 'exists:business_categories,id'],
            'name' => ['required', 'string', 'max:255'],
            'merchant_number' => ['required', 'string', 'max:50'],
            'address' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:20'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email', 'max:255'],
            'place_id' => ['required', 'exists:places,id'],
        ];
    }

    public function store()
    {
        $business = Business::create([
            'business_category_id' => $this->business_category_id,
            'name' => $this->name,
            'merchant_number' => $this->merchant_number,
            'address' => $this->address,
            'postal_code' => $this->postal_code,
            'phone' => $this->phone,
            'email' => $this->email,
            'place_id' => $this->place_id,
            'merchant_id' => $this->merchant,
        ]);

        return redirect()->route('admin.merchants.businesses.show', [
            'merchant' => $business->merchant_id,
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
            'postal_code' => $this->postal_code,
            'phone' => $this->phone,
            'email' => $this->email,
            'place_id' => $this->place_id,
        ]);

        return redirect()->route('admin.merchants.businesses.show', [
            'merchant' => $this->business->merchant_id,
            'business' => $this->business->id,
        ]);
    }
}
