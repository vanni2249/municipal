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
        'account_id',
    ];

    public function businessType()
    {
        return $this->belongsTo(BusinessType::class, 'business_type_id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
    
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function defaults()
    {
        return $this->morphMany(UserDefault::class, 'defaultable');
    }

    public function merges()
    {
        return $this->hasMany(Merge::class);
    }

    public function statuses()
    {
        return $this->morphMany(Status::class, 'statusable');
    }

    public function status()
    {
        return $this->morphOne(Status::class, 'statusable')->latestOfMany();
    }

    public function address()
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function interactions()
    {
        return $this->hasMany(Interaction::class);
    }
}
