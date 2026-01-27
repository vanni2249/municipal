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

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'application_document');
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
