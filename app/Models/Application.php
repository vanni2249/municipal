<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'account_id',
        'business_id',
        'applicable_type',
        'applicable_id',
        'service_id',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function applicable()
    {
        return $this->morphTo();
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function statuses()
    {
        return $this->morphMany(Status::class, 'statusable');
    }

    public function status()
    {
        return $this->morphOne(Status::class, 'statusable')->latestOfMany();
    }

    public function transactions()
    {
        return $this->morphMany(Transaction::class, 'transactionable');
    }

    public function patent()
    {
        return $this->belongsTo(Patent::class, 'application_patent');
    }

    public function inspections()
    {
        return $this->morphMany(Inspection::class, 'inspectable');
    }

    public function userLogs()
    {
        return $this->morphMany(UserLog::class, 'loggable');
    }

    public function adminLogs()
    {
        return $this->morphMany(AdminLog::class, 'loggable');
    }

    public function interactions()
    {
        return $this->morphMany(Interaction::class, 'interactionable');
    }

    public function interaction()
    {
        return $this->morphOne(Interaction::class, 'interactionable')->latestOfMany();
    }

    public function invoice()
    {
        return $this->morphOne(Invoice::class, 'invoicable');
    }

    public function permit()
    {
        return $this->hasOne(Permit::class);
    }
}
