<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Business;
use App\Traits\BusinessCode;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MerchantBusinessForm extends Form
{
    use BusinessCode;

    public $merchant;
    public $business;
    public $business_address;
    public $business_type_id;
    public $business_category_id;
    public $name;
    public $number;
    public $phone;
    public $place_id;
    public $address;
    public $city;   
    public $postal_code;

    public function rules(): array
    {
        return [
            'business_type_id' => ['required', 'exists:business_types,id'],
            'business_category_id' => ['required', 'exists:business_categories,id'],
            'name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'string', 'max:20'],
            'place_id' => ['required', 'exists:places,id'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:100'],
            'postal_code' => ['required', 'string', 'max:20'],
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
            'register_id' => $this->merchant,
        ]);

        $business->addresses()->create([
            'name' => 'Por defecto',
            'place_id' => $this->place_id,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'is_primary' => true,
        ]);

        return redirect()->route('admin.merchants.businesses.show', [
            'merchant' => $business->register_id,
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
            'phone' => $this->phone,
        ]);

        $this->business->addresses()->update([
            'place_id' => $this->place_id,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
        ]);

        return redirect()->route('admin.merchants.businesses.show', [
            'merchant' => $this->business->register_id,
            'business' => $this->business->id,
        ]);
    }
}
