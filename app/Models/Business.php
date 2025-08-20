<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'business_type_id',
        'business_category_id',
        'name',
        'code',
        'number',
        'address',
        'postal_code',
        'city',
        'phone',
        'email',
        'place_id',
        'register_id',
        'is_show',
    ];

    public function businessType()
    {
        return $this->belongsTo(BusinessType::class);
    }

    public function businessCategory()
    {
        return $this->belongsTo(BusinessCategory::class);
    }

    public function register()
    {
        return $this->belongsTo(Register::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
