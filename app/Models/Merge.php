<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merge extends Model
{
    protected $fillable = [
        'business_id',
        'account_id',
        'merge_code',
    ];

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
