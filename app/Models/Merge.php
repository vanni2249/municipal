<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merge extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'code',
        'account_accountant_id',
        'account_merchant_id',
        'business_id',
    ];

    // public function businesses()
    // {
    //     return $this->belongsToMany(Business::class, 'business_merge', 'merge_id', 'business_id')
    //     ->withTimestamps();
    // }

    public function accountant()
    {
        return $this->belongsTo(Account::class, 'account_accountant_id');
    }

    public function merchant()
    {
        return $this->belongsTo(Account::class, 'account_merchant_id');
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function statuses()
    {
        return $this->morphMany(Status::class, 'statusable');
    }

    public function status()
    {
        return $this->morphOne(Status::class, 'statusable')->latestOfMany();
    }
}
