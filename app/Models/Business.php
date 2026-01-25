<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'name',
        'business_type_id',
        'address',
        'zip_code',
        'place_id',
        'account_id',
    ];

    public function business_type()
    {
        return $this->belongsTo(BusinessType::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
    
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function statuses()
    {
        return $this->hasMany(BusinessStatus::class);
    }

    public function status()
    {
        return $this->hasOne(BusinessStatus::class)->latestOfMany();
    }


    // public function businessType()
    // {
    //     return $this->belongsTo(BusinessType::class);
    // }

    // public function businessCategory()
    // {
    //     return $this->belongsTo(BusinessCategory::class);
    // }

    // public function register()
    // {
    //     return $this->belongsTo(Register::class);
    // }

    // public function place()
    // {
    //     return $this->belongsTo(Place::class);
    // }

    // public function actions()
    // {
    //     return $this->morphMany(Action::class, 'actionable');
    // }

    // public function addresses()
    // {
    //     return $this->morphMany(Address::class, 'addressable');
    // }
}
