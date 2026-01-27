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
    ];

    public function business_type()
    {
        return $this->belongsTo(BusinessType::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
    
    public function accounts()
    {
        return $this->belongsToMany(Account::class, 'account_business', 'business_id', 'account_id')
        ->withPivot(['ulid', 'number', 'is_active'])
        ->withTimestamps();
    }

    public function statuses()
    {
        return $this->morphMany(Status::class, 'statusable');
    }

    public function status()
    {
        return $this->morphOne(Status::class, 'statusable')->latestOfMany();
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
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
