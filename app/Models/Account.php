<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'account_type_id',
        'name',
        'lastname',
        'email',
        'phone',
        'place_id',
        'user_id',
        'is_default',
    ];

    public function accountType()
    {
        return $this->belongsTo(AccountType::class, 'account_type_id');
    }

    public function place()
    {
        return $this->belongsTo(Place::class, 'place_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function statuses()
    {
        return $this->morphMany(Status::class, 'statusable');
    }

    public function status()
    {
        return $this->morphOne(Status::class, 'statusable')->latestOfMany();
    }

    public function businesses()
    {
        return $this->belongsToMany(Business::class, 'account_business', 'account_id', 'business_id')
        ->withPivot(['ulid', 'number', 'is_active'])
        ->withTimestamps();
    }
}
