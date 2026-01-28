<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'ulid',
        'number',
        'account_id',
        'applicable_type',
        'applicable_id',
        'service_id',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
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

    public function permit()
    {
        return $this->hasOne(Permit::class);
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
}
