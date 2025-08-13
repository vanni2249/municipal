<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'business_category_id',
        'name',
        'code',
        'merchant_number',
        'address',
        'postal_code',
        'phone',
        'email',
        'place_id',
        'merchant_id',
        'is_show',
        'user_id',
    ];

    public function businessCategory()
    {
        return $this->belongsTo(BusinessCategory::class);
    }

    public function register()
    {
        return $this->belongsTo(Register::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
