<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AccountBusiness extends Pivot
{
    protected $table = 'account_business';

    protected $fillable = [
        'ulid',
        'number',
        'account_id',
        'business_id',
        'is_active',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
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
