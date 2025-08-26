<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'business_type_id',
        'business_category_id',
        'code',
        'name',
        'number',
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

    public function histories()
    {
        return $this->morphMany(History::class, 'historyable');
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
